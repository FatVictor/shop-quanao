<?php
	chong_pha_hoai();
	//thongbao("vao day hahaahah");
	//thongbao($_POST['hd_dkl']);
	//thongbao("vao day");exit();
?>
<?php
class class__kiemtra_va_sua_du_lieu
{
	function nhieu_hinh_anh()
	{
		$chuoi							=	"";
		for($i=0;$i<$_POST['hd_dkl']-1;$i++)
	 	{
	 		$o_1=$i+1;
			$name_1						=	"nhieu_hinh_abc__$o_1";
			$name_2						=	"hidden_nhieu_hinh_abc__$o_1";
			$name_3						=	"tuy_chon_abc__$o_1";
			$post_1						=	$_FILES[$name_1]['name'];
			$post_2						=	$_POST[$name_2];
			$post_3						=	$_POST[$name_3];
			if($post_3!="xoa")
			{
				if($post_1!="")
				{
					$chuoi				=	$chuoi.$post_1."____";
				}
				else
				{
					$chuoi				=	$chuoi.$post_2."____";
				}
			}
		}
	 	$mang=getDirectoryList("../hinhanh_flash/upload_tam/");
	 	// ham getDirectoryList :lay danh sach file trong thu muc , tra ve mang
	 	if(count($mang)!=0)
	 	{
		 	for($i=0;$i<count($mang);$i++)
		 	{
				$chuoi=$chuoi.$mang[$i]."____";
			}
		}

		return $chuoi;
	}
	function xacdinh_ten_anh_update()
	{
		$ten_file_anh=$_FILES['uploadedfile']['name'];
		if($ten_file_anh!="")
		{
			return $ten_file_anh;
		}
		else
		{
			return $_POST['ten_anh'];
		}

	}
	function sua_mot_dong_mysql()
	{
		//$nhieu_hinh_anh=$this->nhieu_hinh_anh();
		//$this->up_nhieu_hinh();
		//$this->up_lai_nhieu_hinh();
		$c3="";
		if(trim($_POST['xoa_anh_1'])=="khong"){if($_FILES['up_hinh_1']['name']!=""){chong_90($_FILES['up_hinh_1']['name']);$c3=$c3."____".$_FILES['up_hinh_1']['name'];}else {if(trim($_POST['hd_up_hinh_1'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_1'];}}}
		if(trim($_POST['xoa_anh_2'])=="khong"){if($_FILES['up_hinh_2']['name']!=""){chong_90($_FILES['up_hinh_2']['name']);$c3=$c3."____".$_FILES['up_hinh_2']['name'];}else {if(trim($_POST['hd_up_hinh_2'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_2'];}}}
		if(trim($_POST['xoa_anh_3'])=="khong"){if($_FILES['up_hinh_3']['name']!=""){chong_90($_FILES['up_hinh_3']['name']);$c3=$c3."____".$_FILES['up_hinh_3']['name'];}else {if(trim($_POST['hd_up_hinh_3'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_3'];}}}
		if(trim($_POST['xoa_anh_4'])=="khong"){if($_FILES['up_hinh_4']['name']!=""){chong_90($_FILES['up_hinh_4']['name']);$c3=$c3."____".$_FILES['up_hinh_4']['name'];}else {if(trim($_POST['hd_up_hinh_4'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_4'];}}}
		if(trim($_POST['xoa_anh_5'])=="khong"){if($_FILES['up_hinh_5']['name']!=""){chong_90($_FILES['up_hinh_5']['name']);$c3=$c3."____".$_FILES['up_hinh_5']['name'];}else {if(trim($_POST['hd_up_hinh_5'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_5'];}}}
		if(trim($_POST['xoa_anh_6'])=="khong"){if($_FILES['up_hinh_6']['name']!=""){chong_90($_FILES['up_hinh_6']['name']);$c3=$c3."____".$_FILES['up_hinh_6']['name'];}else {if(trim($_POST['hd_up_hinh_6'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_6'];}}}
		if(trim($_POST['xoa_anh_7'])=="khong"){if($_FILES['up_hinh_7']['name']!=""){chong_90($_FILES['up_hinh_7']['name']);$c3=$c3."____".$_FILES['up_hinh_7']['name'];}else {if(trim($_POST['hd_up_hinh_7'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_7'];}}}
		if(trim($_POST['xoa_anh_8'])=="khong"){if($_FILES['up_hinh_8']['name']!=""){chong_90($_FILES['up_hinh_8']['name']);$c3=$c3."____".$_FILES['up_hinh_8']['name'];}else {if(trim($_POST['hd_up_hinh_8'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_8'];}}}
		if(trim($_POST['xoa_anh_9'])=="khong"){if($_FILES['up_hinh_9']['name']!=""){chong_90($_FILES['up_hinh_9']['name']);$c3=$c3."____".$_FILES['up_hinh_9']['name'];}else {if(trim($_POST['hd_up_hinh_9'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_9'];}}}
		if(trim($_POST['xoa_anh_10'])=="khong"){if($_FILES['up_hinh_10']['name']!=""){chong_90($_FILES['up_hinh_10']['name']);$c3=$c3."____".$_FILES['up_hinh_10']['name'];}else {if(trim($_POST['hd_up_hinh_10'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_10'];}}}
		if(trim($_POST['xoa_anh_11'])=="khong"){if($_FILES['up_hinh_11']['name']!=""){chong_90($_FILES['up_hinh_11']['name']);$c3=$c3."____".$_FILES['up_hinh_11']['name'];}else {if(trim($_POST['hd_up_hinh_11'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_11'];}}}
		if(trim($_POST['xoa_anh_12'])=="khong"){if($_FILES['up_hinh_12']['name']!=""){chong_90($_FILES['up_hinh_12']['name']);$c3=$c3."____".$_FILES['up_hinh_12']['name'];}else {if(trim($_POST['hd_up_hinh_12'])!=""){$c3=$c3."____".$_POST['hd_up_hinh_12'];}}}
		
		
		
		
		$thu_muc="../hinhanh_flash/sanpham/".$_GET['id_sp']."/";
		if($_FILES['up_hinh_1']['name']!=""){move_uploaded_file($_FILES['up_hinh_1']['tmp_name'],$thu_muc.$_FILES['up_hinh_1']['name']);}
		if($_FILES['up_hinh_2']['name']!=""){move_uploaded_file($_FILES['up_hinh_2']['tmp_name'],$thu_muc.$_FILES['up_hinh_2']['name']);}
		if($_FILES['up_hinh_3']['name']!=""){move_uploaded_file($_FILES['up_hinh_3']['tmp_name'],$thu_muc.$_FILES['up_hinh_3']['name']);}
		if($_FILES['up_hinh_4']['name']!=""){move_uploaded_file($_FILES['up_hinh_4']['tmp_name'],$thu_muc.$_FILES['up_hinh_4']['name']);}
		if($_FILES['up_hinh_5']['name']!=""){move_uploaded_file($_FILES['up_hinh_5']['tmp_name'],$thu_muc.$_FILES['up_hinh_5']['name']);}
		if($_FILES['up_hinh_6']['name']!=""){move_uploaded_file($_FILES['up_hinh_6']['tmp_name'],$thu_muc.$_FILES['up_hinh_6']['name']);}
		if($_FILES['up_hinh_7']['name']!=""){move_uploaded_file($_FILES['up_hinh_7']['tmp_name'],$thu_muc.$_FILES['up_hinh_7']['name']);}
		if($_FILES['up_hinh_8']['name']!=""){move_uploaded_file($_FILES['up_hinh_8']['tmp_name'],$thu_muc.$_FILES['up_hinh_8']['name']);}
		if($_FILES['up_hinh_9']['name']!=""){move_uploaded_file($_FILES['up_hinh_9']['tmp_name'],$thu_muc.$_FILES['up_hinh_9']['name']);}
		if($_FILES['up_hinh_10']['name']!=""){move_uploaded_file($_FILES['up_hinh_10']['tmp_name'],$thu_muc.$_FILES['up_hinh_10']['name']);}
		if($_FILES['up_hinh_11']['name']!=""){move_uploaded_file($_FILES['up_hinh_11']['tmp_name'],$thu_muc.$_FILES['up_hinh_11']['name']);}
		if($_FILES['up_hinh_12']['name']!=""){move_uploaded_file($_FILES['up_hinh_12']['tmp_name'],$thu_muc.$_FILES['up_hinh_12']['name']);}
			
			
		$_POST['mo_ta_ngan']=nl2br($_POST['mo_ta_ngan']);
		
		include("cumchucnang/bien/bien.php");
		$ten_anh=$this->xacdinh_ten_anh_update();
		$update="UPDATE `$tb__dulieu` SET `$tb__dulieu__f__tieu_de` = '$_POST[tieude]',
				`$tb__dulieu__f__gia` = '$_POST[giaban]',
				`$tb__dulieu__f__loai_gia`='$_POST[loai_gia]',
				`$tb__dulieu__f__hinh_anh` = '$ten_anh',
				`$tb__dulieu__f__noi_dung` = '$_POST[noidung]' ,
				`$tb__dulieu__f__trang_thai`='$_POST[trang_thai]',
				`$tb__dulieu__f__khuyen_mai`='$_POST[khuyen_mai]',
				`nhieu_hinh_anh`='$c3',
				`tieu_de__en`='$_POST[tieude_en]',
				`noi_dung__en`='$_POST[noidung_en]',
				`trang_thai__en`='$_POST[trang_thai__en]',
				`khuyen_mai__en`='$_POST[khuyen_mai__en]',
				`khoi_luong`='$_POST[khoi_luong]',
				`size`='$_POST[size]',
				`keywords`='$_POST[keywords]',
				`description`='$_POST[description]',
				`mo_ta_ngan`='$_POST[mo_ta_ngan]'

				 WHERE `$tb__dulieu__f__id` ='$_GET[id_sp]';";
		mysql_query($update);
		//empty_forder("../hinhanh_flash/upload_tam/");
		// ham empty_forder : lam rong thu muc
	}
	function upload()
	{
		chong_90($_FILES['uploadedfile']['name']);
		$ten_file_anh_1=$_FILES['uploadedfile']['name'];
		$duongdan_upload_anh="../hinhanh_flash/sanpham/$ten_file_anh_1";
		move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$duongdan_upload_anh);
	}
	function kiemtra_tieude()
	{
		if($_POST['tieude']!="")
		{
			$this->upload();
			$this->sua_mot_dong_mysql();
		}
		else
		{
			thongbao("Không được bỏ trống tiêu đề");
		}
	}
	function kiemtra_hinhanh__co_khong()
	{
		$ten_file_anh=$_FILES['uploadedfile']['name'];
		if($ten_file_anh=="")
		{
			return "co";
		}
		else
		{
			$ten_file_anh=$_FILES['uploadedfile']['name'];
			if($ten_file_anh=="")
			{
				$ten_file_anh="bo_trong";
			}
			$dem_anh=mysql_fetch_row(mysql_query("select count(*) from dulieu where hinh_anh in ('$ten_file_anh')"));
			if($dem_anh[0]==0)
			{
				return "co";
			}
			else
			{
				return "khong";
			}
		}
	}
	function kiemtra_hinhanh()
	{
		$xuly_query_upload_anh=$this->kiemtra_hinhanh__co_khong();
		if($xuly_query_upload_anh=="co")
		{
			$this->kiemtra_tieude();
		}
		else
		{
			thongbao("File ảnh này trùng tên với tên file ảnh đã up len , xin bạn hãy đổi tên file ảnh !");
		}
		trangtruoc();
	}
	function kiemtra_va_sua_du_lieu()
	{
		if(isset($_POST['sua_dulieu_menu_doc']))
		{
			//echo "sua du lieu";
			$this->kiemtra_hinhanh();
		}
	}
}
$class__kiemtra_va_sua_du_lieu=new class__kiemtra_va_sua_du_lieu;
	$class__kiemtra_va_sua_du_lieu->kiemtra_va_sua_du_lieu();
?>