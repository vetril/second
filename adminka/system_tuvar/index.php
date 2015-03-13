<?php

  error_reporting(E_ALL & ~E_NOTICE);

  // Устанавливаем соединение с базой данных
  require_once("../../config/config.php");
  // Подключаем блок авторизации
  require_once("../authorize.php");
  // Подключаем SoftTime FrameWork
  require_once("../../config/class.config.dmn.php");
  // Подключаем блок отображения текста в окне браузера
  require_once("../utils/utils.print_page.php");

  // Данные переменные определяют название страницы и подсказку.
  $title = 'Управление блоком "Текстовое наполнение сайта"';
  $pageinfo = '<p class=help>Здесь можно добавить
               новостной блок, отредактировать или
               удалить уже существующий блок.</p>';

  // Включаем заголовок страницы
  require_once("../utils/top.php");
 
  // Добавить блок
    echo "<a href=newsadd.php?page=$_GET[page]
             title='Добавить товар'>
		<img border=0 src='../utils/img/add.gif' align='absmiddle' />
             Добавить товар</a>";
  try
  {
    $page_link = 3;
	$pnumber = 20;
	$obj = new pager_mysql ($tbl_addtovar, 
							"",
							"ORDER BY id DESC",
							$pnumber,
							$page_link);
	$news = $obj -> get_page();
		if(!empty($news)){
		?>
		<table width="100%" class='table'>
		<tr  class=header>
		<td width="200px">Изображение</td>
		<td>Название</td>
		<td>Цена</td>
		<td>Категория</td>
		
		<td>Действие</td>
		</tr>
		<?php	
		for($i=0;$i<count($news);$i++){
		if ($news[$i]['picturesmall']){
		$pic = "<a href='../../media/images/{$news[$i]['picture']}'
				target = '_blank'>
				<img src='../../media/images/{$news[$i]['picturesmall']}'/>
				</a>";
				
				} else {
				
			$pic = '_' ;
		
		
		}
				
 
		$url = "?id={$news[$i]['id']}&page=".$_GET['page'];
			if ($news[$i]['showhide']=='show'){
			
			
			$collorrow = '';
			$showhidle = "<a href = newshide.php$url
					title = 'товар'>
			<img src= '../utils/img/folder_locked.gif'
					bolder = 0 align = 'absmiddle'/>Скрыть товар</a>";
				
			} else {
			$collorrow = "class = 'niddenrow'";
			$showhidle = "<a href = newsshow.php$url
					title = 'Отобразить товар'>
					<img src = '../utils/img/show.gif' bolder = 0
					align = 'absmiddle' />Отображать</a>";		
					
					
		
		}
		echo "<tr $collorrow>
			<td>$pic</td>
			<td><h2>{$news[$i][name]}</h2></td>
			<td>{$news[$i][price]}</td>
			<td>{$news[$i][cat_id]}</td>
			
			<td class='menu_right' valign='top'>
			$showhidle
				<a href = 'newsedit.php$url'
					title = 'редактировать'>
			<img src = '../utils/img/kedit.gif'
					bolder = 0
					align = 'absmiddle' />Редактировать</a>
			
			<a href = '#' onclick = \"delete_position('newsdel.php$url',
						'вы действительно хотите удалиь?')\"title ='удалить'>
			<img bolder = 0 src = '../utils/img/editdelete.gif'
					align = 'absmiddle' />Удалить</a>
					</td>
			

			
			</tr>";
			
		}
		?>
 
		
		
		
		</table>
	<?php
		
		echo $obj;
	
		
		
		
		
		}
  }
  catch(ExceptionMySQL $exc)
  {
    require("../utils/exception_mysql.php"); 
  }

  // Включаем завершение страницы
  require_once("../utils/bottom.php");

echo "";
?>