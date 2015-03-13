<?php
 require ('templates/top.php');



$quvery = "SELECT * FROM $tbl_addtovar
			WHERE showhide = 'show'";

	$cat = mysql_query($quvery);
	if (!$cat){
	exit($quvery);
	
	}

	while ($tovar=mysql_fetch_array($cat)){
		echo "<div class='col-md-4' style='height:200px; overflow:auto'>";
		echo "<img src='media/images/$tovar[picturesmall]'/><br/>";
		echo "<a href='#' data='".$tovar['id']."'>".$tovar['name']."</a><br/>";
		echo $tovar['body'];
		echo "</div>";
}
?>

<script>
$(function(){
	var fx = {
			'initmodal':function(){
				if($('.modal-window').length ==0){
					
					$('<div>').attr('id','jquery-overlay')
							.fadeIn(2000).appendTo('body');
					
					
					
					return $('<div>').addClass('modal-window').fadeIn(2000).appendTo('body');
				} else {
					return $('.modal-window');
			
				}
		
		}
	}
	$('.col-md-4 a').bind('click',function(e){
		e.preventDefault();
		var data = $(this).attr('data');
		modal=fx.initmodal();
		
				$('<a>').attr('href','#')
					.addClass('modal-close-btn')
					.html('&times;')
					.click(function(event){
						event.preventDefault();
							$('#jquery-overlay').remove();
						
						modal.fadeOut('slow',function(){
						$(this).remove();
						});
					}).appendTo(modal)
				
				
				
					$.ajax({
						type: 'Post',
						url: '/ajax.php',
						data: 'id=' + data,
						success: function (data){modal.append(data);},
						error:function(msg){modal.append(msg);}
					});
		
	});
});
</script>

<?php


require_once ('templates/botton.php');?>	