<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_portfolio = "mysql6.000webhost.com";
$database_portfolio = "a4007835_portfo";
$username_portfolio = "a4007835_port";
$password_portfolio = "enviarport98";
$portfolio = mysql_pconnect($hostname_portfolio, $username_portfolio, $password_portfolio) or trigger_error(mysql_error(),E_USER_ERROR); 
?>