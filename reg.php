<?php require_once('templates/top.php');

$login=new field_text('login','Логин',true,$_POST['login']);
$email=new field_text_email('email','Почта',true,$_POST['email']);
$password=new field_password('password','Пароль',true,$_POST['password']);
$passwordconfirm=new field_password('passwordconfirm','Повтор пароля',true,$_POST['passwordconfirm']);

$form=new form(array('login'=>$login,'password'=>$password,'passwordconfirm'=>$passwordconfirm,'email'=>$email),'Регистрация','field');

if($_POST){
	$error=$form->check();
	
	if($form->fields['password']->value!=
		$form->fields['passwordconfirm']->value){
		$error[]='Поле Пароль=повтор пароля не совпадает';
	}
	
	$query="SELECT COUNT(*)
		FROM $tbl_users WHERE
		login='{$form->fields['login']->value}'";
	$user=mysql_query($query);
	if (mysql_result($user,0)){
		$error[]='Пользователь с таким именем существует';
		}
		
	$query="SELECT COUNT(*)
		FROM $tbl_users WHERE
		email='{$form->fields['email']->value}'";
	$user=mysql_query($query);
	if (mysql_result($user,0)){
		$error[]='На данный почтовый адрес уже существует регистрация';
		}
	
	if(!$error){
	
	$date=date('Y-m-d H:i:s',time());
	$query="INSERT INTO $tbl_users VALUES (NULL,
	
		'{$form->fields[login]->value}',
		'{$form->fields[password]->value}',
		'{$form->fields[email]->value}',
		'{$date}',
		'{$date}',
		'unblock')";
	
	$cat= mysql_query ($query);
	if(!$cat){
	 exit($query);
	}
	
	?>
	<script>
		document.location.href='index.php';
	</script>
	
	<?php	
	}
	if($error){
		foreach ($error as $err){
			 echo "<span style='color:red'>$err </span><br/>";
		}
	}
}
$form->print_form();

require_once('templates/botton.php');
?>