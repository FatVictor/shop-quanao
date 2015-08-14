<?php

chongphahoai();
//echo "sua san pham menu doc<hr>";

function xuly_kitu___khung_nhap_lieu___sua_sanpham_menu_ngang($giatri){
	$giatri=str_replace("\n","",$giatri);
	$giatri=str_replace("\t","",$giatri);
	$giatri=str_replace("\r","",$giatri);
	$giatri=str_replace("'","\'",$giatri);
	//$giatri=str_replace("\"","'",$giatri);
	return $giatri;
}
function khung_nhap_nhieu_sua_sanpham_menu_ngang($ten,$giatri)
{
	$giatri=xuly_kitu___khung_nhap_lieu___sua_sanpham_menu_ngang($giatri);
	//echo $giatri." \$giatri <br>";
	echo "
	<script type=\"text/javascript\">
		var giatri=\"$giatri\";
	</script>
	";
	echo "
	<script type=\"text/javascript\">

	var oFCKeditor = new FCKeditor('$ten');
	oFCKeditor.BasePath = \"giaodien/fckeditor/\";
	oFCKeditor.Width	= 770 ;
	oFCKeditor.Config[\"EnterMode\"]		= \"br\" ;
	oFCKeditor.Value='$giatri';
	oFCKeditor.Create();
	document.getElementById('xEnter').value = \"br\" ;

	</script>";

}
function khung_sua_sanpham_menu_ngang()
{

	$dulieu_sua="select * from dulieu_1 where id in ('$_GET[id]')";
	//echo $dulieu_sua." \$dulieu_sua <hr>";
	$query_dulieu_sua=mysql_query($dulieu_sua);
	$row_dulieu_sua=mysql_fetch_array($query_dulieu_sua);
	$a1="$row_dulieu_sua[tieu_de]";
	$a10="$row_dulieu_sua[tieu_de__en]";
	$a2="$row_dulieu_sua[hinh_anh]";
	$a3="$row_dulieu_sua[noi_dung]";
	$a30="$row_dulieu_sua[noi_dung__en]";
	$a111="$row_dulieu_sua[keywords]";
	$a112="$row_dulieu_sua[description]";
	$duongdan_anh="../hinhanh_flash/tintuc/$row_dulieu_sua[hinh_anh]";
	print '<table width="970px" id="er" style="margin:6px 0px">
	<form action="" border="1" method="post" enctype="multipart/form-data" style="margin:0">
	<tr>
		<td colspan="2">
			<span style="float:left">
				Sữa tin tức
			</span>
			<a href="?thamso=quanly_tintuc&trang='.$_GET['trang'].'" class="nut_dong_1">Đóng</a>
		</td>
	</tr>
	<tr>
		<td width="20%" align="left"><b>Tiêu đề : </b></td>
		<td width="80%" align="left"><input name="tieude" size="70" value="'.$a1.'"></td>
	</tr>
	<tr>
		<td width="20%" align="left" valign="top"><b>Hình ảnh : </b></td>
		<td width="80%" align="left">
			<input type="file" name="uploadedfile"><br>
			<img src="'.$duongdan_anh.'" width="130px" height="100px">
			<input type="hidden" name="ten_anh" value="'.$a2.'">
		</td>
	</tr>
	<tr>
		<td width="20%" align="left"><b>Keywords : </b></td>
		<td width="80%" align="left"><input name="keywords" size="70" value="'.$a111.'"></td>
	</tr>
	<tr>
		<td width="20%" align="left"><b>Description : </b></td>
		<td width="80%" align="left"><input name="description" size="70" value="'.$a112.'"></td>
	</tr>

	<tr>
		<td width="20%" valign="top" align="left"><b>Nội dung : </b></td>
		<td width="80%" valign="top" align="left">';
		//xuat_select();
		echo "<div id=\"div_vn_afc\">";
			khung_nhap_nhieu_sua_sanpham_menu_ngang("noidung",$a3);
		echo "</div>";
		//echo "<div id=\"div_en_afc\" style=\"display:none\">";
			//khung_nhap_nhieu_sua_sanpham_menu_ngang("noidung_en",$a30);
		//echo "</div>";

		print '</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" class="nut_chapnhan" value="Chấp nhận" name="sua_tin_tuc">
		</td>
	</tr>
	</form>
	</table>';
}




?>
<?php
	khung_sua_sanpham_menu_ngang();
?>
<script type="text/javascript">
	table_css_2("er");
</script>
