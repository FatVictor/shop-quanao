<?php 
	chong_pha_hoai();
?>
<?php 
	
	function dem__18($id_menu)
	{
		$tv="select count(*) from menu where thuoc_menu='$id_menu'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		return $tv_2[0];
	}
	//bat_loi();
	function chuoi_id_con($id_menu,$c="")
	{
		$sql="select * from menu where thuoc_menu='$id_menu'";
		$q_sql=mysql_query($sql);
		while($r_sql=mysql_fetch_array($q_sql))
		{
			//$link=$base_url."?thamso=xuat_sanpham&id_menu=$r_sql[id]";
			$c=$c."__".$r_sql['id'];
			$dem__18=dem__18($r_sql['id']);
			if($dem__18!=0)
			{
				$c=chuoi_id_con($r_sql['id'],$c);
			}
			else 
			{
				
			}
			
			
		}
		return $c;
	}	
	function mang_id_con($id_menu)
	{
		$c=chuoi_id_con($id_menu);
		$m=explode("__",$c);
		$n[0]=$id_menu;
		$j=1;
		for($i=1;$i<count($m);$i++)
		{
			$n[$j]=$m[$i];
			$j++;
		}
		return $n;
	}
	function kiem_tra_trung_mang($m,$id)
	{
		for($i=0;$i<count($m);$i++)
		{
			if(trim($m[$i])==$id)
			{
				return "co";
			}
		}
		return "khong";
	}
	function active_rrr_2($id)
	{
		$m=mang_id_con($id);
		if(trim($_GET['id_active_mnd'])!="")
		{
			$g=kiem_tra_trung_mang($m,trim($_GET['id_active_mnd']));
			if(trim($g)=="co")
			{
				$active="co";
			}
			else 
			{
				$active="khong";
			}
		}
		else 
		{			
			$active="khong";			
		}
		return $active;
	}
	function tim_class($id)
	{
		$active_rrr_2=active_rrr_2($id);
		$dem__18=dem__18($id);
		if($dem__18!=0)
		{
			if(trim($active_rrr_2)!="co")
			{
				$class="class='icon' ";
			}
			else 
			{
				$class="class='active icon' ";
			}
		}
		else 
		{
			if(trim($active_rrr_2)!="co")
			{
				$class="";
			}
			else 
			{
				$class="class='active' ";
			}
		}
		return $class;
	}
	//echo chuoi_id_con(76);echo "<hr>";
	$m_h=mang_id_con(76);
	//print_r($m_h);echo "<hr>";
	$g=kiem_tra_trung_mang($m_h,91);
	//echo $g;echo "<hr>";
	function de_quy_menu_trai($id_menu,$base_url)
	{
		$sql="select * from menu where thuoc_menu='$id_menu'";
		$q_sql=mysql_query($sql);
		while($r_sql=mysql_fetch_array($q_sql))
		{
			$link=$base_url."?thamso=xuat_sanpham&id_menu=$r_sql[id]&id_active_mnd=$r_sql[id]";
			$dem__18=dem__18($r_sql['id']);
			$class=tim_class($r_sql['id']);
			?>
				<li <?php echo $class; ?> >
					<a href="<?php echo $link ?>"><?php echo $r_sql['ten'] ?></a>
					<?php
						
						if($dem__18!=0)
						{
							echo "<ul>";
								de_quy_menu_trai($r_sql['id'],$base_url);
							echo "</ul>";
						}
					?>
				</li>
			<?php
		}
	}
	function menu_trai($base_url)
	{
		$sql="select * from menu where thuoc_menu='' order by id";
		$q_sql=mysql_query($sql);
		while($r_sql=mysql_fetch_array($q_sql))
		{
			$link=$base_url."?thamso=xuat_sanpham&id_menu=$r_sql[id]&id_active_mnd=$r_sql[id]";
			$dem__18=dem__18($r_sql['id']);
			$class=tim_class($r_sql['id']);
			?>
				<li <?php echo $class; ?> >
					<a href="<?php echo $link ?>"><?php echo $r_sql['ten'] ?></a>
					<?php
						
						if($dem__18!=0)
						{
							echo "<ul>";
								de_quy_menu_trai($r_sql['id'],$base_url);
							echo "</ul>";
						}
					?>
				</li>
			<?php
		}
	}
?>
<div class="headleft" >Danh mục</div>
<div class="midleft">
<ul id="left-menu" class="menu">
<?php 
	menu_trai($base_url);
?>

</ul></div>
<div class="bottomleft"></div><script type="text/javascript"> $('li:last-child').addClass("last");</script>
