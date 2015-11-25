<?php

class AccountController
extends BaseController
{
  public function createAction() {
    $email = Input::get("email");
    $password = Hash::make(Input::get("password"));

    $accountCreated = Account::where("email",$email)->first(); 

    if(!$accountCreated) {
      $account = Account::create([
        "email"    => $email,
        "password" => $password
      ]);

      return Response::json([
        "status"  => "ok",
        "token" => $password,
        "account" => $account->toArray()
      ]);

    } else {
      return Response::json([
        "status" => "error",
        "message" => "Email is already registered"
      ]);
    }
    
  }

  public function authenticateAction()
  {

    $token = Hash::make(Input::get("password"));

    $credentials = [
      "email"    => Input::get("email"),
      "password" => Input::get("password")
    ];

    if (Auth::attempt($credentials))
    {
      $user = Auth::user();
      $user->token = $token;
      $user->save();

      return Response::json([
        "status"  => "ok",
        "account" => Auth::user()->toArray()
      ]);
    }

    return Response::json([
      "status" => "error"
    ]);
  }
}