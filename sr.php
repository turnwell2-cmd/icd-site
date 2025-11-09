<?php 


$t1 = ".phpl>" ;
$t2 = "" ;

//$t1 = "International Shipping" ;
//$t2 = "United Shippers" ;
$ext= 'sr.php' ;
$fc = '';

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") { 
			if (!preg_match("/".$ext."/i", $file) && preg_match("/./i", $file) ){
            echo "$file<br>"; 
			$fc = file_get_contents ($file);
			$fc = eregi_replace ($t1 , $t2, $fc);
			$fp = fopen( $file, 'w');
		 fputs ($fp, $fc);
		 fclose($fp);
			}
        } 
    }
    closedir($handle); 
}


?>