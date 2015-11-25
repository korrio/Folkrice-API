<?php

class AccountTableSeeder
extends DatabaseSeeder
{
  public function run()
  {
    //$faker = $this->getFaker();
	$email = "idolkorrio@gmail.com";
	$password = Hash::make("monsters");

      Account::create([
        "email"    => $email,
        "password" => $password
      ]);
  }
}
