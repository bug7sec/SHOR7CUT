<?php
/**
* Logika Galau / Shor7cut
* Mass Delete Facebook Status
*/
error_reporting(0);
set_time_limit(0);

$token = "EAAAACZAVC6ygBAOYi9qZA6L0ZAa9FNeDu7nw7OSjucjs9nP0qEP4q1HvEksY913EADZCyUbpEQ9Smx90OUGmqLEoxUwiuhMsn0oj2khiASDOLhFt1clNq4ZBgVFSNBxauShbYkmE8F74ZAMiIXjHsotLW7dcyTixcZD";
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
		if(preg_match("true", $get)){
			echo "ID : ".$value." -> Telah dihapus";
		}else{
			echo "ID : ".$value." -> Gagal dihapus";
		}
	}
}

delete(post($token),$token);
?>
