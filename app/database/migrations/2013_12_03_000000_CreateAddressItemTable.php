<?php

use Illuminate\Database\Migrations\Migration;

class CreateAddressItemTable
extends Migration
{
  public function up()
  {
    Schema::create("address_item", function($table)
    {
      $table->engine = "InnoDB";
      
      $table->increments("id");
      $table->integer("order_id");
      $table->integer("account_id");
      $table->string("first_name");
      $table->string("last_name");
      $table->string("address_name");
      $table->string("address_no");
      $table->string("moo");
      $table->string("soi");
      $table->string("road");
      $table->integer("province");
      $table->integer("district");
      $table->integer("sub_district");
      $table->integer("is_default");

      $table->dateTime("created_at");
      $table->dateTime("updated_at");
      $table->dateTime("deleted_at");
    });
  }

  public function down()
  {
    Schema::dropIfExists("address_item");
  }
}