<?php 

class Helpers {

  public static function getProductById($id) {
        $b[0] = array(
         
            "image"=>"http://api.folkrice.com/img/black_700.png",
            "thumb"=>"http://api.folkrice.com/img/black_700_thumb.png"
        );

    $b[1] = array(
        
            "image"=>"http://api.folkrice.com/img/red_700.png",
            "thumb"=>"http://api.folkrice.com/img/red_700_thumb.png"
        );

    $b[2] = array(
         
            "image"=>"http://api.folkrice.com/img/brown_700.png",
            "thumb"=>"http://api.folkrice.com/img/brown_700_thumb.png"
        );

    $b[3] = array(
           
            "image"=>"http://api.folkrice.com/img/white_700.png",
            "thumb"=>"http://api.folkrice.com/img/white_700_thumb.png"
        );

 $b[4] = array(
         
            "image"=>"http://api.folkrice.com/img/black_2000.png",
            "thumb"=>"http://api.folkrice.com/img/black_2000_thumb.png"
        );

    $b[5] = array(
        
            "image"=>"http://api.folkrice.com/img/red_2000.png",
            "thumb"=>"http://api.folkrice.com/img/red_2000_thumb.png"
        );

    $b[6] = array(
         
            "image"=>"http://api.folkrice.com/img/brown_2000.png",
            "thumb"=>"http://api.folkrice.com/img/brown_2000_thumb.png"
        );

    $b[7] = array(
           
            "image"=>"http://api.folkrice.com/img/white_2000.png",
            "thumb"=>"http://api.folkrice.com/img/white_2000_thumb.png"
        );
    if($id >= 1) {
        $id = (int)$id - 1;
        if($id < sizeof($b))
            return $b[(int)$id];
        else
            return null;
    }
        
    }

	public static function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
	}
	public static function endsWith($haystack, $needle) {
	    // search forward starting from end minus needle length characters
	    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
	}

	public static function dbConnect() {
		// MySQL Hostname / Server (for eg: 'localhost')
			$sql_host = 'localhost';
			$sql_port = '3306';

			// MySQL Database Name
			$sql_name = 'core';


			// MySQL Database User
			$sql_user = 'root';


			// MySQL Database Password
			$sql_pass = 'root';

			$dbConnect = mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_name,$sql_port);
			mysqli_set_charset($dbConnect,"utf8");
			return $dbConnect;
	}

	public static function getParcel($min,$max,$type) {
		return array("type"=>1,"name"=>"Thailand Post","name_th"=>"ไปรษณีย์ไทย");
    //return Parcel::where("min_kg",">",$min)->where("min_kg","<=",$max)->where("type",$type)->get();
  }

  public static function getParcelCost($min,$max,$type) {
  	$parcel = Parcel::where("min_kg",">",$min)->where("min_kg","<=",$max)->where("type",$type)->first();
    if($parcel)
    	return $parcel->price;
    else
    	return 500;
  }

  public static function getNf($product) {
    if($product->id == 1)
      // Black rice 54be172f463f929e291696d8
      $nfId = "54be172f463f929e291696d8";
    else if($product->id == 2) 
      // Red rice 54b72ba3574ede727edb3f6a
      $nfId = "54b72ba3574ede727edb3f6a";
    else if($product->id == 3) 
      // Brown rice 513fceb775b8dbbc21002dc4
      $nfId = "513fceb775b8dbbc21002dc4";
    else if($product->id == 4)
      // White rice 513fceb775b8dbbc21002e49
      $nfId = "513fceb775b8dbbc21002e49";
    else 
      $nfId = "54be172f463f929e291696d8";

    //

    $b = array();


    // white rice
    $url = "https://api.nutritionix.com/v1_1/item?id=".$nfId."&appId=e9648d91&appKey=6120d8aa3056972bf8a5bf8f9c1ec99f";

    $b["url"] = $url;

    $response = cURL::get($url);
    
    $body = $response->body;

    $json = json_decode($body,false);

    //print_r($json);

    $json->brand_name = "Folkrice Thailand";

    
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
    return $b;
  }

  public static function fbAuth($access_token) {

    $dbConnect = Helpers::dbConnect();
    
    // Check connection
    if (mysqli_connect_errno($dbConnect)) {
        exit(mysqli_connect_error());
    }

    
    $client_id = "812207955571269";
    $client_secret = "7b024358ac126926363f83e05dc31c83";

    $redirect_uri = "http://www.folkrice.com/import.php?type=facebook";

    //echo "0";

    if (!empty($access_token)) {
        //echo "1";
                $getApiUrl = "https://graph.facebook.com/me?access_token={$access_token}&fields=email,gender,name,cover,picture.width(720).height(720)";
                $getApi = @file_get_contents($getApiUrl);
                $getJson = @json_decode($getApi, true);
                
                if (!empty($getJson['name']) && !empty($getJson['id'])) {
                  //echo "2";
                    $getJson['name'] = $getJson['name'];
                    $getJson['id'] = $getJson['id'];
                    $getJson['username'] = 'fb_' . $getJson['id'];
                    
                    if (!empty($getJson['email'])) {
                        $getJson['email'] = $getJson['email'];
                    } else {
                        $getJson['email'] = $getJson['username'] . '@facebook.com';
                    }
                    
                    if (!empty($getJson['gender'])) {
                        $getJson['gender'] = $getJson['gender'];
                    } else {
                        $getJson['gender'] = 'male';
                    }
                    
                    $getJson['password'] = md5($getJson['email']);
                    
                    $query_one = "SELECT * FROM account WHERE (email='" . $getJson['email'] . "')";
                    $sql_query_one = mysqli_query($dbConnect, $query_one);
                    
                    if (($sql_numrows_one = mysqli_num_rows($sql_query_one)) == 1) {
                      //echo "3";
                        $sql_fetch_one = mysqli_fetch_assoc($sql_query_one);
                        
                        //$res['user_id'] = $sql_fetch_one['id'];
                        //$res['user_pass'] = $sql_fetch_one['password'];

                                    $user = Account::find((int)$sql_fetch_one['id']);
       

                        $res["state"] = "login";
                        $res["user_info"] = $user->toArray();
                        $res["getJson"] = $getJson;
                        return $res;
                        
                        //return $user;

                        //setcookie('sk_u_i', $_SESSION['user_id'], time() + (60 * 60 * 24 * 7));
                        //setcookie('sk_u_p', $_SESSION['user_pass'], time() + (60 * 60 * 24 * 7));
                    } else {

                        $account = Account::create([
                          "email"    => $getJson['email'],
                          "password" => Hash::make(Input::get("password")),
                          "fb_id" => (int)$getJson['id'],
                          "fb_token" => $access_token
                        ]);
                    

                         $user = $account;
       

                        $res["state"] = "register";
                        $res["user_info"] = $user->toArray();
                        $res["getJson"] = $getJson;
                        return $res;

                        
                        //register
                    }
                }
            }
            
  }
}