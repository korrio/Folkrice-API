<?php 

class Helpers {

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
}