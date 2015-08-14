<?php 
	chong_pha_hoai();
?>
<?php 
	// 170
	$tv="select * from quangcao_1 where vi_tri='phai' order by id ";
	$tv_1=mysql_query($tv);
?>
<div class="advleft">
<?php 	
	while($tv_2=mysql_fetch_array($tv_1))
	{
	$m=explode(".",$tv_2['ten_file']);
	//print_r($m);
	$duoi_file=trim($m[count($m)-1]);
	$rong=$tv_2['rong'];
	$cao=$tv_2['cao'];
	$link=$tv_2['ten_file'];
	//echo $duoi_file;echo "<hr>";
?>
	<?php 
		if($link!="")
		{
        if($duoi_file=="swf")
        {
    ?>
            <script language='javascript'>playfile('<?php echo $link; ?>', '<?php echo $rong; ?>', '<?php echo $cao; ?>', true, '', '', 'link=#');</script>
    <?php 
        }
        else 
        {
            echo '<a href="'.$tv_2['link'].'" target="_blank">
                <img src="'.$link.'" border="0"  width="'.$rong.'" height="'.$cao.'" />
				</a>
            ';
        }
		}
    ?>

        
<?php 
	}
?>
        </div>