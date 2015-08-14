<?php
	chong_pha_hoai();
	//bat_loi();
	class class__chitiet_tintuc
	{
		function tim_id_menu($id_tt)
		{
			$tv="select * from dulieu_1 where id in ('$id_tt')";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);
			$id_menu=$tv_2['thuoc_menu'];
			return $id_menu;
		}
		function id_menu_cap_mot___001($id_cap_hai)
		{
			$sql="select * from menu_ngang where id in ('$id_cap_hai')";
			$q_sql=mysql_query($sql);
			$r_sql=mysql_fetch_array($q_sql);
			$thuoc_menu=$r_sql['thuoc_menu'];
			$id_menu_cap_mot=$thuoc_menu;
			return $id_menu_cap_mot;
		}
		function xacdinh_cap_menu___001($id_menu)
		{
			$sql="select * from menu_ngang where id in ('$id_menu')";
			$q_sql=mysql_query($sql);
			$r_sql=mysql_fetch_array($q_sql);
			$thuoc_menu=$r_sql['thuoc_menu'];
			if($thuoc_menu=="")
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}
		function ten_menu___001($id_menu)
		{
			$xac_dinh_cap_menu=$this->xacdinh_cap_menu___001($id_menu);
			$tv="select * from menu_ngang where id in ('$id_menu')";
			//echo $tv;
			$tv1=mysql_query($tv);
			$tv2=mysql_fetch_array($tv1);
			return $tv2['ten'];
		}
		function title___001($id_menu)
		{
			$xac_dinh_cap_menu=$this->xacdinh_cap_menu___001($id_menu);
			//thongbao($xac_dinh_cap_menu);
			switch($xac_dinh_cap_menu)
			{
				case "1":
					$ten_menu=$this->ten_menu___001($id_menu);
					$title="<a href=\"?thamso=nhieu_tin&id=$id_menu\">".$ten_menu."</a>";
				break;
				case "2":
					$ten_menu=$this->ten_menu___001($id_menu);
					$ten_menu_cap_hai=$ten_menu;
					$id_menu_cap_hai=$id_menu;
					$id_menu_cap_mot=$this->id_menu_cap_mot___001($id_menu_cap_hai);
					$ten_menu_cap_mot=$this->ten_menu___001($id_menu_cap_mot);
					$title="<a href=\"?thamso=nhieu_tin&id=$id_menu_cap_mot\">".$ten_menu_cap_mot."</a>";
					$title=$title." &raquo; "."<a href=\"?thamso=nhieu_tin&id=$id_menu_cap_hai\">".$ten_menu_cap_hai."</a>";
				break;
			}
			return $title;
		}
	}
	$class__chitiet_tintuc=new class__chitiet_tintuc();
	function loai_menu($id_menu)
	{
		$tv="select * from menu_ngang where id in ('$id_menu')";
		//echo $tv;
		$tv1=mysql_query($tv);
		$tv2=mysql_fetch_array($tv1);
		return $tv2['loai'];
	}
	function ten_menu_2($id_menu)
	{
		$tv="select * from menu_ngang where id in ('$id_menu')";
		//echo $tv;
		$tv1=mysql_query($tv);
		$tv2=mysql_fetch_array($tv1);
		return $tv2['ten'];
	}
	$id=$_GET['id'];
	//echo $id_sp;

	$sql_10="select * from dulieu_1 where id ='$id'";
	$q__sql_10=mysql_query($sql_10);
	$r__sql_10=mysql_fetch_array($q__sql_10);
	$id_menu=$r__sql_10['thuoc_menu'];

	$tieu_de=$r__sql_10['tieu_de'];
	$noi_dung=$r__sql_10['noi_dung'];

	$loai_menu=loai_menu($id_menu);
	$ten_menu=ten_menu_2($id_menu);
	//echo $loai_menu."<hr>";
	//echo $noi_dung;
	$ten_hinh=$r__sql_10['hinh_anh'];
	$link_hinh="hinhanh_flash/tintuc/$ten_hinh";
	$link_hien_tai="?thamso=chitiet_tintuc&id=$_GET[id]";

	$c_tin_lien_quan="select * from dulieu_1 where id<$id order by id desc limit 0,10";

	//thongbao("$c_tin_lien_quan");
	$tin_lien_quan=mysql_query($c_tin_lien_quan);
?>
<div class="headboxpro"><a href='javascript:voild(0)' ><?php echo $tieu_de; ?></a></div>
<div class="bodyboxpro">




	<table width="100%" border="0" cellspacing="0" cellpadding="0">

		<tr>


			<td bgcolor="#FFFFFF">


						<?php echo $noi_dung; ?>

								

			</td>


		</tr>
		<tr>

		</tr>
	</table>
</div>
<div class="tinkhac">Tin khác</div>

						<ul>
						<?php
							while($mang_tin_lien_quan=mysql_fetch_array($tin_lien_quan))
							{
								$id_tt=$mang_tin_lien_quan['id'];
								$tieu_de=$mang_tin_lien_quan['tieu_de'];
								$link_chi_tiet=$base_url."?thamso=chitiet_tintuc&id=$id_tt&id_active_mnn=$_GET[id_active_mnn]";
								?>
								<div class="newother1">
									<a href="<?php echo $link_chi_tiet; ?>"><?php echo $tieu_de; ?></a>
								</div>
								<?php
							}
						?>
						</ul>
