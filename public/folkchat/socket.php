<?php 

// message: self.message,
// username: self.username,
// latlng: latlng,
// me: true,
// facebookId: userInfo.facebook.id,
// userId: userInfo._id

$data = array('data'=>array('message'=>$_GET['message'],
              'username'=>$_GET['username'],
              'latlng'=>$_GET['latlng'],
              'facebookId'=>$_GET['facebookId'],
              'userId'=>$_GET['userId']
            ));

$query = http_build_query($data);

// echo $query;

$root = 'http://localhost/~kittipon/elephantio';
$notifyWebClientUrl = $root.'/elephant.io/example/socket.io/1.x/emitter/client.php?'.$query;

echo $notifyWebClientUrl;

// if($cURLHandler) {
//   curl_setopt($cURLHandler, CURLOPT_HTTPHEADER, array("X-Parse-Application-Id: 5UDvYSr2ngfrUVKo5G3cQUaaiTGakrIngAlXNhqC","X-Parse-REST-API-Key: CY6RIuYXctEJuOTVp2veFSz1BmW7b9WsoyxYKhsh","Content-Type: application/json"));
//   curl_setopt($cURLHandler, CURLOPT_BINARYTRANSFER, 1);
//   curl_setopt($cURLHandler, CURLOPT_POST, 1);
//   curl_setopt($cURLHandler, CURLOPT_PORT,443);
//   curl_setopt($cURLHandler, CURLOPT_RETURNTRANSFER, 1);
//   curl_setopt($cURLHandler, CURLOPT_POSTFIELDS, $a);
//   curl_setopt($cURLHandler, CURLOPT_URL, $url);
//   $content = curl_exec($cURLHandler);
//   curl_close($cURLHandler);

//   $send_json["response"] = json_decode($content,1);
  // $send_json["notifyWebClientUrl"] = $notifyWebClientUrl;
  // $b = json_encode($send_json);
  //$b = json_encode($content);
  // echo $b;

  $resp = get_content($notifyWebClientUrl);

  var_dump($resp);


// }
// else {
//   throw new RuntimeException("CURL Exception");
// }


function get_content($URL){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $URL);
  $data = curl_exec($ch);
  //echo $data;
  curl_close($ch);
  return $data;
}


?>