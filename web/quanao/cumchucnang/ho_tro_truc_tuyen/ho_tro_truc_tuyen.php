<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from hotro_tructuyen order by id";
	$tv_1=mysql_query($tv);
?>
 <div class="headright">Hỗ trợ trực tuyến</div>
<div class="midhotrott">
<?php 
	while($tv_2=mysql_fetch_array($tv_1))
	{
		//echo '<div class="online">';
		if(trim($tv_2['loai_nick'])=="yahoo")
		{
?>
			<div class="online"><a href="ymsgr:sendim?<?php echo $tv_2['nickname'];?>" style="text-decoration: none">
            	<img src="http://opi.yahoo.com/online?u=<?php echo $tv_2['nickname'];?>&amp;m=g&amp;t=1"  border="0" align="middle" /></a></div>
                <div class="onname1"><?php echo $tv_2['mo_ta'];?></div>
<?php 
		}
		else 
		{
?>
			<div class="online">
            <a href="skype:<?php echo $tv_2['nickname'];?>?chat" style="text-decoration: none">
            <img src="http://mystatus.skype.com/smallclassic/<?php echo $tv_2['nickname'];?>"  border="0" align="middle" /></a></div>
            <div class="onname1"><?php echo $tv_2['mo_ta'];?></div>
<?php
			
		}
	}
?>

</div>
<div class="bottomright"></div>