<?php 
	chong_pha_hoai();
?>
<?php 
	$ten_hop=thong_so(11);
	$tv="select * from hop_html where vi_tri='trai' order by id";
	$tv_1=mysql_query($tv);
?>
<div class="headright"><?php echo $ten_hop; ?></div>
<div class="midhotrott">
<ul id="left-menu" class="menu">

<?php 
	while($tv_2=mysql_fetch_array($tv_1))
	{
		if(trim($tv_2['tieu_de'])!="")
		{
?>
<li><a href="<?php echo $base_url.$tv_2['link']; ?>" target="_self"><?php echo $tv_2['tieu_de']; ?></a></li>

<?php 
		}
	}
?>
</ul></div>
<div class="bottomleft"></div>