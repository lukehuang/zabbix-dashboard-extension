<?php
/* CONFIG STUFF */
$DATABASE_HOST = "localhost";
$DATABASE_USER = "zabbix";
$DATABASE_PASSWORD = "zabbix";
$DATABASE_SCHEMA = "zabbix";

$ZABBIX_HOST = "localhost";

$EMAIL_STORE = '/var/www/emailmonitor/application/mail/store/';

$debug = false;

$db = mysql_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
mysql_select_db($DATABASE_SCHEMA, $db);