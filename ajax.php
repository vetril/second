<?php

require_once ("config/config.php");

$id = (int)$_POST['id'];
$query = "SELECT* FROM $tbl_addtovar
		WHERE id=$id";
		
$cat = mysql_query ($query);
if (!$cat) {
	exit ($query);
	}
$text = mysql_fetch_array($cat);

 ?>
 <h4><?= $text['name'];?> </h4>
 <div class="main"><?php echo $text['body'];?></div>






