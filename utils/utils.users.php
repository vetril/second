<?php
function enter($name, $password){
global $tbl_users;
$query= "SELECT * FROM $tbl_users
			WHERE login='$name' AND
			password='$password' AND
			blockunblock='unblock'";
$us=mysql_query ($query);
if(!$us){
	exit ($query);
	} 
	if (mysql_num_rows($us)){
	
	
	
	
	$user=mysql_fetch_array($us);
	$_SESSION ['id_user_position']=$user['id'];
	$query = "UPDATE $tbl_users
		set lastvisit=NOW()
		WHERE id=".$user['id'];
	$cat = mysql_query($query);
		if(!$cat){
		exit($query);
		}
	
	return true;
	} else {
	return false;
	}
}
?>