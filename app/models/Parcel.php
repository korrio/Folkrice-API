<?php

class Parcel
extends Eloquent
{
  protected $table = "parcel";

  protected $guarded = ["id"];

  protected $softDelete = true;

}