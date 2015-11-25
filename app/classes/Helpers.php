<?php 

class Helpers {

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
}