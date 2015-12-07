<?php

class AddressItem
extends Eloquent
{
  protected $table = "address_item";

  protected $guarded = ["id"];

  protected $softDelete = true;

  public function address()
  {
    return $this->belongsTo("Address");
  }

  public function order()
  {
    return $this->belongsTo("Order");
  }

}