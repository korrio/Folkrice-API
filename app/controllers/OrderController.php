<?php

use Formativ\Billing\GatewayInterface;
use Formativ\Billing\DocumentInterface;
use Formativ\Billing\MessengerInterface;

class OrderController
extends BaseController
{
  protected $gateway;
  protected $document;
  protected $messenger;

  public function __construct(
    GatewayInterface $gateway,
    DocumentInterface $document,
    MessengerInterface $messenger
  )
  {
    $this->gateway = $gateway;
    $this->document = $document;
    $this->messenger = $messenger;
  }

  public function checkout($order_id)
  {
    $inputs = Input::get();
    $the_order = OrderController::show($order_id);

    // $query = Order::with([
    //   "account",
    //   "orderItems",
    //   "orderItems.product",
    //   "orderItems.product.category"
    // ]);
    // $query->where("id", $order_id);
    // $query->state = "checkout";
    // $query->save();

    $s = array();

    $s["order_id"] = $order_id;
    $s["account_id"] = 12;
    //$s["id"] = $address_id;
    $s["first_name"] = "Thana";
    $s["last_name"] = "Ngoen";
    $s["address_name"] = "บริษัท อควาริโอ จำกัด";
    $s["address_no"] = "77/545";
    $s["moo"] = "12";
    $s["soi"] = "มัยลาภ";
    $s["road"] = "ประเสริฐมนูญกิจ";
    $s["province"] = 1;
    $s["district"] = 1;
    $s["sub_district"] = 1;
    $s["post_code"] = "10230";
    $s["is_default"] = true;

    $the_order["state"] = "checkout";
    //$the_order["shipping"] = $s;

    $validator = Validator::make($s, [
       'post_code' => 'required|min:5',
      'province' => 'required',
      'district' => 'required',
      'sub_district' => 'required'
    ]);

    if($validator->passes()) {
      $addressItem = AddressItem::create($s);

    //save address to address list return -> address id
      // $address = Address::create([
      //   //"account_id" => Input::get("account")
      //   "account_id" => 12
      // ]);

      $the_order["shipping"] = $addressItem->toArray();

      return $the_order;
    } else {
      return Response::json([
        "status" => "error",
        "errors" => $validator->errors()->toArray()
      ]);
    }

    

      // try
      // {
      //   $items = json_decode(Input::get("shipping"));
      // }
      // catch (Exception $e)
      // {
      //   return Response::json([
      //     "status" => "error",
      //     "errors" => [
      //       "items" => [
      //         "Invalid items format."
      //       ]
      //     ]
      //   ]);
      // }

    //bind address id with order($id) and account($id)

    
  }

  public static function show($order_id)
  {
    $query = Order::with([
      "account",
      "orderItems",
      "orderItems.product",
      "orderItems.product.category"
    ]);

    $account = Input::get("account");

    if ($query)
    {
      if(is_numeric($order_id)) {
        $query->where("id", $order_id);
      } else {
        if($account)
          $query->where("account_id", $account);
        else
          $query->get();
      }
    }

    $orders = $query->get();

    if($orders->count() == 1) {
      $sub_total = 0;

      $weight_total = 0;

      $delivery_total = 0;

      $the_order = null;

      foreach ($orders as $order) {
        $the_order = $order;
        foreach($order->order_items as $item) {
          $sub_total += $item->quantity * $item->price;
          $product = Product::where("id",$item->product_id)->first();
          //print_r($product);
          if($product)
            $weight_total += $product->weight;
        }
      }

      //var_dump($order);

      if($the_order) {
        $the_order->weight_total = $weight_total;
      
      $weight_kg_total = $weight_total/1000;
      $the_order->weight_kg_total = $weight_kg_total;

      //echo $weight_kg_total;

      if($weight_kg_total > 0)
        $delivery_total = Helpers::getParcelCost(floor($weight_kg_total),ceil($weight_kg_total),1);
      else
        $delivery_total = 0;

      $total = $the_order->total;
      $the_order->sub_total = $total;
      $the_order->delivery_total = $delivery_total;

      $the_order->discount_total = 0;
      
      $the_order->total_price = (int)$total + (int)$delivery_total - $the_order->discount;
      $the_order->parcel = Helpers::getParcel(floor($weight_kg_total),ceil($weight_kg_total),1);

      }
    } else {
      return OrderController::indexAction();
    }

    
    
    
    //$orders->asdf = "asdf";

    //return $parcel;

    //print_r($parcel);

    return $the_order;
  }

  public function invoice($id) {
    $order = Order::find($id);
    $document = $this->document->create($order);
    header("Content-Type: application/pdf");
    return Response::download($document, null);
  }

  

  public static function indexAction()
  {
    $query = Order::with([
      "account",
      "orderItems",
      "orderItems.product",
      "orderItems.product.category"
    ]);

    $account = Input::get("account");
    $android = Input::get("android");

    if ($account)
    {
      $myaccount = Account::where("id",$account);
      $query->where("account_id", $account);
    }
    if($android == "1") {
      $a = array("account"=>$myaccount->get()->toArray(),"orders"=>$query->get()->toArray());
      return $a;
    } else {
      return $query->get();
    }
    
  }

  public function addAction()
  {
    $validator = Validator::make(Input::all(), [
      "account" => "required|exists:account,id",
      "items"   => "required"
    ]);

    if ($validator->passes())
    {
      $order = Order::create([
        "account_id" => Input::get("account")
      ]);

      try
      {
        $items = json_decode(Input::get("items"));
      }
      catch (Exception $e)
      {
        return Response::json([
          "status" => "error",
          "errors" => [
            "items" => [
              "Invalid items format."
            ]
          ]
        ]);
      }

      $total = 0;

      foreach ($items as $item)
      {
        $orderItem = OrderItem::create([
          "order_id"   => $order->id,
          "product_id" => $item->product_id,
          "quantity"   => $item->quantity
        ]);

        $product = $orderItem->product;

        $orderItem->price = $product->price;
        $orderItem->save();

        $product->stock -= $item->quantity;
        $product->save();

        $total += $orderItem->quantity * $orderItem->price;
      }

      // payment gateway algorithm here !

      // $result = $this->gateway->pay(
      //   Input::get("number"),
      //   Input::get("expiry"),
      //   $total,
      //   "thb"
      // );

      // if (!$result)
      // {
      //   return Response::json([
      //     "status" => "error",
      //     "errors" => [
      //       "gateway" => [
      //         "Payment error"
      //       ]
      //     ]
      //   ]);
      // }

      $account = $order->account;

      $document = $this->document->create($order);
      $this->messenger->send($order, $document);

      return Response::json([
        "status" => "ok",
        "state" => "basket",
        "invoice" => $document,
        "order"  => $order->toArray()
      ]);
    } else {
      return Response::json([
      "status" => "error",
      "errors" => $validator->errors()->toArray()
    ]);
    }

    
  }
}