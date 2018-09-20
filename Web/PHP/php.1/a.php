<?php
echo '<h1>Hello QRJ</h1>';
echo '<br /> 现在时间：'.date("Y-m-d H:i:s");
mysql_connect('localhost','root','qrj123') or die(mysql_error());
?>
