<?php 
	chong_pha_hoai();
	//bat_loi();
?>
<?php 
	include("web/quanao/cumchucnang/head/seo.php");
	//$thu_muc_skin="skin/xanh/";
	
?>
<?php 
function dkl_777($mang){
//in_mang($mang);
//xuat4(dem_mang($mang));
	$mang1=array_filter($mang);
	$tln=0;
	foreach($mang1 as $tieulongnu)
	{
		//xuat4($tieulongnu);
		$mang2[$tln]=$tieulongnu;
		$tln++;
	}
	//in_mang($mang2);
	return $mang2;
}
function chuyennguoc_777($chuoi)
{
//	thongbao("$chuoi");
	$chuoi_mang_a="ệ,ễ,ể,ề,ế,ê,ẹ,ẽ,ẻ,è,é";
	$chuoi_mang_a_1="e65,e64,e63,e62,e61,e6,e5,e4,e3,e2,e1";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
	$chuoi_mang_b="ý,ỳ,ỷ,ỹ,ỵ,í,ì,ỉ,ĩ,ị";
	$chuoi_mang_b_1="y1,y2,y3,y4,y5,i1,i2,i3,i4,i5";

	$mang_b=explode(",",$chuoi_mang_b);
	$mang_b_1=explode(",",$chuoi_mang_b_1);
	//in_mang1($mang_b);
	//in_mang1($mang_b_1);
	//echo $chuoi."<hr>";
	for($i=0;$i<count($mang_b);$i++)
	{
		//echo $mang_b[$i]." va ".$chuoi_mang_b_1[$i]."<br>";
		$chuoi=str_replace($mang_b_1[$i],$mang_b[$i],$chuoi);
	}
	//echo $chuoi."<hr>";
	$chuoi_mang_a="ự,ữ,ử,ừ,ứ,ú,ù,ủ,ũ,ụ,ư,ứ,ừ,ử,ữ,ự";
	$chuoi_mang_a_1="u75,u74,u73,u72,u71,u1,u2,u3,u4,u5,u7,u71,u72,u73,u64,u75";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	//in_mang1($mang_a);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
	$chuoi_mang_a="ộ,ỗ,ổ,ồ,ố,ợ,ỡ,ở,ờ,ớ,ó,ò,ỏ,õ,ọ,ô,ố,ồ,ổ,ỗ,ộ,ơ,ớ,ờ,ở,ỡ,ợ";
	$chuoi_mang_a_1="o65,o64,o63,o62,o61,o75,o74,o73,o72,o71,o1,o2,o3,o4,o5,o6,o61,o62,o63,o64,o65,o7,o71,o72,o73,o74,o75";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
	$chuoi_mang_a="ậ,ẫ,ẩ,ầ,ấ,á,à,ả,ã,ạ,â,ấ,ầ,ẩ,ẫ,ậ,ắ,ằ,ẳ,ẵ,ặ,ă";
	$chuoi_mang_a_1="a65,a64,a63,a62,a61,a1,a2,a3,a4,a5,a6,a61,a62,a63,a64,a65,a81,a82,a83,a84,a85,a8";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<=count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
	$chuoi_mang_a="E,É,È,Ẻ,Ẽ,Ẹ,Ế,Ề,Ể,Ễ,Ệ,Ê";
	$chuoi_mang_a_1="E,E1,E2,E3,E4,E5,E61,E62,E63,E64,E65,E6";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$chuoi_mang_a[$i],$chuoi);
	}
	$chuoi_mang_a="Ý,Ỳ,Ỷ,Ỹ,Ỵ,Í,Ì,Ỉ,Ĩ,Ị";
	$chuoi_mang_a_1="Y1,Y2,Y3,Y4,Y5,I1,I2,I3,I4,I5";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
	$chuoi_mang_a="U,Ú,Ù,Ủ,Ũ,Ụ,Ứ,Ừ,Ử,Ữ,Ự,Ư";
	$chuoi_mang_a_1="U,U1,U2,U3,U4,U5,U71,U72,U73,U74,U75,U7";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	//in_mang1($mang_a);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
	$chuoi_mang_a="O,Ó,Ò,Ỏ,Õ,Ọ,Ố,Ồ,Ổ,Ỗ,Ộ,Ô,Ớ,Ờ,Ở,Ỡ,Ợ,Ơ";
	$chuoi_mang_a_1="O,O1,O2,O3,O4,O5,O61,O62,O63,O64,O65,O6,O71,O72,O73,O74,O75,O7";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
	$chuoi_mang_a="A,Á,À,Ả,Ã,Ạ,Ấ,Ầ,Ẩ,Ẫ,Ậ,Â,Ắ,Ằ,Ẳ,Ẵ,Ặ,Ă";
	$chuoi_mang_a_1="A,A1,A2,A3,A4,A5,A61,A62,A63,A64,A65,A6,A81,A82,A83,A84,A85,A8";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a_1[$i],$mang_a[$i],$chuoi);
	}
	$chuoi=str_replace("d9","đ",$chuoi);
	$chuoi=str_replace("D9","Đ",$chuoi);
							$chuoi_mang=explode(" ",$chuoi);

							$chuoi_mang1=dkl_777($chuoi_mang);
							//thongbao("$tv2[6]");
							if(count($chuoi_mang1)!=0)
							{
								$chuoi=implode(" ",$chuoi_mang1);
							}
							else
							{
								$chuoi="";
							}
							//$chuoi=str_replace("\n","",$chuoi);
							$chuoi=trim($chuoi);
							$chuoi=str_replace("\r","",$chuoi);
	return $chuoi;
}

function catchuoi_777($chuoi,$so){
//	thongbao($chuoi);
//	xuat4($chuoi);
	$chuoi=str_replace("'","",$chuoi);
	$chuoi=str_replace('"','',$chuoi);
	$chuoi=trim(strip_tags($chuoi));
	$chuoi=str_replace("\n","",$chuoi);
	//$chuoi=str_replace("\t","",$chuoi);
	//echo $so."<br>";
	//echo $chuoi."<br>";
	$chuoi_mang_a="e,é,è,ẻ,ẽ,ẹ,ê,ế,ề,ể,ễ,ệ";
	$chuoi_mang_a_1="e,e1,e2,e3,e4,e5,e6,e61,e62,e63,e64,e65";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
	$chuoi_mang_b="ý,ỳ,ỷ,ỹ,ỵ,í,ì,ỉ,ĩ,ị";
	$chuoi_mang_b_1="y1,y2,y3,y4,y5,i1,i2,i3,i4,i5";

	$mang_b=explode(",",$chuoi_mang_b);
	$mang_b_1=explode(",",$chuoi_mang_b_1);
	//in_mang1($mang_b);
	//in_mang1($mang_b_1);
	//echo $chuoi."<hr>";
	for($i=0;$i<count($mang_b);$i++)
	{
		//echo $mang_b[$i]." va ".$chuoi_mang_b_1[$i]."<br>";
		$chuoi=str_replace($mang_b[$i],$mang_b_1[$i],$chuoi);
	}
	//echo $chuoi."<hr>";
	$chuoi_mang_a="u,ú,ù,ủ,ũ,ụ,ư,ứ,ừ,ử,ữ,ự";
	$chuoi_mang_a_1="u,u1,u2,u3,u4,u5,u7,u71,u72,u73,u74,u75";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	//echo $chuoi."<br>";
	//in_mang1($mang_a);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
	$chuoi_mang_a="o,ó,ò,ỏ,õ,ọ,ô,ố,ồ,ổ,ỗ,ộ,ơ,ớ,ờ,ở,ỡ,ợ";
	$chuoi_mang_a_1="o,o1,o2,o3,o4,o5,o6,o61,o62,o63,o64,o65,o7,o71,o72,o73,o74,o75";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
	$chuoi_mang_a="a,á,à,ả,ã,ạ,â,ấ,ầ,ẩ,ẫ,ậ,ă,ắ,ằ,ẳ,ẵ,ặ";
	$chuoi_mang_a_1="a,a1,a2,a3,a4,a5,a6,a61,a62,a63,a64,a65,a8,a81,a82,a83,a84,a85";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<=count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
	////echo $chuoi."<br>";
//	xuat4($chuoi);
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
	$chuoi_mang_a="E,É,È,Ẻ,Ẽ,Ẹ,Ê,Ế,Ề,Ể,Ễ,Ệ";
	$chuoi_mang_a_1="E,E1,E2,E3,E4,E5,E6,E61,E62,E63,E64,E65";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$chuoi_mang_a_1[$i],$chuoi);
	}
	$chuoi_mang_a="Ý,Ỳ,Ỷ,Ỹ,Ỵ,Í,Ì,Ỉ,Ĩ,Ị";
	$chuoi_mang_a_1="Y1,Y2,Y3,Y4,Y5,I1,I2,I3,I4,I5";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
	//echo $chuoi."<br>";
	$chuoi_mang_a="U,Ú,Ù,Ủ,Ũ,Ụ,Ư,Ứ,Ừ,Ử,Ữ,Ự";
	$chuoi_mang_a_1="U,U1,U2,U3,U4,U5,U7,U71,U72,U73,U74,U75";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	//in_mang1($mang_a);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
	//////echo $chuoi."<br>";
	$chuoi_mang_a="O,Ó,Ò,Ỏ,Õ,Ọ,Ô,Ố,Ồ,Ổ,Ỗ,Ộ,Ơ,Ớ,Ờ,Ở,Ỡ,Ợ";
	$chuoi_mang_a_1="O,O1,O2,O3,O4,O5,O6,O61,O62,O63,O64,O65,O7,O71,O72,O73,O74,O75";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
	$chuoi_mang_a="A,Á,À,Ả,Ã,Ạ,Â,Ấ,Ầ,Ẩ,Ẫ,Ậ,Ă,Ắ,Ằ,Ẳ,Ẵ,Ặ";
	$chuoi_mang_a_1="A,A1,A2,A3,A4,A5,A6,A61,A62,A63,A64,A65,A8,A81,A82,A83,A84,A85";
	$mang_a=explode(",",$chuoi_mang_a);
	$mang_a_1=explode(",",$chuoi_mang_a_1);
	for($i=0;$i<count($mang_a);$i++)
	{
		$chuoi=str_replace($mang_a[$i],$mang_a_1[$i],$chuoi);
	}
//	xuat4($chuoi);
	//echo $chuoi."666666666666666666666<br>";
	$chuoi=str_replace("đ","d9",$chuoi);
	$chuoi=str_replace("Đ","D9",$chuoi);
//	thongbao("$chuoi");
	//echo $chuoi."tttttttttttttttttteeeeeeeeeeeeeeeeeeeee<br>";
	//kiembien1($chuoi);
	$chuoi=substr($chuoi,0,$so);
	//break;

	//echo $chuoi."eeeeeeeeeeeeeeeeeeeee<br>";
	//exit;
//	xuat4($chuoi);
	$mang_chuoi=explode(" ",$chuoi);
	if(count($mang_chuoi)==1)
	{}
	else
	{
		unset($mang_chuoi[count($mang_chuoi)-1]);
	}
	$chuoi=implode(" ",$mang_chuoi);
	//echo $chuoi."<hr>";
	$chuoi=chuyennguoc_777($chuoi);

	return $chuoi;
}
?>
<?php
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
	function dem_dl_menu($id)
	{
		$tv="select count(*) from dulieu_1 where thuoc_menu in ('$id')";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		return $tv_2[0];
	}
	function ten_menu___001($id_menu)
	{
		$xac_dinh_cap_menu=xacdinh_cap_menu___001($id_menu);
		$tv="select * from menu_ngang where id in ('$id_menu')";
		//echo $tv;
		$tv1=mysql_query($tv);
		$tv2=mysql_fetch_array($tv1);
		return $tv2['ten'];
	}
	function title___001($id_menu)
	{
		$xac_dinh_cap_menu=xacdinh_cap_menu___001($id_menu);
		switch($xac_dinh_cap_menu)
		{
			case "1":
				$ten_menu=ten_menu___001($_GET['id']);
				$title="<a href=\"?thamso=nhieu_tin&id=$_GET[id]\">".$ten_menu."</a>";
			break;
			case "2":
				$ten_menu=ten_menu___001($_GET['id']);
				$ten_menu_cap_hai=$ten_menu;
				$id_menu_cap_hai=$id_menu;
				$id_menu_cap_mot=id_menu_cap_mot___001($id_menu_cap_hai);
				$ten_menu_cap_mot=ten_menu___001($id_menu_cap_mot);
				$title="<a href=\"?thamso=nhieu_tin&id=$id_menu_cap_mot\">".$ten_menu_cap_mot."</a>";
				$title=$title." &raquo; "."<a href=\"?thamso=nhieu_tin&id=$_GET[id]\">".$ten_menu_cap_hai."</a>";
			break;
		}
		return $title;
	}
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
	function tong_so_dong_mysql($tong_so_dong_mysql)
	{
		$r="select * from menu_ngang where thuoc_menu in ('$_GET[id]') order by id";
		$r_1=mysql_query($r);
		while($r_2=mysql_fetch_array($r_1))
		{
			$id_cap2=$r_2['id'];
			$dem_dl_menu=dem_dl_menu($id_cap2);
			if($r_2['loai']=="nhieu_tin")
			{
				$tong_so_dong_mysql=$tong_so_dong_mysql + $dem_dl_menu;
			}
		}
		return $tong_so_dong_mysql;
	}
	function chuoi_union($sql)
	{
		$r="select * from menu_ngang where thuoc_menu in ('$_GET[id]') order by id";
		//echo $r."<hr>";
		$r_1=mysql_query($r);
		while($r_2=mysql_fetch_array($r_1))
		{
			$id_cap2=$r_2['id'];
			$dem_dl_menu=dem_dl_menu($id_cap2);
			if($r_2['loai']=="nhieu_tin")
			{
				$sql=$sql." ( select * from dulieu_1 where thuoc_menu in ('$id_cap2') order by id desc limit $dem_dl_menu ) union  ";
			}
		}
		$sql=substr($sql,0,-7);
		return $sql;
	}
	function xuat_tintuc($so_gioi_han,$base_url,$thu_muc_skin)
	{
		
		if($_GET['trang']==""){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_gioi_han;}
		$dem_dl_menu=dem_dl_menu($_GET['id']);
		$tong_so_dong_mysql=$dem_dl_menu;
		$tong_so_dong_mysql=tong_so_dong_mysql($tong_so_dong_mysql);
		//$sql="( select * from dulieu_1 where thuoc_menu in ('$_GET[id]') order by id desc limit $dem_dl_menu ) union ";
		//$sql=chuoi_union($sql);
		$sql="select * from dulieu_1 order by id desc limit $vtbd,$so_gioi_han";
		//echo $sql."<hr>";
		//thongbao($sql);
		$q_sql=mysql_query($sql);
		while($r_sql=mysql_fetch_array($q_sql))
		{
			$tieu_de=$r_sql['tieu_de'];
			$ten_hinh=$r_sql['hinh_anh'];
			$link_hinh=$base_url."hinhanh_flash/tintuc/$ten_hinh";
			$noi_dung=$r_sql['noi_dung'];
			$noi_dung=catchuoi_777($noi_dung,250);
			$id_tt=$r_sql['id'];
			$link=$base_url."?thamso=chitiet_tintuc&id=$id_tt";
			?>
				<tr>

					<td bgcolor="#FFFFFF" width="150px" align="center">
                    	<a href="<?php echo $link; ?>" >
										<img src="<?php echo $link_hinh; ?>" width="130px" height="100px"/>
									</a>
                    </td>
                      <td valign="top">
                      	<div class="td_news">
								<a href="<?php echo $link; ?>" class="aaa_7"><?php echo $tieu_de; ?></a>
							</div>
                            <?php echo $noi_dung; ?> 
					</td>

				</tr>
                <tr>
                	<td height="40px">&nbsp;
                    	
                    </td>
                    <td>
                    	<div class="news-more"><a href="<?php echo $link; ?>">Xem tiếp</a></div>
                    </td>
                </tr>
				<tr>
			<?php		
		}
		return $tong_so_dong_mysql;
	}
?>
<?php
	$title=title___001($_GET['id']);
?>
<style>
table.oo_99
{
	width:590px;
	font-size:14px;
	font-family:Tahoma, Geneva, sans-serif
}
table.oo_99 td
{
}
a.aaa_7
{
	color:black;
	font-weight:bold
}
a.aaa_7:hover
{
	color:black;
	font-weight:bold
}
</style>


	
	<div class="headboxpro"><a href='javascript:voild(0)' >Tin tức</a></div>
	<div class="bodyboxpro">
	<table  border="0" cellspacing="0" cellpadding="0" class="oo_99">

		
	<?php
		$sd=3;
		$so_du_lieu_tren_1_dong=1;
		$so_gioi_han=$sd*$so_du_lieu_tren_1_dong;
		//thongbao($so_gioi_han);
		$tv="select count(*) from dulieu_1";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		xuat_tintuc($so_gioi_han,$base_url,$thu_muc_skin);
		$st=ceil($tv_2[0]/$so_gioi_han);
		$xuat_link=new phantrang_xuatlink();
		

	?>

	</table>

	</div>			
    <?php 

	?>