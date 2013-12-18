<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_antonybike = "localhost";
$database_antonybike = "twabike_antonybike";
$username_antonybike = "twabike_bike";
$password_antonybike = "inacap13";
$antonybike = mysql_pconnect($hostname_antonybike, $username_antonybike, $password_antonybike) or trigger_error(mysql_error(),E_USER_ERROR); 
?>