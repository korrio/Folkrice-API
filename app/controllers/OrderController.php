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
    
    //$the_order = Order::find($order_id);
    
    $s = array();

    $b = $inputs;

    //print_r($s);

    // $s["order_id"] = $order_id;
    // $s["account_id"] = $the_order->account_id;
    $s["id"] = 1;
    $s["first_name"] = $b["customer"]["first_name"];
    $s["last_name"] = $b["customer"]["last_name"];
    $s["email"] = $b["customer"]["email"];
    $s["phone"] = $b["customer"]["phone"];
    $s["address_name"] = $b["ship_to"]["first_name"] . " " . $b["ship_to"]["last_name"] . " (note) " . $b["ship_to"]["note"];
    $s["address_no"] = $b["ship_to"]["address_1"];
    $s["moo"] = "";
    $s["soi"] = "";
    $s["road"] = "";
    $s["province"] = $b["ship_to"]["province"];
    $s["district"] = $b["ship_to"]["district"];
    $s["sub_district"] = $b["ship_to"]["sub_district"];
    $s["post_code"] = $b["ship_to"]["postcode"];
    $s["is_default"] = true;


    //$the_order["state"] = "checkout";
    //$the_order["shipping"] = $s;

    // $validator = Validator::make($s, [
    //    'post_code' => 'required|min:5',
    //   'province' => 'required',
    //   'district' => 'required',
    //   'sub_district' => 'required'
    // ]);
     if(true) {
    // if($validator->passes()) {
      $addressItem = AddressItem::create($s);
      //$addressItem = DB::table('address_item')->insert($s);
    //save address to address list return -> address id
      // $address = Address::create([
      //   //"account_id" => Input::get("account")
      //   "account_id" => $the_order->account_id
      // ]);

      if($addressItem != null) {
        $order = Order::find($order_id);
        if($order != null) {
          $order->state = 'checkout';
          $order->payment_method = $b["payment"]["method"];
          $order->save();

          $the_order = OrderController::showInternal($order_id)->first();
          $the_order["shipping"] = $addressItem->toArray();
          
          return Response::json($the_order);
        } 
      }

      

      
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

  public static function showInternal($order_id)
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
        return $query->get();

      } else {
        if($account)
          return $query->where("account_id", $account);
        else
          return $query->get();
      }
    }
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
      

        $order = $orders->first();

         $sub_total = 0;

      $weight_total = 0;

      $delivery_total = 0;

        foreach($order->order_items as $item) {

         

          $item->picture = Helpers::getProductById($item->product_id);
          $sub_total += $item->quantity * $item->price;
          $product = Product::where("id",$item->product_id)->first();

          if($product)
            $weight_total += $product->weight;

        }

      if($order) {
        $order->weight_total = $weight_total;
      
        $weight_kg_total = $weight_total/1000;
        $order->weight_kg_total = $weight_kg_total;

        if($weight_kg_total > 0)
          $delivery_total = Helpers::getParcelCost(floor($weight_kg_total),ceil($weight_kg_total),1);
        else
          $delivery_total = 0;

        $total = $order->total;
        $order->sub_total = $total;
        $order->delivery_total = $delivery_total;

        $order->discount_total = 0;
        
        $order->total_price = (int)$total + (int)$delivery_total - $order->discount;
        $order->parcel = Helpers::getParcel(floor($weight_kg_total),ceil($weight_kg_total),1);

      return Response::json($order->toArray());
      }
    } else {
      return OrderController::indexAction();
    }

    
    
    
    //$orders->asdf = "asdf";

    //return $parcel;

    //print_r($parcel);

    return $orders;
  }

  public function submit($order_id)
  {
    $inputs = Input::get();
    $the_order = OrderController::showInternal($order_id);

    $inputs["name"];
    $inputs["account_id"];
    $inputs["method"];
    $inputs["amount"];
    $inputs["time"];
    $inputs["image"];

    // $the_order->state = "processing";
    // $the_order->save();

    $a = array("order_id"=>(int)$order_id,"message"=>"ได้รับการโอนเงินแล้ว กรุณาตรวจสอบอีเมลล์ของท่าน");
    return Response::json($a); 
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
      $myaccount = Account::where("id",$account)->get();
      //$myaccount->address = $s;
      $query->where("account_id", $account);
    }

    if($android == "1") {
      $orderObj = $query->get();
      $orderObj->each(function ($item) {
        $s = array();
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
        $item->address = $s;
      }); 
      $a = array("orders"=>$orderObj->toArray());
      return $a;
    } else {
      return $query->get();
      // foreach ($orders as $order) {
      //     //echo $order->id . " ";
      //     if($order->id >= 1) {
      //       $order = OrderController::show($order->id);
      //       $the_orders[] = $order;
      //     }
          
      // }
      // return Response::json(array("orders"=>$the_orders));
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
      $weight_total = 0;


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

        if($product)
            $weight_total += $product->weight;
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

      //$the_order = $order;

      $the_order = OrderController::showInternal($order->id);

      if($order) {
          $weight_kg_total = $weight_total / 1000;
          $delivery_total = Helpers::getParcelCost(floor($weight_kg_total),ceil($weight_kg_total),1);
          $order->sub_total = $total;
          $order->delivery_total = $delivery_total;
          $order->total_price = $total + $delivery_total;
          $order->save();
      }

      $order->order_items->each(function ($item) {
          $item->product->picture = Helpers::getProductById($item->product_id);
        }); 

      

      // "weight_total": 3400,
      // "weight_kg_total": 3.4,
      // "sub_total": 500,
      // "delivery_total": 80,
      // "discount_total": 0,
      // "total_price": 580,

      // $order->weight_total = $the_order->weight_total;
      // $order->weight_kg_total = $the_order->weight_kg_total;
      // $order->sub_total = $the_order->sub_total;
      // $order->delivery_total = $the_order->delivery_total;
      // $order->discount_total = $the_order->discount_total;
      // $rder->total_price = $the_order->total_price;


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