<?php
chong_pha_hoai();
class class__kiem_tra_form_de_them_du_lieu
{

	function chuoi_nhieu_hinh_anh()
	{
		$mang=getDirectoryList("../hinhanh_flash/upload_tam/");
		// ham getDirectoryList :lay danh sach file trong thu muc , tra ve mang
		$chuoi="";
		for($i=0;$i<count($mang);$i++)
		{
			$chuoi=$chuoi.$mang[$i]."____";
		}
		if($chuoi=="____")
		{
			$chuoi="";
		}
		return $chuoi;
	}
	function them_vao_co_so_du_lieu_mot_dong(){
		chong_90($ten_file_anh);
		$c3="";
		if($_FILES['up_hinh_1']['name']!=""){chong_90($_FILES['up_hinh_1']['name']);$c3=$c3."____".$_FILES['up_hinh_1']['name'];}
		if($_FILES['up_hinh_2']['name']!=""){chong_90($_FILES['up_hinh_2']['name']);$c3=$c3."____".$_FILES['up_hinh_2']['name'];}
		if($_FILES['up_hinh_3']['name']!=""){chong_90($_FILES['up_hinh_3']['name']);$c3=$c3."____".$_FILES['up_hinh_3']['name'];}
		if($_FILES['up_hinh_4']['name']!=""){chong_90($_FILES['up_hinh_4']['name']);$c3=$c3."____".$_FILES['up_hinh_4']['name'];}
		if($_FILES['up_hinh_5']['name']!=""){chong_90($_FILES['up_hinh_5']['name']);$c3=$c3."____".$_FILES['up_hinh_5']['name'];}
		if($_FILES['up_hinh_6']['name']!=""){chong_90($_FILES['up_hinh_6']['name']);$c3=$c3."____".$_FILES['up_hinh_6']['name'];}
		if($_FILES['up_hinh_7']['name']!=""){chong_90($_FILES['up_hinh_7']['name']);$c3=$c3."____".$_FILES['up_hinh_7']['name'];}
		if($_FILES['up_hinh_8']['name']!=""){chong_90($_FILES['up_hinh_8']['name']);$c3=$c3."____".$_FILES['up_hinh_8']['name'];}
		if($_FILES['up_hinh_9']['name']!=""){chong_90($_FILES['up_hinh_9']['name']);$c3=$c3."____".$_FILES['up_hinh_9']['name'];}
		if($_FILES['up_hinh_10']['name']!=""){chong_90($_FILES['up_hinh_10']['name']);$c3=$c3."____".$_FILES['up_hinh_10']['name'];}
		if($_FILES['up_hinh_11']['name']!=""){chong_90($_FILES['up_hinh_11']['name']);$c3=$c3."____".$_FILES['up_hinh_11']['name'];}
		if($_FILES['up_hinh_12']['name']!=""){chong_90($_FILES['up_hinh_12']['name']);$c3=$c3."____".$_FILES['up_hinh_12']['name'];}
		//if($_FILES['up_hinh_1']['name']!=""){if(ereg(".php"))}
		// ham empty_forder : lam rong thu muc
		//$chuoi_nhieu_hinh_anh=$this->chuoi_nhieu_hinh_anh();
		$_SESSION['size']=trim($_POST['size']);
		$_SESSION['capdo']=trim($_POST['capdo']);
		$ten_file_anh=$_FILES['uploadedfile']['name'];
		$_POST['size']=trim($_POST['size']);
		$_POST['mo_ta_ngan']=nl2br($_POST['mo_ta_ngan']);
		if(trim($_POST['keywords'])==""){$_POST['keywords']=trim($_POST['tieude']);}
		$chuoi_dulieu_themvao="
		INSERT INTO `dulieu`
		(
			 `id` , `tieu_de` , `gia` ,`loai_gia`, `hinh_anh` ,
			 `noi_dung` , `thuoc_menu`,`trang_thai`,`khuyen_mai`,`nhieu_hinh_anh`,
			 `tieu_de__en`,`noi_dung__en` ,`trang_thai__en`,`khuyen_mai__en`,`size`,`keywords`,`description`,`khoi_luong`,`mo_ta_ngan`
		 )
		VALUES
		(
			NULL , '$_POST[tieude]', '$_POST[giaban]','$_POST[loai_gia]', '$ten_file_anh',
			 '$_POST[noidung]', '$_POST[capdo]','$_POST[trang_thai]','$_POST[khuyen_mai]','$c3',
			 '$_POST[tieude_en]','$_POST[noidung_en]','$_POST[trang_thai__en]','$_POST[khuyen_mai__en]','$_POST[size]',
			 '$_POST[keywords]','$_POST[description]','$_POST[khoi_luong]','$_POST[mo_ta_ngan]'
		);";
		//die($chuoi_dulieu_themvao);
		
			mysql_query($chuoi_dulieu_themvao);
			$tv="select max(id) from dulieu";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_row($tv_1);
			$id=$tv_2[0];
			$thu_muc="../hinhanh_flash/sanpham/$id/";
			mkdir($thu_muc);
			chmod($thu_muc, 0777);
			create_file($thu_muc."index.html");
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
			//mkdir("$tentaikhoan");
			//chmod("$tentaikhoan", 0777);

	}
	function upload_anh(){
		$ten_file_anh=$_FILES['uploadedfile']['name'];
		$duongdan_upload_anh="../hinhanh_flash/sanpham/$ten_file_anh";
		chong_90($ten_file_anh);
		move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$duongdan_upload_anh);
	}
	function them_du_lieu(){
		$this->upload_anh();
		$this->them_vao_co_so_du_lieu_mot_dong();
	}
	function kiem_tra_tieu_de_form(){
			if($_POST['tieude']!="")
			{
				$this->them_du_lieu();
			}
			else
			{
				thongbao("Không được bỏ trống tiêu đề");
			}
	}
	function xacdinh_upload_khong_trung_ten_anh(){
		$ten_file_anh=$_FILES['uploadedfile']['name'];
		$chuoi_tv="select count(*) from dulieu where hinh_anh in ('$ten_file_anh')";
		//thongbao($chuoi_tv);
		$mang_so_dem_so_anh=mysql_fetch_row(mysql_query($chuoi_tv));
		$soanh_demduoc=$mang_so_dem_so_anh[0];
		if($soanh_demduoc==0)
		{
			return "co";
		}
		else
		{
			if($ten_file_anh=="")
			{
				return "co";
			}
			else
			{
				return "khong";
			}
		}
	}
	function kiem_tra_hinh_anh_form(){
		$xacdinh_upload_khong_trung_ten_anh=$this->xacdinh_upload_khong_trung_ten_anh();
		if($xacdinh_upload_khong_trung_ten_anh=="co")
		{
			$this->kiem_tra_tieu_de_form();
		}
		else
		{
			thongbao("File ảnh này trùng tên với tên file ảnh đã up len , xin bạn hãy đổi tên file ảnh !");
		}
	}
	function kiem_tra_form_de_them_du_lieu()
	{
		if(isset($_POST['them_dulieu_menu_doc']))
		//neu co ton tai bien $_POST['them_dulieu_menu_doc'] thi moi duoc kiem tra hinh anh form gui di co hop le hay khong
		{
			$this->kiem_tra_hinh_anh_form();
			//neu co ton tai bien $_POST['them_dulieu_menu_doc'] thi moi duoc kiem tra hinh anh form gui di co hop le hay khong
		}
	}
}
$class__kiem_tra_form_de_them_du_lieu=new class__kiem_tra_form_de_them_du_lieu;
	$class__kiem_tra_form_de_them_du_lieu->kiem_tra_form_de_them_du_lieu();
	//echo ereg("a","abc");
?>