<?php

class IndexController 
extends BaseController 
{
  public function indexAction()
  {
    return View::make("index");
  }

  public function invoiceHtml($id)
  {
  	$order = Order::find($id);
    return View::make("email/invoice", [
      "order" => $order
    ]);
  }

  public function paypalAction()  {
  	$adapter = Gateway::driver('Paypal');

$adapter->setSandboxMode(true);

$adapter->setMerchantAccount('idolkorrio@gmail.com');

$adapter->setInvoice(00001);

$result = $adapter->getFrontendResult();

var_dump($result);
  }
}