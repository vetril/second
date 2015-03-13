<?php
 require ('templates/top.php');
if ($_SESSION['id_user_position']){
	
$query= "SELECT * FROM $tbl_users
			WHERE id=".$_SESSION['id_user_position'];
			$cat= mysql_query ($query);
	if(!$cat){
		exit (!$query);
	}
$user=mysql_fetch_array($cat);
echo "<h3>".$user['login']."</h3>";
echo "<h4>".$user['email']."</h4>";
	
}


?>