<?php 
	//echo $_GET['file']."<hr>";
	$duong_dan="C:\\xampp\htdocs\quanao\\";
	$_GET['file']=str_replace('/','\\',$_GET['file']);
	$duong_dan_2=$duong_dan.$_GET['file'];
	//echo $duong_dan_2;echo "<hr>";
	//system("start Dreamweaver.exe $duong_dan_2");
?>