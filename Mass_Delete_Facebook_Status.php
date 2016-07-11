<?php
/**
* Logika Galau / Shor7cut
* Mass Delete Facebook Status
*/
error_reporting(0);
set_time_limit(0);

$token = "xxxx token";
function post($token){
	$data = json_decode(file_get_contents("https://graph.facebook.com/v2.3/me?fields=posts&access_token=$token"),true);
	foreach ($data['posts']['data'] as $key => $value) {
		$id[] =  $value['id'];
	}
	return $id;
}
function delete($data,$token){
	foreach ($data as $key => $value) {
		$get =  file_get_contents("https://graph.facebook.com/v2.3/".$value."?access_token=".$token."?&method=delete");
		echo "ID : ".$value." -> ".$get."\r\n";
	}
}

delete(post($token),$token);
?>
