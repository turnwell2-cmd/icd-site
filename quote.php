<?php include ("netlib.php"); ?><?php
$Message = "";

while (list ($key, $val) = each ($_POST)) {
    if ($key != "Submit")
	$Message .= "$key: <strong>$val</strong><br>";
	if ($key == "fromto") $from = $val;
} 
 
$Subject  = "From: $from";
$mail = file_get_contents ('email.txt');
$MailTo   = $mail ;
$Headers  = "MIME-Version: 1.0\r\n";
$Headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
mail($MailTo, $Subject, $Message, $Headers); 

if ($from == "instant_quote.php") $from2 = "instant_quote2.php";
if ($from == "instant_quote_mrch.php") $from2 = "instant_quote2.php";

 header ("Location: $from2");
  
?>