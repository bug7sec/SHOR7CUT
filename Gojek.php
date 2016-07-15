<?php
error_reporting(0);
/**
* SHOR7CUT | BUG7SEC TEAM
*/
class Gojek
{
      function jsonData($json){
            foreach ($json as $key => $value) {
                  $info .= "ID Customer    : ".$value['customer']['id']."\n";
                  $info .= "Nama Customer  : ".$value['customer']['name']."\n";
                  $info .= "Nomor Customer :  ".$value['customer']['phone']."\n";
                  $info .= "Last Order     : ".$value['timeField']."\n\n";
            }
            return $info;
      }
      function history($idCustomers){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.gojek.co.id/gojek/booking/history/".$idCustomers);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_COOKIEJAR,       "cookies.txt");
            curl_setopt($ch, CURLOPT_COOKIEFILE,      "cookies.txt");
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            $data = json_decode(curl_exec($ch),true);
            curl_close($ch);
            return $data;
      }
      function login($username,$password)
      {
            $ch  = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.gojek.co.id/gojek/customer/login");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_REFERER, $site);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
            curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "userName=".$username."&password=".$password);
            $data = json_decode(curl_exec($ch),true);
            if($data['customerId']){
                  $jData = $this->history($data['customerId']);
                  print_r($this->jsonData($jData));
            }
      }

}

$gojek = new Gojek;
$gojek->login("username","password");

?>
