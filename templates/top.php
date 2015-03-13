<?php session_start ();?>
<?php require_once ('config/config.php');?>
<?php require_once ('config/class.config.php');?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"/>
	<title>Моя первая страница</title>
	<meta name="description" content="первая страниа"/>
	<meta name="keywords" content="первая,страница"/>
	<link type="text/css" rel="stylesheet" href="media/bt/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="media/css/style.css"/>
	<script src = 'media/js/jquery-1.11.2.min.js'></script>
	<script>
$(function(){

		$('.menutop a:eq(0)').bind('mouseover',function(){
			$('#header').css('background','yellow');
			$('#header h1').text('Заглавная страница');
		});
		
		
		$('.menutop a:eq(1)').bind('mouseover',function(){
			$('#header').css('background','red');
			$('#header h1').text('Товар');
		});
		
		$('.menutop a:eq(2)').bind('mouseover',function(){
			$('#header').css('background','blue');
			$('#header h1').text('Ремонт компьютеров');
		});
		
		$('.menutop a:eq(3)').bind('mouseover',function(){
			$('#header').css('background','red');
			$('#header h1').text('Гарантии');
		});	
		
		$('.menutop a:eq(4)').bind('mouseover',function(){
			$('#header').css('background','yellow');
			$('#header h1').text('Отзывы');
		});
		
		
		$('.menutop a:eq(5)').bind('mouseover',function(){
			$('#header').css('background','blue');
			$('#header h1').text('Галерея');
		});
			
			
		$('.menutop').bind('mouseout',function(){
			$('#header').css('background','url(/media/img/img.jpg)');
			$('#header h1').text('Название сайта');
		});
		
		
			
		
		
		
});
	</script>
	</head>
		<body>
		<div id="header">
		<img src="media/img/logo.jpg" width="200px" class="logo"/>
		<h1>Название сайта</h1>
		</div>
		
		<div class="menutop">
		<a href='index.php?url=index'>Заглавная страница</a>
		<a href='tovars.php'>Товар</a>
		<a href='index.php?url=page1'>Ремонт компьютеров</a>
		<a href='index.php?url=page2'>Гарантии</a>
		<a href='index.php?url=page3'>Отзывы</a>
		<a href='galery.php'>Галерея</a>
		
		
		</div>
		
		<div class="main">
			<div class="col-md-2">
				<div class="menuleft">
					<div class="menuhead"><br></div>
					<div class="menubody">
						
				<?php 
			if ($_SESSION['id_user_position']){
?>
<a href="logout.php" class="btn btn-info">Выход</a>
<a href="cubinet.php" class="btn btn-info">Кабинет</a>
<?php
			} else {
?>
<a href="reg.php" class="btn btn-info">Регистрация</a>

<a href="login.php" class="btn btn-info">Вход</a>

<?php
				}
			?>
						
						
					</div>
				</div>
			</div>
			<div class="col-md-8">
			
			
