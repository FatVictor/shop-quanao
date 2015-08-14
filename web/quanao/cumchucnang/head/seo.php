<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from thong_so where ma_so='7'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$m=explode("___",$tv_2['gia_tri']);
	$title=$m[0];
	$keywords=$m[1];
	$description=$m[2];
	switch($_GET['thamso'])
	{
		case "xuat_sanpham":
			$tv="select * from menu where id='$_GET[id_menu]'";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);
			
			$title=$tv_2['ten'];
			if(trim($tv_2['keywords'])!=""){$keywords=$tv_2['keywords'];}
			if(trim($tv_2['description'])!=""){$description=$tv_2['description'];}
		break;
		case "chitiet_sanpham":
			$tv="select * from dulieu where id='$_GET[id_chitiet]'";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);
			
			$title=$tv_2['tieu_de'];
			if(trim($tv_2['keywords'])!=""){$keywords=$tv_2['keywords'];}
			if(trim($tv_2['description'])!=""){$description=$tv_2['description'];}
		break;
		case "xuat_mot_tin":
			$tv="select * from du_lieu_mot_tin where id='$_GET[id]'";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);
			
			$title=$tv_2['ten'];
			if(trim($tv_2['keywords'])!=""){$keywords=$tv_2['keywords'];}
			if(trim($tv_2['description'])!=""){$description=$tv_2['description'];}
		break;
		case "tin_tuc":
			$title="Tin tức";
			$keywords="Tin tức";
			$description="Tin tức";
		break;
		case "chitiet_tintuc":
			$tv="select * from dulieu_1 where id='$_GET[id]'";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);
			
			$title=$tv_2['tieu_de'];
			if(trim($tv_2['keywords'])!=""){$keywords=$tv_2['keywords'];}
			if(trim($tv_2['description'])!=""){$description=$tv_2['description'];}
		break;
		default:
			
	}
?>