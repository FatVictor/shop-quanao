<?php 
	chong_pha_hoai();
?>

<?php 
	function ham_jj_82($vi_tri,$rong,$cao)
	{
		$tv="select * from slide where vi_tri='$vi_tri' ";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			if(trim($tv_2['link_hinh'])!="")
			{
				//echo "<li>";
					echo "<a href='$tv_2[link]'>";
						echo "<img src='$tv_2[link_hinh]' width='$rong' height='$cao' />";
					echo "</a>";
				//echo "</li>";
			}
		}
	}
?>

<div class="advhome">
<div id="slider-wrapper" style="width: 602px; height: 231px;">
<div id="slider" class="nivoSlider" style="width: 602px; height: 231px;">

<?php 
	ham_jj_82(1,602,231)
?>


</div></div>
</div>