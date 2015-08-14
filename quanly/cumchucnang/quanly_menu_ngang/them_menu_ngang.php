<?php
	chong_pha_hoai();
?>
<?php 
	if(trim($_POST['form_hd_555'])=="form_hd_555")
	{
		//thongbao("ppppp");
		$_SESSION['cdmnn']=$_POST['capdo'];
		$_SESSION['lmn']=$_POST['lmn'];
		$sql = "INSERT INTO `menu_ngang` ( `id` , `ten` ,`ten_en`, `thuoc_menu`  , `loai`,`link` )
		VALUES (
		NULL , '$_POST[txttd]','$_POST[txttd_en]', '$_POST[capdo]', '$_POST[loai_menu]','$_POST[link]'
		)";
			//echo $sql." \$sql <br>";
		
				if($_POST['txttd'] != "")
				{
					mysql_query($sql);
				}
				else
				{
					//echo "Không được bỏ trống tiêu đề !";
					thongbao("Không được bỏ trống tiêu đề !");
				}
		trangtruoc();
		exit();
	}
?>
<form action="" method="post">
	<table border="0" id="er" width="970px" style="margin:6px 0px">
		<tr>
			<td colspan="2">
				Thêm menu ngang
			</td>
		</tr>
		<tr>
			<td width="100px"><b>Cấp Độ :</b></td>
			<td>
				<select name="capdo">
					<option value=""><b>Cấp Đầu</b></option>
					<?php
							function option_cap_hai($id_menu)
							{
								include("cumchucnang/bien/bien.php");
								$sql_2 = "select * from menu_ngang where thuoc_menu in('$id_menu') order by id asc";
								$query_2 = mysql_query($sql_2);
								while($row_array = mysql_fetch_array($query_2))
								{
									$thuoc_menu=$row_array['thuoc_menu'];
									$ten_menu=$row_array['ten'];
									$id_menu=$row_array['id'];
									if($_SESSION['cdmnn']==$id_menu){$a="selected='selected'";}else{$a="";}
									echo "<option value=\"$id_menu\" $a >";
										echo "___";
										echo "$ten_menu";
									echo "</option>";
								}
							}
								$sql = "select * from menu_ngang where thuoc_menu in ('') order by id asc";
								$query_left = mysql_query($sql);
								while($row_left = mysql_fetch_array($query_left))
								{
									$ten_menu=$row_left['ten'];
									$id_menu=$row_left['id'];
									if($_SESSION['cdmnn']==$id_menu){$a="selected='selected'";}else{$a="";}
									echo "<option value=\"$id_menu\" $a >";
										echo "$ten_menu";
									echo "</option>";
									$sql_1 = "select count(*) from menu_ngang where thuoc_menu in('$id_menu')";
									$query_1 = mysql_query($sql_1);
									$fetch_row = mysql_fetch_row($query_1);
									if($fetch_row[0] != 0)
									{
										option_cap_hai($id_menu);
									}
								}

					?>
				</select>
			</td>
		</tr>
		<!--<tr>
			<td><b>Loại menu : </b></td>
			<td>
				<select name="loai_menu">
					<option value="nhieu_tin">Nhiều tin</option>
					<option value="mot_tin">Một tin</option>
					<option value="trang_chu">Trang chu</option>
					<option value="lien_he">Liên hệ</option>
					<option value="toanbo_sanpham">Sản phẩm</option>
				</select>
			</td>
		</tr>-->
        <tr>
			<td><b>Loại menu : </b></td>
			<td>
            <?php
				if($_SESSION['lmn']==""){$a_1="selected='selected'";}
				if($_SESSION['lmn']=="?thamso=trang_chu"){$a_2="selected='selected'";}
				if($_SESSION['lmn']=="?thamso=tin_tuc"){$a_3="selected='selected'";}
				if($_SESSION['lmn']=="?thamso=san_pham_moi"){$a_4="selected='selected'";}
				if($_SESSION['lmn']=="?thamso=lien_he"){$a_5="selected='selected'";}
			?>
				<select onchange="document.getElementById('link').value=this.value" name="lmn" >
					<option value="" <?php //echo $a_1; ?> >Link</option>
					<option value="?thamso=trang_chu" <?php //echo $a_2; ?> >Trang chủ</option>
					<option value="?thamso=tin_tuc" <?php //echo $a_3; ?> >Tin tức</option>
                    <option value="?thamso=san_pham_moi" <?php //echo $a_4; ?> >Sản phẩm mới</option>
					<option value="?thamso=lien_he" <?php //echo $a_5; ?> >Liên hệ</option>					
				</select>
			</td>
		</tr>
        <tr>
			<td><b>Link : </b></td>
			<td><input type="text" name="link" size="50" id="link" /></td>
		</tr>
		<tr>
			<td><b>Tiêu Đề : </b></td>
			<td><input type="text" name="txttd" size="50"/></td>
		</tr>
		<!--<tr>
			<td><b>Tiêu Đề : <br>(English)</b></td>
			<td valign="top"><input type="text" name="txttd_en" size="50"/></td>
		</tr>-->
		<tr>
			<td colspan="2">
				<input type="hidden" name="form_hd_555" value="form_hd_555"  />
				<input type="submit" class="nut_chapnhan" value="Thêm Menu" />
			</td>
		</tr>
	</table>
</form>
<?php
//khoangtrang_p(10);
?>
<script type="text/javascript">
	table_css_2("er");
</script>