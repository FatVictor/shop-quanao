<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from banner where id='1' ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$m=explode(".",$tv_2['link']);
	//print_r($m);
	$duoi_file=trim($m[count($m)-1]);
	$rong=$tv_2['rong'];
	$cao=$tv_2['cao'];
	$link=$tv_2['link'];
	//echo $duoi_file;echo "<hr>";
?>
<div class="banner">
<div class="advbaner">
<?php 
	if($duoi_file=="swf")
	{
?>
		<script language='javascript'>playfile('<?php echo $link; ?>', '<?php echo $rong; ?>', '<?php echo $cao; ?>', true, '', '', 'link=#');</script>
<?php 
	}
	else 
	{
		echo '
			<img src="'.$link.'" border="0"  width="'.$rong.'" height="'.$cao.'" />
		';
	}
?>
</div>
</div>