<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from footer where id='1'";
	$tv_1=truy_van($tv);
	$tv_2=mysql_fetch_array($tv_1);
	echo $tv_2['html'];
?>