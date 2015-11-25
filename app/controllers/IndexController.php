<?php

class IndexController
extends BaseController
{
  public function indexAction()
  {
    return View::make("index");
  }

  public function payAction() {
  	$adapter = Gateway::driver('Paypal')->initialize(array(
    'sandboxMode'     => true,
    'successUrl'      => 'http://www.domain/foreground/success',
    'cancelUrl'       => 'http://www.domain/foreground/cancel',
    'backendUrl'      => 'http://www.domain/background/invoice/00001',
    'merchantAccount' => 'idolkorrio@gmail.com',
    'language'        => 'TH',
    'currency'        => 'THB',
    'invoice'         => uniqid(),
    'purpose'         => 'Buy a beer.',
    'amount'          => 100,
    'remark'          => 'Short note'
));

$generated = $adapter->render();

var_dump($generated);
  }
}