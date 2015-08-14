<?php
	switch($_GET['thamso'])
	{
		case "xuat_sanpham":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/xuat_sanpham/xuat_sanpham__en.php");
				break;
				default:
					include_file_2("web/quanao/cumchucnang/san_pham/xuat.php");
			}
		break;
		case "san_pham_moi":
			include_file_2("web/quanao/cumchucnang/san_pham/moi.php");
		break;
		case "chitiet_sanpham":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/xuat_sanpham/chitiet_sanpham__en.php");
				break;
				default:
					//include("cumchucnang/xuat_sanpham/chitiet_sanpham.php");
					include_file_2("web/quanao/cumchucnang/san_pham/chi_tiet.php");
			}
		break;
		case "tim_kiem":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/tim_kiem/tim_kiem__en.php");
				break;
				default:
					//include("cumchucnang/tim_kiem/tim_kiem.php");
					include_file_2("web/quanao/cumchucnang/san_pham/xuat_tk.php");
			}
		break;
		case "gio_hang":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/gio_hang/gio_hang__en.php");
				break;
				default:
					include_file_2("web/quanao/cumchucnang/gio_hang/gio_hang.php");
			}
		break;
		case "giohang_xuly_session":
			//include("cumchucnang/gio_hang/xuly_session.php");
		break;
		case "tin_tuc":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/tin_tuc/nhieu_tin___en.php");
				break;
				default:
					include_file_2("web/quanao/cumchucnang/tin_tuc/nhieu_tin.php");
			}
		break;
		case "chitiet_tintuc":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/tin_tuc/chitiet_tintuc___en.php");
				break;
				default:
					include_file_2("web/quanao/cumchucnang/tin_tuc/chitiet_tintuc.php");
			}
		break;
		case "xuat_mot_tin":
			include_file_2("web/quanao/cumchucnang/xuat_mot_tin.php");

		break;
		case "lien_he":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					//include("cumchucnang/lien_he/lien_he__en.php");
				break;
				default:
					//include("cumchucnang/lien_he/lien_he.php");
					include_file_2("web/quanao/cumchucnang/lien_he/lien_he.php");
			}
		break;
		case "toanbo_sanpham":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/xuat_sanpham/xuat_toanbo_sanpham__en.php");
				break;
				default:
					include("cumchucnang/xuat_sanpham/xuat_toanbo_sanpham.php");
			}

		break;
		case"dang_ky":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/dangky_dangnhap/dang_ky__en.php");
				break;
				default:
					include("cumchucnang/dangky_dangnhap/dang_ky.php");
			}
		break;
		case"sua_thong_tin_ca_nhan":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/dangky_dangnhap/sua_thong_tin_ca_nhan__en.php");
				break;
				default:
					include("cumchucnang/dangky_dangnhap/sua_thong_tin_ca_nhan.php");
			}
		break;
		case"quen_mat_khau":
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/dangky_dangnhap/quen_mat_khau__en.php");
				break;
				default:
					include("cumchucnang/dangky_dangnhap/quen_mat_khau.php");
			}
		break;
		default:
			switch($ngon_ngu_abc)
			{
				case"tieng_anh":
					include("cumchucnang/trang_chu/trang_chu__en.php");
				break;
				default:
					include_file_2("web/quanao/cumchucnang/trang_chu/trang_chu.php");	
			}

	}
?>