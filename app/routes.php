<?php

App::bind("Formativ\Billing\GatewayInterface", "Formativ\Billing\StripeGateway");
App::bind("Formativ\Billing\DocumentInterface", "Formativ\Billing\PDFDocument");
App::bind("Formativ\Billing\MessengerInterface", "Formativ\Billing\EmailMessenger");

Route::get("/paypal",[
  "as" => "paypal",
  "uses" => "IndexController@paypalAction"
]);

Route::any("/", [
  "as"   => "index/index",
  "uses" => "IndexController@indexAction"
]);

Route::get('order/{id}/invoice/index', 'IndexController@invoiceHtml');

Route::any("category/index", [
  "as"   => "category/index",
  "uses" => "CategoryController@indexAction"
]);

Route::get('product/{id}/nf', 'ProductController@nutritionFact');


Route::get('product/{id}', 'ProductController@show');
Route::get('product', 'ProductController@indexAction');

Route::any("product/index", [
  "as"   => "product/index",
  "uses" => "ProductController@indexAction"
]);

Route::any("account/authenticate", [
  "as"   => "account/authenticate",
  "uses" => "AccountController@authenticateAction"
]);

Route::any("account/create", [
  "as"   => "account/create",
  "uses" => "AccountController@createAction"
]);

Route::post('order/{id}/checkout', 'OrderController@checkout');
Route::get('order/{id}/invoice', 'OrderController@invoice');


Route::get('order/{id}', 'OrderController@show');

Route::get('order', 'OrderController@indexAction');

Route::any("order/index", [
  "as"   => "order/index",
  "uses" => "OrderController@indexAction"
]);

Route::any("order/add", [
  "as"   => "order/add",
  "uses" => "OrderController@addAction"
]);

Route::any("order/delete", [
  "as"   => "order/delete",
  "uses" => "OrderController@deleteAction"
]);