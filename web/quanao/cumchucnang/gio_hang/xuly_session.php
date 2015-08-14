<?php
	for($i=0;$i<count($_SESSION['id_giohang']);$i++)
	{
		// cap nhat gio hang
		$id=$_SESSION['id_giohang'][$i];
		if($id==$_GET['id'])
		{
			$trung_lap="co";
				$sl_cu=$_SESSION['soluong_giohang'][$i];
				$_SESSION['soluong_giohang'][$i]=$sl_cu + 1;
			break;
		}
	}
	$dem_giohang=count($_SESSION['id_giohang']);
	if(count($_GET)!=0)
	{
		if($trung_lap=="")
		{
			$_SESSION['id_giohang'][$dem_giohang]=$_GET['id'];
			$_SESSION['soluong_giohang'][$dem_giohang]=1;
		}
	}
	chuyen_trang($base_url."?thamso=gio_hang");
?>