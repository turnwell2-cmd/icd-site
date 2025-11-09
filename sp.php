<?php
$pdir = "package/";
$serv = $dns_name1 . $_POST['serv'];
$pakc = $_POST['pakc'];
$pakw = $_POST['pakw'];
$vall = $_POST['vall'];
$aserv = $_POST['aserv'];
$trk = $_POST['trk'];
$statusi = $_POST['statusi'];
$status = $_POST['status'];
$date1 = $_POST['date1'];
$time1 = $_POST['time1'];
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$scity = $_POST['scity'];
$scounty = $_POST['scounty'];
$scountry = $_POST['scountry'];
$szip = $_POST['szip'];

$rname = $_POST['rname'];
$raddress = $_POST['raddress'];
$rcity = $_POST['rcity'];
$rcounty = $_POST['rcounty'];
$rcountry = $_POST['rcountry'];
$rzip = $_POST['rzip'];

$email = $_POST['email'];


$html = '<tr> 
    <td height="32" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td colspan="7" rowspan="2" valign="top" background="pictures/tracking4.jpg"><p align="justify">&nbsp;</p>
      <p align="justify"><font color="#000000" size="2" face="Arial, Helvetica, sans-serif">Tracking 
        Number Result: <strong><font color="#666666">Your package is '.$status.'</font></strong></font></p>
      <p><font color="#000000" size="2" face="Arial, Helvetica, sans-serif">The 
        following scan results has been received by our system:</font></p></td>
    <td></td>
  </tr>
  <tr> 
    <td colspan="2" rowspan="2" valign="top"> <p><a href="instant_quote_mrch.php"><img src="pictures/butoane/sndpackage.jpg" width="140" height="109" border="0"></a></p>
      <p>&nbsp;</p></td>
    <td height="105"></td>
  </tr>
  <tr> 
    <td colspan="7" rowspan="3" valign="top"><p><font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#666666">Service:</font></strong> 
        '.$serv.'<br>
        <font color="#666666"><strong>Package Content:</strong></font> '.$pakc.'<br>
        <font color="#666666"><strong>Package weight:</strong></font> '.$pakw.'<br>
        <font color="#666666"><strong>Declared Value:</strong></font> '.$vall.'<br>
        <font color="#666666"><strong>Additional Services:</strong></font> '.$aserv.'<br>
        <font color="#666666"><strong>Tracking Number:</strong></font> '.$trk.'<br>
        <font color="#666666"><strong>Status of Inspection:</strong></font> '.$statusi.'<br>
        <strong>NOTE:</strong> The seller paid for the delivery.</font></p>
      <p align="left"><font size="2" face="Arial, Helvetica, sans-serif">This 
        package was <strong><font color="#666666">sent on</font></strong> '.$date1.' at '.$time1.' from:<br>
        </font></p></td>
    <td height="42"></td>
  </tr>
  <tr> 
    <td height="47" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td></td>
  </tr>
  <tr> 
    <td width="137" height="74" bgcolor="#F4F4F4">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td></td>
  </tr>
  <tr> 
    <td height="212" bgcolor="#F4F4F4">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top" bgcolor="#F4F4F4"><p>&nbsp;</p>
      <p align="center"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif"><strong>Name 
        and address of sender:</strong></font></p>
      <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#666666">Name:</font></strong> '.$sname.'<br>
        <font color="#666666"><strong>Address:</strong></font> '.$saddress.'<br>
        <font color="#666666"><strong>City:</strong></font> '.$scity.'<br>
        <font color="#666666"><strong>County:</strong></font> '.$scounty.'<br>
        <font color="#666666"><strong>Country:</strong></font> '.$scountry.'<br>
        <font color="#666666"><strong>Zip Number:</strong></font> '.$szip.'</font></p></td>
    <td colspan="5" valign="top" bordercolor="#CCCCCC" bgcolor="#F4F4F4"><p>&nbsp;</p>
      <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><font color="#333333"><strong>Name 
        and address of receiver:</strong></font></font></p>
      <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#666666">Name:</font></strong> '.$rname.'<br>
        <font color="#666666"><strong>Address:</strong></font> '.$raddress.'<br>
        <font color="#666666"><strong>City:</strong></font> '.$rcity.'<br>
        <font color="#666666"><strong>County:</strong></font> '.$rcounty.'<br>
        <font color="#666666"><strong>Country:</strong></font> '.$rcountry.'<br>
        <font color="#666666"><strong>Zip Number:</strong></font> '.$rzip.'</font></p></td>
    <td></td>
  </tr>';
  
 $fp = fopen( $pdir . $trk .'.htmx', 'w');
 fputs ($fp, $html);
 fclose($fp); 
  
  $fp = fopen('pack.html', 'a');
 fputs ($fp, "</strong><br>".$email." - ".$rname." - <strong>".$trk);
 fclose($fp);

echo "Package sent. ".$trk . "<br>".$email;
echo "<br><br><br><br>". $html;

$Subject  = $_POST['rname'] . " - " . $_POST["trk"];
$MailTo   = $email ;
$Headers  = "MIME-Version: 1.0\r\n";
$Headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
mail($MailTo, $Subject, $Message, $Headers); 

  ?>