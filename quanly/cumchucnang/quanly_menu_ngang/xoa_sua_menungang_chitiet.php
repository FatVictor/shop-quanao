<?php
	chong_pha_hoai();
?>
<?php 
	if(trim($_POST['form_hd_555'])=="form_hd_555")
	{

		if($_POST['tenmenu'] != "")
		{
			$update = "UPDATE `menu_ngang` SET `ten` = '$_POST[tenmenu]'
				,`ten_en` = '$_POST[tenmenu_en]',`link`='$_POST[link]'
			 WHERE `id` ='$_GET[id_menu]'" ;
			mysql_query($update);
		}
		else
		{
			thongbao("Không được bỏ trống tên menu !");
		}
		trangtruoc();
		exit();
	}
?>
<?php
	$id_menu_sua = $_GET['id_menu'];
	$sql = "select * from menu_ngang where id = '$id_menu_sua'";
	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);
	$ten_menu=$row['ten'];
	$ten_menu_1=$row['ten_en'];
	$link=$row['link'];
?>
<form action="" method="post" style="margin:0">
	<table width="970px" border="0" id="ir" style="margin:6px 0px">
		<tr>
			<td colspan="2">
				<span style="float:left">Sữa menu ngang</span>
				<a href="?thamso=xoa_sua_menungang&page=<?php echo $_GET['page'] ?>" style="text-decoration: none;color:#0b55c4;float:right;margin-right:5px;">
					Đóng
				</a>
			</td>
		</tr>
        <tr>
			<td><b>Link : </b></td>
			<td>
            	<span style="color:blue;font-size:14px;cursor:pointer" onclick="document.getElementById('hhh').style.display='block';">Thay đổi</span>
				<div id="hhh" style="display:none">
                <select onchange="document.getElementById('link').value=this.value" name="lmn" style="margin:3px 0px">
					<option value="" <?php //echo $a_1; ?> >Link</option>
					<option value="?thamso=trang_chu" <?php //echo $a_2; ?> >Trang chủ</option>
					<option value="?thamso=tin_tuc" <?php //echo $a_3; ?> >Tin tức</option>
                    <option value="?thamso=san_pham_moi" <?php //echo $a_4; ?> >Sản phẩm mới</option>
					<option value="?thamso=lien_he" <?php //echo $a_5; ?> >Liên hệ</option>					
				</select>
                <br />
                
                <input type="text" name="link" size="50" id="link" style="margin:3px 0px" value="<?php echo $link; ?>" />
                </div>
			</td>
		</tr>
		<tr>
			<td width="100px"><b>Tên Menu : </b></td>
			<td><input type="text" name="tenmenu" value="<?php echo $ten_menu?>" size="50"/></td>
		</tr>
		<!--<tr>
			<td width="100px"><b>Tên Menu :<br>(English) </b></td>
			<td valign="top"><input type="text" name="tenmenu_en" value="<?php //echo $ten_menu_1?>" size="50"/></td>
		</tr>-->
		<tr>
			<td>&nbsp;</td>
			<td>
            <input type="hidden" name="form_hd_555" value="form_hd_555" />
            <input type="submit" value="Sửa" class="nut_abc"/>
            </td>
		</tr>
	</table>
</form>
<script type="text/javascript">
	table_css_2("ir");
</script>