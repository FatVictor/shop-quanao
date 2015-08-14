<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from dulieu order by id desc limit 0,3";
	$tv_1=mysql_query($tv);
?>
<div class="headleft">Sản phẩm mới</div>
<div class="midleftno">

<?php
	while($r_sql=mysql_fetch_array($tv_1))
	{
		$link_chi_tiet=$base_url."?thamso=chitiet_sanpham&id_chitiet=$r_sql[id]&id_active_mnd=$r_sql[thuoc_menu]";
		$link_hinh=$base_url."hinhanh_flash/sanpham/$r_sql[hinh_anh]";
		?>
        	<div class="noibatpro">
            <center>
			<a href='<?php echo $link_chi_tiet; ?>'>
            <img src='<?php echo $link_hinh; ?>' style='width:96px; height:120px;' ></a>
            <br />
            <div style="height:3px;width:5px;overflow:hidden"></div>
            <a href='<?php echo $link_chi_tiet; ?>'><?php echo $r_sql['tieu_de']; ?></a>
            </center>
            </div><div class='clear'></div><div class='gachleft'></div>
			

        <?php 
	}
?>

<div class='clear'></div> 

</div><div class="bottomleft"></div>
  

