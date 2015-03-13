<?php
require_once ('templates/top.php');
require_once ('utils/utils.users.php');
$login=new field_text('login','Логин',true,$_POST['login']);
$password=new field_password('password','Пароль',true,$_POST['password']);

$form=new form(array('login'=>$login,'password'=>$password,),'Вход','style_login');

if($_POST){
	$error=$form->check();
	if(!$error){
		if (!enter($form->fields['login']->value,
					$form->fields['password']->value)){
			echo 'Данные не верны';
		}
?>
<script>
		document.location.href='index.php';
</script>
<?php
	}
	if ($error){
		foreach ($error as $err){
			 echo "<span style='color:red'>$err </span><br/>";
		}
	}
}	

$form->print_form();

require_once ('templates/botton.php');
?>


