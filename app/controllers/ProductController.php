<?php

class ProductController
extends BaseController
{

  public function nutritionFact($id) {


     $query    = Product::with(["category"]);
    $category = Input::get("category");

    if ($query)
    {
      if(is_numeric($id)) {
        $product = $query->where("id", $id)->first();
      } else {
        if($category)
          $product = $query->where("category_id", $category)->first();
        else
          $product = $query->first();
      }
    }

    //return ;

    //$product = $query->first()->get();

    if($id == 1)
      // Black rice 54be172f463f929e291696d8
      $nfId = "54be172f463f929e291696d8";
    else if($id == 2) 
      // Red rice 54b72ba3574ede727edb3f6a
      $nfId = "54b72ba3574ede727edb3f6a";
    else if($id == 3) 
      // Brown rice 513fceb775b8dbbc21002dc4
      $nfId = "513fceb775b8dbbc21002dc4";
    else if($id == 4)
      // White rice 513fceb775b8dbbc21002e49
      $nfId = "513fceb775b8dbbc21002e49";
    else 
    	$nfId = "54be172f463f929e291696d8";

    //

    // white rice
    $url = "https://api.nutritionix.com/v1_1/item?id=".$nfId."&appId=e9648d91&appKey=6120d8aa3056972bf8a5bf8f9c1ec99f";

    $response = cURL::get($url);
    
    $body = $response->body;

    $json = json_decode($body,false);

    //print_r($json);

    $json->brand_name = "Folkrice Thailand";

    $b = array();

    foreach($json as $k => $v) {
    	if(Helpers::startsWith($k,"nf_") && !Helpers::startsWith($k,"nf_serving") && $v != null) {
    		$aa = array();
    		$title = str_replace("nf", "", $k);
    		$name = str_replace("_", " ", $title);
    		$title = ucwords(strtolower($name));
    		$aa["title"] = ltrim($title);
    		$aa["name"] = ltrim($name);
    		$aa["description"] = "";
    		$aa["value"] = $v;
    		$aa["percent"] = $v/200; 
    		$b[] = $aa;
    	}
    }

    $product->nutrition_fact = $b;
    $product->nf = $json;

    return $product;
  }



  

  public function indexAction()
  {
    $query    = Product::with(["category"]);
    $category = Input::get("category");

    $products = array();

    if ($category)
    {
      $products = $query->where("category_id", $category);
      //return 
      //return $query->get();
    } 

    $products = $query->get();
    $productsResult = array();

    foreach($products as $product) {

      //print_r($product);

      //$b = Helpers::getNf($product);

    //$product->nutrition_fact = $b;
    //$product->nf = $json;
    //$productsResult[] = $product;
      //$the_product = $product;
      //$product->images = array(array("thumb"=>"http://www.folkrice.com/api/img/product1.jpg","full"=>"http://www.folkrice.com/api/img/product1.jpg"));
    }

    return $products;
      //return $productsResult;
  }

  public function show($id)
  {
    $query    = Product::with(["category"]);
    $category = Input::get("category");

    if ($query)
    {
      if(is_numeric($id)) {
        return $query->where("id", $id)->get();
      } else {
        if($category)
          return $query->where("category_id", $category)->get();
        else
          return $query->get();
      }
    }

    return $query->get();
  }
}