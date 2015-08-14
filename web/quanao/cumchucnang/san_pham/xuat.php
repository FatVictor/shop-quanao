<?php
chong_pha_hoai();
//$chuoi=chuoi_union_dulieu(26,"dulieu");
//echo $chuoi."<hr>";
//bat_loi();
//echo "chao <hr><hr><hr><hr><hr><hr><hr><hr><hr>";


if(trim($_GET['sort'])!="")
{
	$_SESSION['sort']=$_GET['sort'];
	trangtruoc();
	exit();
}
 
switch($_SESSION['sort'])
{
	case "moi_nhat":
		$l[0]=' selected="selected"';
		$sap_xep="id desc";
	break;
	case "ten_tang":
		$l[1]=' selected="selected"';
		$sap_xep="tieu_de";
	break;
	case "ten_giam":
		$l[2]=' selected="selected"';
		$sap_xep="tieu_de desc";
	break;
	case "gia_tang":
		$l[3]=' selected="selected"';
		$sap_xep="gia";
	break;
	case "gia_giam":
		$l[4]=' selected="selected"';
		$sap_xep="gia desc";
	break;
	default:
		$l[0]=' selected="selected"';
		$sap_xep="id desc";
}

//$chuoi_union=chuoi_union_dulieu($_GET['id_menu'],"dulieu");

$chuoi_union=chuoi_union_dulieu_2($_GET['id_menu'],"dulieu",$sap_xep);
//die($chuoi_union);
//echo $chuoi_union."<hr>";
class class__xuat_sanpham
{
	function title()
	{
		$sql="select * from menu where id in ('$_GET[id_menu]')";
		$q_sql=mysql_query($sql);
		$r_sql=mysql_fetch_array($q_sql);
		return $r_sql['ten'];
	}
}
$class__xuat_sanpham=new class__xuat_sanpham;
class phantrang_xuatlink
{
	function link_789($base_url)
	{
		$full_url=full_url();
		$m=explode("&trang",$full_url);
		if(count($m)!=1)
		{
			$link=$m[0];
		}
		else 
		{
			$link=$full_url;
		}
		return $link;
	}
	function trang_truoc($base_url)
	{
		$link_789=$this->link_789($base_url);	
		if($_GET['trang']=="" or $_GET['trang']==1){$a=1;}else{$a=($_GET['trang']-1);}
		echo "<span>";
		echo "<a href=\"$link_789"."&trang=$a\">";
			echo "Trang trước ";
		echo "</a>";
		echo "</span>";
	}
	function trang_sau($st,$base_url)
	{
		$link_789=$this->link_789($base_url);
		if($_GET['trang']==$st){$a=$st;}else{$a=($_GET['trang']+1);}
		if($_GET['trang']=="" or $_GET['trang']==1){$a=2;}
		echo "<span>";
		echo "<a href=\"$link_789"."&trang=$a\">";
			echo " Trang sau ";
		echo "</a>";
		echo "</span>";
	}
	function cham_cham_duoi($gioi_han_tren,$st,$base_url)
	{
		$link_789=$this->link_789($base_url);
		if($gioi_han_tren<$st)
		{
			$a=$st-1;
			if($a!=$gioi_han_tren)
			{
				echo "<span>";
				//echo " ... ";
				echo "</span>";
			}
			echo "<span>";
			echo "<a href=\"$link_789"."&trang=$st\">";
				echo "$st ";
			echo "</a>";
			echo "</span>";
		}
	}
	function cham_cham_tren($gioi_han_duoi,$base_url)
	{
		$link_789=$this->link_789($base_url);
		if($gioi_han_duoi>2)
		{
			echo "<span>";
			echo "<a href=\"$link_789"."&trang=1\">";
				echo "1 ";
			echo "</a>";
			//echo " ... ";
			echo "</span>";
		}
		if($gioi_han_duoi==2)
		{
			echo "<span>";
			echo "<a href=\"$link_789"."&trang=1\">";
				echo "1 ";
			echo "</a>";
			echo "</span>";
		}
	}
	function gioi_han_tren($trang_hien_tai)
	{
		$gioi_han_tren=$trang_hien_tai+4;
		if($gioi_han_tren>=5 and $gioi_han_tren<9)
		{
			$gioi_han_tren=9;
		}
		return $gioi_han_tren;
	}
	function gioi_han_duoi($trang_hien_tai,$st)
	{
		$cao_nhat=$st-8;
		$gioi_han_duoi=$trang_hien_tai-4;
		if($gioi_han_duoi>$cao_nhat)
		{
			$gioi_han_duoi=$cao_nhat;
		}
		return $gioi_han_duoi;
	}
	function xuat_link($st,$base_url)
	{
		if($_GET['trang']==""){$trang_hien_tai=1;}else{$trang_hien_tai=$_GET['trang'];}
		$gioi_han_tren=$this->gioi_han_tren($trang_hien_tai,$base_url);
		$gioi_han_duoi=$this->gioi_han_duoi($trang_hien_tai,$st,$base_url);
		$this->trang_truoc($base_url);
		$this->cham_cham_tren($gioi_han_duoi,$base_url);
			$link_789=$this->link_789($base_url);
			for($i=$gioi_han_duoi;$i<=$gioi_han_tren;$i++)
			{
				$link_phan_trang=$link_789."&trang=$i";
				
				if($i>0 and $i<=$st)
				{
					if($i!=$trang_hien_tai)
					{
						$class_i='';
					}
					else
					{
						//echo "<span class=\"selected\">| $i | </span>";
						$class_i='class="selected"';
					}
					echo "<span $class_i >";	
					echo "<a href=\"$link_phan_trang\" rel=\"nofollow\">";
						echo "$i ";
					echo "</a>";
					echo "</span>";
				}
			}

		$this->cham_cham_duoi($gioi_han_tren,$st,$base_url);
		$this->trang_sau($st,$base_url);
	}
}
?>
<?php
	$sd=7;
	$so_du_lieu_tren_1_dong=3;
	$so_gioi_han=$sd*$so_du_lieu_tren_1_dong;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	//$sql="select * from dulieu where thuoc_menu in ('$_GET[id_menu]') order by id desc limit $vtbd,$so_gioi_han";
	$sql="$chuoi_union limit $vtbd,$so_gioi_han";
	$q_sql=mysql_query($sql);
?>
<?php
	$title=$class__xuat_sanpham->title();
?>
<?php
	$tv_ppp="select * from menu_ngang order by id";
	$tv_ppp_1=mysql_query($tv_ppp);
	while($tv_ppp_2=mysql_fetch_array($tv_ppp_1))
	{
		$loai_menu_ppp=$tv_ppp_2['loai'];
		if($loai_menu_ppp=="toanbo_sanpham")
		{
			$id_ppp=$tv_ppp_2['id'];
			break;
		}
	}
?>
<div class="headboxpro"><a href='javascript:voild(0)' ><?php echo $title; ?></a>
<div class="sortbox">

Sắp xếp: <select onchange="window.location='<?php echo $base_url."?thamso=$_GET[thamso]&id_menu=$_GET[id_menu]&id_active_mnd=$_GET[id_active_mnd]&sort=";?>'+this.value+'<?php echo "&trang=$_GET[trang]"?>'" id="u_control1_ctl00_u_news_control1_ctl00_ddlSort">
	<option <?php echo $l[0]; ?> value="moi_nhat">Mới nhất</option>
	<option <?php echo $l[1]; ?> value="ten_tang">T&#234;n A - Z</option>
	<option <?php echo $l[2]; ?> value="ten_giam">T&#234;n Z - A</option>
	<option <?php echo $l[3]; ?> value="gia_tang">Gi&#225; tăng dần</option>
	<option <?php echo $l[4]; ?> value="gia_giam">Gi&#225; giảm dần</option>
   

</select>
</div>
</div>

<div class="bodyboxpro">


	
	<div style="clear:both"></div>

			<?php
			while($r_sql=mysql_fetch_array($q_sql))
			{
				for($i=1;$i<=$so_du_lieu_tren_1_dong;$i++)
				{
					if($i!=1)
					{
						$r_sql=mysql_fetch_array($q_sql);
					}
					$id_sp=$r_sql['id'];
					$link_chi_tiet=$base_url."?thamso=chitiet_sanpham&id_chitiet=$r_sql[id]&id_active_mnd=$r_sql[thuoc_menu]";
					if($r_sql['tieu_de']!="")
					{
						//echo $r_sql['loai_gia'];
						if($r_sql['loai_gia']!="lien_he")
						{
							$gia=$r_sql['gia'];
							$gia_1=number_format($gia,0,",",",");
							$don_vi_tien="VNĐ";
						}
						else
						{
							$gia="Liên hệ";
							$gia_1=$gia;
							$don_vi_tien="";
						}
						if($r_sql[hinh_anh]!="")
						{
							$link_hinh=$base_url."hinhanh_flash/sanpham/$r_sql[hinh_anh]";
						}
						else
						{
							$link_hinh=$base_url."hinhanh_flash/dungchung/kep_toc.gif";
						}
						if($r_sql['tieu_de']!="")
						{
							?>
                            	<div id="P431" class="prohome grid">
<div class="div_img">
<a class="tooltip" href="<?php echo $link_chi_tiet ?>">
<img src="<?php echo $link_hinh ?>" alt="<?php echo $r_sql['tieu_de']?>" />
</a></div>
<a class="productname tooltip" href="<?php echo $link_chi_tiet ?>"><?php echo $r_sql['tieu_de']?></a>
<div class="price"><div class="gia"><span>Giá bán:</span> <?php echo $gia_1?> đ</div></div>


<div class="dathang"><div class="order"><a href="<?php echo $base_url;?>?thamso=giohang_xuly_session&id=<?php echo $id_sp?>" title="<?php echo $r_sql['tieu_de']?>">Đặt mua</a></div>
<div class="detail"><a href="<?php echo $link_chi_tiet ?>" title="<?php echo $r_sql['tieu_de']?>">Chi tiết</a></div>

</div>
<pre class="hidden"><div class="boxpro">
<div class="proname"><?php echo $r_sql['tieu_de']?></div><div class="proimg1">
<a href=""><img src="<?php echo $link_hinh ?>" align = "center" /></a></div>
<div class="clear"></div>
<div class="contentpro"></div><div class="teaser"></div></div></pre></div>


							<?php
						}
					}
				}
			}
			?>
<?php
	/*$c_sql="select count(*) from dulieu where thuoc_menu in ('$_GET[id_menu]')";
	$q_c_sql=mysql_query($c_sql);
	$r_c_sql=mysql_fetch_row($q_c_sql);*/
	$sdl__18=mysql_num_rows(mysql_query($chuoi_union));
	//thongbao($sdl__18);
	$st=ceil($sdl__18/$so_gioi_han);

?>

<?php
//if($r_c_sql[0]!=0)
if($sdl__18!=0)
{
}
else
{
	echo "<div style=\"width:100%;text-align:left\">";
		echo "Đang cập nhật";
	echo "</div>";
}
?>


</div>	
<div class="clear"></div>
<div class="pagination"> 
<?php
$xuat_link=new phantrang_xuatlink();
$xuat_link->xuat_link($st,$base_url);
?>
</div>						