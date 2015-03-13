<?php
$dblocation='localhost';
$dbname='second';
$dbuser='root';
$dbpassword="";



//таблица
$tbl_maintext='maintexts';
$tbl_users='users';
$tbl_category='category';
$tbl_addtovar='tovar';

$dbase = mysql_connect ($dblocation, $dbuser, $dbpassword);


if (!$dbase)
	{
	exit ('Сервер баз данных не отвечает');
	}
$dbselectname= mysql_select_db($dbname, $dbase);

if (!$dbselectname)
	{
	exit ('Базы данных не отвичает');
	}
@mysql_query ("SET NAMES 'utf8'");