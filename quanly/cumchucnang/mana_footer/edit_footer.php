<?php
	chong_pha_hoai();
	//echo "dasd";
	if(isset($_POST['thaydoi_footer']))
	{
		$row_footer['html']			=	$_POST['noidung'];
		$row_footer['html'] = str_replace("'",'',$row_footer['html']);
		//$row_footer['html_en']		=	$_POST['noidung_en'];
		//$row_footer['html']			=	$class__thay_the->fckeditor($row_footer['html'],"submit");
		//$row_footer['html_en']		=	$class__thay_the->fckeditor($row_footer['html_en'],"submit");
		$str						=	$row_footer['html'];
		$str_en						=	$row_footer['html_en'];
		$sql = "update footer set html='$str',html_en='$str_en' where id='1'";
		//thongbao("$sql");
		//echo $sql;
		mysql_query($sql);
		trangtruoc();
	}
	$sql = "select * from footer where id = '1'";
	$query = mysql_query($sql);
	$row_footer = mysql_fetch_array($query);
	//echo $row_footer['html'];
	//$row_footer['html'] = str_replace('"','\"',$row_footer['html']);
	$row_footer['html'] = str_replace("'",'',$row_footer['html']);
	$row_footer['html'] = str_replace("\t","",$row_footer['html']);
	$row_footer['html'] = str_replace("\n","",$row_footer['html']);
	$row_footer['html'] = str_replace("\r","",$row_footer['html']);
	//if(trim($_GET['mc'])=="den"){$row_footer['html']="<div style=\"color:black\" >".$row_footer['html']."</div>";}
//echo $row_footer['html'];

	echo "
	<script>
		var noidung 		= '$row_footer[html]';
		
	</script>\n
	";
?>
<style>
.body_82
{
	background:red
}
</style>
<form action="" method="post" style="margin:0">
	<table width="970px" style="margin:6px 0px" id="er">
		<tr>
			<td>Thay đổi footer</td>
		</tr>
		<tr>
			<td >
				<?php //xuat_select();?>
                <div style="font-size:14px;margin:10px 0px">Đổi màu nền : <a href="?thamso=edit_footer&mau=trang" class="sua_xoa_8">Trắng</a> <span style="color:blue">-</span> <a href="?thamso=edit_footer" class="sua_xoa_8">Đen</a></div>
				<center>
					<div id="div_vn_afc">
						<script type="text/javascript">
							var oFCKeditor = new FCKeditor('noidung');
							oFCKeditor.BasePath = "giaodien/fckeditor/";
							oFCKeditor.Width	= 950 ;
							oFCKeditor.Height	= 230 ;
							//oFCKeditor.Background= "red";
							
							//FCKConfig.EditorAreaStyles = 'body { color: Grey } h1 { color: Orange }';
							//oFCKeditor.EditorAreaStyles = 'body {background:red}';
							oFCKeditor.Value=noidung;
							<?php 
								if(trim($_GET['mau'])=="")
								{
							?>
								oFCKeditor.Config["EditorAreaStyles"]		= "body {background:black}" ;
							<?php 
								}
							?>
							oFCKeditor.Config["EnterMode"]		= "br" ;
							oFCKeditor.Create();
							document.getElementById('xEnter').value = "br" ;
						</script>
					</div>

				</center>
			</td>
		</tr>
		<tr>
			<td align="center"><input type="submit" name="thaydoi_footer" value="Thay Đổi" class="nut_chapnhan" /></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
	table_css_2("er");
</script>