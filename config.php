<?php

session_start();
ob_start();

$conn= mysql_connect("localhost","root","tuvalet1");
if(!$conn){
	
	die ("Baglanti hatasi :" . mysql_error());
	
}

$db_select=mysql_select_db("ysiteproje",$conn);
if(!$db_select){
	
	die ("veritabani hatasi :" . mysql_error());
	
}

mysql_query("SET CHARACTER SET 'utf8' ");
mysql_query("SET NAMES  UTF8");


?>