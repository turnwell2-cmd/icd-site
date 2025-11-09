<?php

$pdir = "package/";

$trk  = $_POST['trk'];

if (!file_exists("package/" . $trk . ".htmx")) header ("Location: nopackage.php");



?>

<!DOCTYPE.phpL PUBLIC "-//W3C//DTD.phpL 4.01 Transitional//EN">



<head>

<title>We ship anything anywhere. Get it there! </title>

<meta http-equiv="Content-Type" content="text.phpl; charset=iso-8859-1">

<script language="JavaScript" type="text/JavaScript">

<!--

function MM_reloadPage(init) {  //reloads the window if Nav4 resized

  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {

    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}

  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();

}

MM_reloadPage(true);



function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}



function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}

//-->

</script>

</head>



<body onLoad="MM_preloadImages('pictures/butoane/provide2.jpg');">

<table width="994" border="0" cellpadding="0" cellspacing="0">

  <!--DWLayoutTable-->

  <tr> 

    <td height="87" colspan="3" valign="top"><img src="pictures/logo.jpg" width="321" height="87"></td>

    <td colspan="6" valign="top"><img src="pictures/l2.jpg" width="672" height="87"></td>

    <td width="1"></td>

  </tr>

  <tr> 

    <td height="27" colspan="3" valign="top"><a href="index.php"><img src="pictures/butoane/company.jpg" alt="shipping_company" width="89" height="27" border="0"></a><a href="why_us.php"><img src="pictures/butoane/whyus.jpg" alt="shipping_company" width="85" height="27" border="0"></a><a href="faq.php"><img src="pictures/butoane/faq.jpg" alt="shipping_company" width="68" height="27" border="0"></a><a href="contact.php"><img src="pictures/butoane/contact.jpg" alt="contact_us" width="79" height="27" border="0"></a></td>

    <td colspan="2" rowspan="4" valign="top"><img src="pictures/l3.jpg" width="347" height="94"></td>

    <td colspan="4" valign="top"><a href="thrd_how_it_works.php"><img src="pictures/butoane/howworks.jpg" alt="third_party_agency" width="116" height="27" border="0"></a><a href="thrd_why_use_it.php"><img src="pictures/butoane/whyuseit.jpg" alt="third_party_agency" width="87" height="27" border="0"></a><a href="thrd_fees.php"><img src="pictures/butoane/fees.jpg" alt="third_party_agency" width="51" height="27" border="0"></a><a href="thrd_agency.php"><img src="pictures/butoane/agency.jpg" alt="third_party_agency" width="66" height="27" border="0"></a></td>

    <td></td>

  </tr>

  <tr> 

    <td colspan="3" rowspan="3" valign="top"><img src="pictures/tracking.jpg" width="248" height="50"></td>

    <td width="169" height="17"></td>

    <td width="45"></td>

    <td width="102"></td>

    <td width="10"></td>

    <td></td>

  </tr>

  <tr> 

    <td height="19"></td>

    <td colspan="2" valign="top"><a href="index.php"><img src="pictures/butoane/home.jpg" width="69" height="19" border="0"></a><a href="tracking.php"><img src="pictures/butoane/track.jpg" width="77" height="19" border="0"></a></td>

    <td>&nbsp;</td>

    <td></td>

  </tr>

  <tr> 

    <td height="31"></td>

    <td>&nbsp;</td>

    <td></td>

    <td></td>

    <td></td>

  </tr>

 <?php 

echo file_get_contents ($pdir.$trk.".htmx");

  ?>

  <tr> 

    <td height="19" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>

    <td></td>

  </tr>

  <tr> 

    <td width="137" height="19">&nbsp;</td>

    <td width="21">&nbsp;</td>

    <td></td>

  </tr>

  <tr>

    <td height="212" bgcolor="#F4F4F4">&nbsp;</td>

    <td>&nbsp;</td>

    <td colspan="7" rowspan="2" valign="top">
            <p><font size="2" face="Arial, Helvetica, sans-serif">You 

        will be notified with an email 2 days before of the arrival of the package.</font></p>


      <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FF0000">IMPORTANT 

        NOTICE</font>:</strong> If your package status is <font color="#666666"><strong>&quot;stand 

        by&quot;</strong></font>, <font color="#666666"><strong>&quot;in custody&quot;</strong></font> or &quot;<strong><font color="#666666">package 

        is on moving&quot;</font></strong> and you are involved into a third party 

        transaction initiated through our company, you are obliged to provide us 

        with the <strong><font color="#333333">Payment Information </font></strong><font color="#000000">as stated in our Terms and Conditions, in 

        order for you to be able to receive the package.</font></font></p>


      <p align="justify"><a href="payment.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('payment','','pictures/butoane/provide2.jpg',1)"><img src="pictures/butoane/provide1.jpg" alt="payment information" name="payment" width="238" height="23" border="0"></a> 

      </p>


      <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">This 

        package was processed on a </font><font size="2" face="Arial,Helvetica" color="#666666"><strong>International Cargo Spedition</strong></font><font size="2" face="Arial, Helvetica, sans-serif"> 

        OnLine compatible shipping system. To learn more about the benefits of 

        shipping with </font><font size="2" face="Arial,Helvetica" color="#666666"><strong>International Cargo Spedition</strong></font><font size="2" face="Arial, Helvetica, sans-serif">, please see &quot;Why Us&quot; section. </font></p>


      <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">This 

        communication contains proprietary business information and may contain 

        confidential information. If the reader of this message is not the intended 

        recipient, or the employee or agent responsible to deliver it to the intended 

        recipient, you are hereby notified that any dissemination, distribution 

        or copying of this communication is strictly prohibited. If you have received 

        this communication in error, please immediately destroy, discard, or erase 

        this communication.</font></p>
</td>


    <td></td>

  </tr>

  <tr> 

    <td rowspan="4" valign="top"><img src="pictures/blueman3.jpg" width="137" height="295"></td>

    <td rowspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>

    <td height="51"></td>

  </tr>

  <tr>

    <td height="130" colspan="5" valign="top">
            <p><font size="2" face="Arial, Helvetica, sans-serif"><br>

        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="23">


          <param name="BGCOLOR" value="">

          <param name="BASE" value=".">

          <param name="movie" value="button2.swf">

          <param name="quality" value="high">



          <embed src="button2.swf" width="100" height="23" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" BASE="." BGCOLOR></embed></object>

        </font></p>


      <p><font size="2" face="Arial,Helvetica" color="#666666"><strong>International Cargo Spedition </strong></font><font color="#000000" size="2" face="Arial, Helvetica, sans-serif">authorises you to use tracking systems solely to track shipments. Any 

        other use of tracking systems and information is strictly prohibited.</font> 

      </p>


      <p><font size="2" face="Arial, Helvetica, sans-serif"> </font></p>
</td>


    <td colspan="2" rowspan="4" valign="top"><img src="pictures/halfcircle.jpg" width="111" height="258"></td>

    <td></td>

  </tr>

  <tr> 

    <td height="49" colspan="6" valign="top" background="pictures/grey3.jpg"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="745" height="49">

        <param name="movie" value="swf/shipping_company.swf">

        <param name="quality" value="high">

        <embed src="swf/shipping_company.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="745" height="49"></embed></object></td>

    <td></td>

  </tr>

  <tr> 

    <td height="65" colspan="6" valign="top"><img src="pictures/txt3.jpg" width="745" height="65"></td>

    <td></td>

  </tr>

  <tr> 

    <td height="14" colspan="7" valign="top"><img src="pictures/foots.jpg" width="137" height="14"><img src="pictures/copyright2.jpg" width="745" height="14" border="0" usemap="#Map"></td>

    <td></td>

  </tr>

  <tr> 

    <td height="1"></td>

    <td></td>

    <td width="164"></td>

    <td width="250"></td>

    <td width="97"></td>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

  </tr>

</table>

<div align="center"></div>

<map name="Map">

  <area shape="rect" coords="437,1,493,14" href="thrd_privacy_policy.php">

</map>

</body>