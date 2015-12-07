<?php

class Address
extends Eloquent
{
  protected $table = "address";

  protected $guarded = ["id"];

  protected $softDelete = true;

  public function account()
  {
    return $this->belongsTo("Account");
  }

  public function addressItems()
  {
    return $this->hasMany("AddressItem");
  }

  public function orders()
  {
    return $this->belongsToMany("Order", "id");
  }

}