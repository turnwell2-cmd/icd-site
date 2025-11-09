<?
include ("inc/db_mysql.inc");
include ("inc/fns.php");

$title="";
$sitepath="";
include ("inc/userheader.php");

$db=new DB_Sql();

user_access();

$usersinfo=$db->query("select * from ".prefix."users where id='$userID'");
$db->next_record();
?>


<p><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="689" height="49">
<param name="movie" value="third01.swf">
<param name="play" value="true">
<param name="loop" value="true">
<param name="quality" value="high">
<param name="WMode" value="Window">
<embed width="689" height="49" src="third01.swf" play="true" loop="true" quality="high" WMode="Window" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object></p>
<TABLE bgColor=#4591b4 border=0 cellPadding=6 cellSpacing=0 width=689>
  <TBODY>
  <TR>
    <TD align=left><B><FONT color=white><SPAN class=verd11>Account 
      Overview</SPAN></FONT></B></TD>
        <TD align=right>
            <p><B><FONT color=white><SPAN class=verd11>Welcome, 
 
            <?=$db->f("userfullname")?>!</SPAN></FONT></B></p>
        </TD>
</TR></TBODY></TABLE>
<TABLE border=0 cellPadding=0 cellSpacing=0 width=689>
  <TBODY>
    <TR>
    <TD align=right vAlign=top width=332>
      <TABLE border=0 cellPadding=3 cellSpacing=1 width="100%">
        <TBODY>
        <TR>
          <TD bgColor=#5eadd1><B><SPAN class=verd11><FONT 
            color=#5eadd1>.</FONT><FONT color=white>Your Account 
            Information</FONT></SPAN></B></TD></TR></TBODY></TABLE>
      <TABLE bgColor=#4591b4 border=0 cellPadding=0 cellSpacing=0 height=1 
      width=331>
        <TBODY>
        <TR>
          <TD></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellPadding=5 cellSpacing=1 width="100%">
        <TBODY>
        <TR>
          <TD><SPAN class=verd10>Please keep your account information 
            current.<BR></SPAN></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellPadding=0 cellSpacing=5 width=300>
        <TBODY>
        <TR>
          <TD><SPAN class=verd10><B>Name<BR></B><?=$db->f("userfullname")?><BR></SPAN></TD></TR>
        <TR>
          <TD><SPAN 
        class=verd10><B>Email<BR></B><?=$db->f("useremail")?></SPAN></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellPadding=0 cellSpacing=4 width=300>
        <TBODY>
        <TR>
          <TD align=left><SPAN class=verd10>[<A 
            href="update.php">Update Account 
            Information</a>]<FONT 
      color=white>.</FONT></SPAN></TD></TR></TBODY></TABLE><SPAN 
      class=verd10><BR></SPAN></TD>
    <TD bgColor=#4591b4 width=1></TD>
        <TD bgColor=#f6f7ff>

            <p align="center"><img src="overview.jpg" border="0" width="116" height="131"></p>
            <TABLE border=0 cellPadding=10 cellSpacing=0 width="100%">
                <TBODY>

                <TR>
                    <TD align=middle><SPAN class=verd11><B>Need help?<BR></B>Contact the 
            24-Hour <A href="contact.php">Support 
            Desk</a>.</SPAN></TD>
                </TR>
                </TBODY>
            </TABLE>
        </TD>
    </TR>
</TBODY></TABLE>
<TABLE border=0 cellPadding=0 cellSpacing=0 width=690>
  <TBODY>
  <TR>
    <TD align=left vAlign=top>
      <TABLE bgColor=white border=0 cellPadding=3 cellSpacing=1 width="100%">
        <TBODY>
        <TR>
          <TD bgColor=#5eadd1><B><SPAN class=verd11><FONT 
            color=#5eadd1>.</FONT><FONT color=white>Start an Escrow 
            Transaction</FONT></SPAN></B></TD></TR></TBODY></TABLE>
      <TABLE bgColor=#4591b4 border=0 cellPadding=0 cellSpacing=0 height=1 
      width=689>
        <TBODY>
        <TR>
          <TD></TD></TR></TBODY></TABLE>
      <TABLE bgColor=white border=0 cellPadding=0 cellSpacing=1 width="100%">
        <TBODY>
        <TR>
          <TD align=middle bgColor=#e3f0f8><SPAN class=verd10></SPAN>
		  <form action="escrow.php" method="post">
            <TABLE border=0 cellPadding=5 cellSpacing=1>
              <TBODY>
              <TR>
                <TD><SPAN class=verd10>
				<INPUT name=dostartescrow type=hidden value=1>I am...<BR>
				<SELECT name=type size=1>  
				  <OPTION value="seller">The Seller</OPTION> <br>
				  <OPTION value="buyer">The Buyer</OPTION>
				</SELECT></SPAN></TD>
                <TD><SPAN class=verd10>Item<BR><INPUT name=item 
                  size=39></SPAN></TD>
                <TD><SPAN class=verd10>Selling Price<BR><INPUT name=price 
                  size=9></SPAN></TD>
                <TD><SPAN class=verd10><BR><INPUT src="next.gif" type=image>
				  
				  </SPAN>
				  </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
<TABLE bgColor=#4591b4 border=0 cellPadding=0 cellSpacing=0 height=1 
  width=689><TBODY>
  <TR>
    <TD></TD></TR></TBODY></TABLE>
<TABLE border=0 cellPadding=0 cellSpacing=0 width=690>
  <TBODY>
  <TR>
    <TD vAlign=top width=332>
      <TABLE bgColor=white border=0 cellPadding=4 cellSpacing=1 width="100%">
        <TBODY>
        <TR>
          <TD bgColor=#5eadd1 colSpan=3><B><SPAN class=verd11><FONT 
            color=#4591b4>.</FONT></SPAN></B><SPAN class=verd11><FONT 
            color=white><B>Items You Are Selling</B></FONT></SPAN></TD></TR>
        <TR>
          <TD align=middle bgColor=#95c5db width=135><B><FONT 
            color=white><SPAN class=verd10>Escrow ID</SPAN></FONT></B></TD>
          <TD align=left bgColor=#95c5db><B><FONT color=white><SPAN 
            class=verd10>Item</SPAN></FONT></B></TD>
          <TD align=left bgColor=#95c5db width=70><B><FONT color=white><SPAN 
            class=verd10>Status</SPAN></FONT></B></TD></TR>
			
			<?
				$db->query("select * from ".prefix."escrow where seller_id='$userID'");
				
				$i=0;
				while ($db->next_record())
				{
			?>
			
        <TR>
          <TD align=middle bgColor=#f4f4f4 width=135><SPAN class=verd10><A 
            href="status.php?escrowid=<?=$db->f("id")?>"><?=$db->f("id")?></A></SPAN></TD>
          <TD align=left bgColor=#f4f4f4><SPAN class=verd10><?=$db->f("item")?></SPAN></TD>
          <TD align=left bgColor=#ffffcc width=70><SPAN class=verd10><FONT 
            color=#5e7da9><B>
			<?
								if ($db->f("status")=="none")
									echo "WAIT";
								else if ($db->f("status")=="escrow")
									echo "ESCROW";
								else if ($db->f("status")=="cancel")
									echo "CANCELING";
								else if ($db->f("status")=="approve")
									echo "APPROVING";
			?>
			</B></FONT></SPAN></TD></TR>
			<?
					$i++;
				}
				
				if ($i==0)
					echo "<td colspan=\"3\" bgColor=#f4f4f4><SPAN class=verd10>There are no items</span></td>";
			?>
			</TBODY></TABLE></TD>
    <TD bgColor=#7c96b0 width=1></TD>
    <TD vAlign=top>
      <TABLE bgColor=white border=0 cellPadding=4 cellSpacing=1 width="100%">
        <TBODY>
        <TR>
          <TD bgColor=#5ed1bb colSpan=3><B><SPAN class=verd11><FONT 
            color=#5ed1bb>.</FONT></SPAN></B><SPAN class=verd11><FONT 
            color=white><B>Items You Are Buying</B></FONT></SPAN></TD></TR>
        <TR>
          <TD align=middle bgColor=#95c5db width=135><B><FONT 
            color=white><SPAN class=verd10>Escrow ID</SPAN></FONT></B></TD>
          <TD align=left bgColor=#95c5db><B><FONT color=white><SPAN 
            class=verd10>Item</SPAN></FONT></B></TD>
          <TD align=left bgColor=#95c5db width=70><B><FONT color=white><SPAN 
            class=verd10>Status</SPAN></FONT></B></TD></TR>
			<?
				$db->query("select * from ".prefix."escrow where buyer_id='$userID'");
				
				$i=0;
				while ($db->next_record())
				{
			?>
			<TR>
          <TD align=middle bgColor=#f4f4f4 width=135><SPAN class=verd10><A 
            href="status.php?escrowid=<?=$db->f("id")?>"><?=$db->f("id")?></A></SPAN></TD>
          <TD align=left bgColor=#f4f4f4><SPAN class=verd10><?=$db->f("item")?></SPAN></TD>
          <TD align=left bgColor=#ffffcc width=70><SPAN class=verd10><FONT 
            color=#5e7da9><B><?
								if ($db->f("status")=="none")
									echo "PAY NOW";
								else if ($db->f("status")=="escrow")
									echo "ESCROW";
								else if ($db->f("status")=="cancel")
									echo "CANCELING";
								else if ($db->f("status")=="approve")
									echo "APPROVING";
							 ?>
			</B></FONT></SPAN></TD></TR>
			<?
					$i++;
				}
				
				if ($i==0)
					echo "<td colspan=\"3\" bgColor=#f4f4f4><SPAN class=verd10>There are no items</span></td>";
			?>
        </TBODY></TABLE></TD></TR></TBODY></TABLE>
<TABLE bgColor=#acacac border=0 cellPadding=0 cellSpacing=0 height=1 
  width=689><TBODY>
  <TR>
    <TD></TD></TR></TBODY></TABLE><SPAN class=verd10><BR></SPAN>
	
  <?include ("inc/userfooter.php")?>
