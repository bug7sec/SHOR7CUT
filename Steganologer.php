<?php
/**
* Logika Galau / Shor7cut
* Detect Steganologer
*/
error_reporting(0);
class jalanin
{
	
	public function cuk($patch){
		foreach(scandir($patch) as $d)
        {
        	if($d!='.' && $d!='..'){
        		

        		$d = $patch.DIRECTORY_SEPARATOR.$d;
        		if(!is_dir($d)){  
        			jalanin::cek($d);
        		}else{
        			jalanin::cuk($d);
        		}

        	}
        }
	}

	public function cek($patch){
		$exif = "/exif_read_data/";
        preg_match($exif, file_get_contents(addslashes($patch)), $match);
        if($match[0]){
        	echo "[TEMPAT EKSEKUSI] ".$patch."<br>";
        }else if(exif_read_data($patch)){
        	echo "[INI ADA LOGNYA] ".$patch."<br>";
        }else{
        	echo "[FILE AMAN] ".$patch."<br>";
        }
	}

}

jalanin::cuk(getcwd());

?>
