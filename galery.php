<?php require ('templates/top.php');
?>
	<script>
				$(function(){
				$('.table a:eq(0)').bind('mouseover',function(){ $('.image').attr('src','/media/img/1.png');});
				$('.table a:eq(1)').bind('mouseover',function(){ $('.image').attr('src','/media/img/2.png');});
				$('.table a:eq(2)').bind('mouseover',function(){ $('.image').attr('src','/media/img/3.png');});
				$('.table a:eq(3)').bind('mouseover',function(){ $('.image').attr('src','/media/img/4.png');});
				$('.table a:eq(4)').bind('mouseover',function(){ $('.image').attr('src','/media/img/5.png');});
				
				$('.table').bind('mouseout',function(){ $('.image').attr('src','/media/img/1.png');});
				
			
			
				});
			</script>	

			<table class='table'>
				<tr>
					<td>
					<a href="media/img/1.png">первая</a><br>
					<a href="media/img/2.png">вторая</a><br>
					<a href="media/img/3.png">третья</a><br>
					<a href="media/img/4.png">четвертая</a><br>
					<a href="media/img/5.png">пятая</a><br>
					</td>
					
					<td>
					<img src="media/img/1.png" class='image'></img>
					</td>
				</tr>
			</table>
			
<?php require_once ('templates/botton.php');
?>
