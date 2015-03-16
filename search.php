<?php
require ('templates/top.php');
require_once ('config/config.php');
require_once ('config/class.config.php');


$arr = array();
$query = "SELECT * FROM $tbl_category
		WHERE showhide = 'show'";
$cat = mysql_query($query);
	if(!$cat){
	exit($query);
	}
	while($cats=mysql_fetch_array($cat)){
	$arr[$cats['id']]=$cats['name'];
	
	}
	    $sname       = new field_text("sname","Название",false,$_POST['sname']);
		
		$spreceot    = new field_text("spreceot","Цена от",false,$_POST['spreceot']);
		
		$spricehigh  = new field_text("spricehigh","Цена до",false,$_POST['spricehigh']);
		
		$spicture    = new field_text("spicture","Рисунок",false,$_POST['spicture']);
		
		$svip        = new field_text("svip","VIP",false,$_POST['svip']);
								  
								  
	//$rardel = new field_select('rardel','Раздел',$arr,$_POST['rardel']);
	
	$form = new form (array(
			'sname'=>$sname,
			'spreceot'=>$spreceot,
			'spricehigh'=>$spricehigh,
			//'spicture'=>$spicture,
			'svip'=>$svip
			),
			'Найти', 'form_input');
			
	$form->print_form();

	if ($_POST){
	if ($form->fields['sname']->value != ''){
		$tmp1 = " AND name LIKE % ".
				trim ($form->fields['sname']->value)."%'";
	}
	
	if ($form->fields['spreceot']->value != ''){
		$tmp2 = " AND price > '".$form->fields['spreceot']->value."'";
		
	if ($form->fields['spricehigh']->value != ''){
		$tmp3 = " AND price < '".$form->fields['spricehigh']->value."'";
		
	}
		
	if($form->fields['svip']->value != ''){
		$tmp4 = " AND vip =2 ";
	
	}
	$query = "SELECT * FROM $tbl_addtovar WHERE id>0 AND
			showhide='show' $tmp1 $tmp2 $tmp3 $tmp4";
	
	
	}
	
	$cat=mysql_query($query);
	
	
	echo "<table border=1>"
	echo "<tr><td>изображение</td><td>название</td><td>описание</td></tr>"
		while ($tovs = mysql_fetch_array($cat)){
	echo '<tr>';
	
	if(!$cat){ 
	
	exit ($query);
	}
	
	if ($result['sname']!='')
		
	
	$tovs['name'];
	
	


	
	}

}






?>


<?php
require_once ('templates/botton.php');?>	