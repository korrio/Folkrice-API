<?php

class AccountController
extends BaseController
{
  public function facebookLogin() {
    $params = Input::all();
    $user = Helpers::fbAuth($params['access_token']);
    if($user != null){
      //$authToken = AuthToken::create($user['user_info']);
      //$publicToken = AuthToken::publicToken($authToken);
      return Response::json(array('status' => '1',
                    'message' => 'Success Facebook Auth',
                    //'token' => $publicToken,

                    'state' => $user['state'],
                                    'user' => $user['user_info'],
                                    'fb_graph' => $user['getJson']
                                    ));
    }else{
      return Response::json(array('status' => '0',
                    'message' => 'Wrong access_token',
                    'state' => 'wrong_access_token',
                                    'user' => $user));
    }
  }

  public function createAction() {

    $validator = Validator::make(Input::all(), [
   //   "email" => "required|exists:account,email",
      'password' => 'required|alpha_dash|min:6'
    ]);

    if ($validator->passes())
    {
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
    } else {
      return Response::json([
      "status" => "error",
      "errors" => $validator->errors()->toArray()
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
        "account" => Auth::user()->toArray(),
        "address" => AddressItem::where("account_id",$user->id)->get()->toArray()
      ]);
    }

    return Response::json([
      "status" => "error"
    ]);
  }
}