<?php
	chong_pha_hoai();
?>
<?php 
	$tv="select * from dulieu_1 order by id desc limit 0,5 ";
	$tv_1=mysql_query($tv);
	
?>
<div class="headright">Tin mới</div>
<div class="midright">

<?php 
	$i=1;
	while($r_sql=mysql_fetch_array($tv_1))
	{
		$tieu_de=$r_sql['tieu_de'];
		$ten_hinh=$r_sql['hinh_anh'];
		$link_hinh=$base_url."hinhanh_flash/tintuc/$ten_hinh";
		$noi_dung=$r_sql['noi_dung'];
		//$noi_dung=catchuoi_777($noi_dung,250);
		$id_tt=$r_sql['id'];
		$link=$base_url."?thamso=chitiet_tintuc&id=$id_tt";
?>
<div class="noibat">
<a href="<?php echo $link; ?>"><img src="<?php echo $link_hinh; ?>" align="left" title="" alt=""></a>
<a href="<?php echo $link; ?>"><?php echo $tieu_de; ?>
</a></div><div class="clear"></div>
<?php 
	if($i!=5){echo '<div class="gachleft"></div>';}
	$i++;
	}
?>
</div>
<div class="bottomright"></div>