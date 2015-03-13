<?php

  error_reporting(E_ALL & ~E_NOTICE);

  // Устанавливаем соединение с базой данных
  require_once("../../config/config.php");
  // Подключаем блок авторизации
  require_once("../authorize.php");
  // Подключаем классы формы
  require_once("../../config/class.config.dmn.php");
 // Начало страницы
    $title     = 'Добавление новостного сообщения';
    $pageinfo  = '<p class=help></p>';
    // Включаем заголовок страницы
    require_once("../utils/top.php");
	// Подключение утилиты
	require_once("../../utils/utils.resizeimg.php");
 
  try
  {
	if(!$_POST){
	 $_REQUEST['showhide'] = true;
	}
	$name = new field_text ('name', 'Название', true, $_POST['name']);
	$body = new field_textarea ('body', 'Текст', true, $_POST['body']);
	$price = new field_text ('price', 'Цена', true, $_POST['price']);
	$category = new field_select ('category', 'Раздел', array('1'=>'Бытовая техника','2'=>'Кухонная техника'), $_POST['category']);
	$showhide = new field_checkbox ('showhide', 'Показать', $_REQUEST['showhide']);
	$vip = new field_select ('vip','vip', array('1'=>'1','2'=>'2'), $_POST['vip']);
	$picture= new field_file ('picture', 'Изображение', false, $_FILES, '../../media/images/');
	
	
	$addtovar = new form (array(
				'name'=>$name,
				'body'=>$body,
				'price'=>$price,
				'category'=>$category,
				'showhide'=>$showhide,
				'vip'=>$vip,
				'picture'=>$picture
				),
				"Добавить", "field");
				
						
		if ($_POST) {
			$error = $addtovar->check();
				if($error){
				foreach ($error as $err){
				echo "<span style='color:red'>$err </span><br/>";
				}
				
				}
				
				if ($addtovar->fields['showhide']->value) {
			$showhide2='show';
			}else{
			$showhide2='hide';
			}
			
			
			$var=$addtovar->fields['picture']->get_filename();
			if($var)
			 {
				$picture1=date('y_m_d_h_i_').$var;
				$picturesmall='S_'.$picture1;
				resizeimg("../../media/images/".$picture1,
							"../../media/images/".$picturesmall,
							150,
							150);
				}
			
			
				$query="INSERT INTO $tbl_addtovar VALUES(NULL, 
				'{$addtovar->fields[name]->value}',
				'{$addtovar->fields[body]->value}',
				'{$addtovar->fields[price]->value}',
				'{$addtovar->fields[category]->value}',
				'$showhide2',
				'{$addtovar->fields[vip]->value}',
				'$picture1',
				'$picturesmall',
				NOW()
				)";
				
				$result=mysql_query($query);
				if(!$result) {exit("не удалось выполнить запрос");
				}
				
				
				
			}						
								
	$addtovar->print_form();
	
	  }
	  
	  
  catch(ExceptionObject $exc) 
  {
    require("../utils/exception_object.php"); 
  }
  catch(ExceptionMySQL $exc)
  {
    require("../utils/exception_mysql.php"); 
  }
  catch(ExceptionMember $exc)
  {
    require("../utils/exception_member.php"); 
  }

  // Включаем завершение страницы
  require_once("../utils/bottom.php");
?>
