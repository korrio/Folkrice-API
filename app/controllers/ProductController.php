<?php

class ProductController
extends BaseController
{
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

    foreach($products as $product) {
      //$the_product = $product;
      //$product->images = array(array("thumb"=>"http://www.folkrice.com/api/img/product1.jpg","full"=>"http://www.folkrice.com/api/img/product1.jpg"));
    }


      return $query->get();
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