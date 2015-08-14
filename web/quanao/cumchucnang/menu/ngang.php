<?php 
	chong_pha_hoai();
?>
<?php 
	function active_rrr($i,$id)
	{
		if(trim($_GET['id_active_mnn'])!="")
		{
			if(trim($_GET['id_active_mnn'])==$id)
			{
				$active="class='active'";
			}
			else 
			{
				$active="";
			}
		}
		else 
		{
			if($_GET['thamso']=="")
			{
				if($i==1)
				{
					$active="class='active'";
				}
				else 
				{
					$active="";
				}
			}
		}
		return $active;
	}
?>
<div id="menu" class="clearfix">
    <ul id="menu_mid">
    <?php 
		$tv="select * from menu_ngang where thuoc_menu='' order by id ";
		$tv_1=mysql_query($tv);
		$i=1;
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$ten=$tv_2['ten'];
			//$link=$base_url.$tv_2['link']."&id_active_mnn=$tv_2[id]";
			$link=$tv_2['link']."&id_active_mnn=$tv_2[id]";
			$target=trim($tv_2['target']);			
			$active=active_rrr($i,$tv_2['id']);
			if($target==""){$target="_self";}
			echo "<li $active >";
				echo "<a href='$link' target='$target'>";
					echo $ten;
				echo "</a>";
				$e="select * from menu_ngang where thuoc_menu='$tv_2[id]' order by id ";
				$e_1=mysql_query($e);
				if(mysql_num_rows($e_1)!=0)
				{
					echo "<ul>";
						while($e_2=mysql_fetch_array($e_1))
						{
							$ten_2=$e_2['ten'];
							$link_2=$e_2['link']."&id_active_mnn=$tv_2[id]";
							$target_2=trim($e_2['target']);
							echo "<li>";
								echo "<a href='$link_2' target='$target_2'>";
									echo $ten_2;
								echo "</a>";
							echo "</li>";
						}
					echo "</ul>";
				}
			echo "</li>";
			$i++;
		}
	?>
    <!--<li class="active"><a href="/" target="_self">Trang chủ</a></li><li><a href="gioi-thieu_p107.aspx" target="_self">Giới thiệu</a></li><li class="itop"><a href="tin-tuc-su-kien_g718.aspx" target="_self">Tin tức sự kiện</a><ul><li><a href="tin-tuc-son-nuoc-ngoai_g722.aspx" target="_self">Tin tức sơn nước ngoài</a></li></ul></li><li class="itop"><a href="san-pham-moi_c0.aspx" target="_self">Sản phẩm mới</a><ul><li><a href="test_p191.aspx" target="_self">Test</a></li></ul></li><li><a href="bao-gia_p97.aspx" target="_self">Báo giá</a></li><li><a href="lien-he.aspx" target="_self">Liên hệ</a></li><li class="last"><a href="http://dantri.com.vn/" target="_blank">test</a></li>-->
    </ul>
    
</div>