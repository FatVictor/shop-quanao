<?php 
	chong_pha_hoai();
?>
<?php
if(isset($_POST['form_55']))
	{
		//$row_footer['html']			=	$_POST['noidung_1']."___".$_POST['noidung_2']."___".$_POST['noidung_3'];
		//$row_footer['html'] = str_replace("'",'',$row_footer['html']);
		up_thong_so(13,$_POST['gd']);
		
		trangtruoc();
	}

	$gt=thong_so(13);
	//$m=explode("___",$row_footer['html']);

	switch($gt)
	{
		case "skin/xanh/":
			$a_1=" selected='selected' ";
		break;
		case "skin/hong/":
			$a_2=" selected='selected' ";
		break;
		case "skin/cam/":
			$a_3=" selected='selected' ";
		break;
		case "skin/den/":
			$a_4=" selected='selected' ";
		break;
		case "skin/xanh_la/":
			$a_5=" selected='selected' ";
		break;
		case "skin/xanh_dam/":
			$a_6=" selected='selected' ";
		break;
		case "skin/do/":
			$a_7=" selected='selected' ";
		break;
	}


?>
<form action="" method="post" style="margin:0">
	<table width="970px" style="margin:6px 0px" id="er_10">
		<tr>
			<td>Tên web</td>
		</tr>
		<tr>
			<td >
				<?php //xuat_select();?>
			
					<div id="div_vn_afc">
						<table id="er_p" style="margin:6px">
							<tr>
								<td width="120px">
									Chọn giao diện :
								</td>
								<td width="300px" >
									<select name="gd" style="margin:3px" >
									  <option value="skin/xanh/" <?php echo $a_1; ?> >Xanh</option>
									  <option value="skin/hong/" <?php echo $a_2; ?> >Hồng</option>
									  <option value="skin/cam/" <?php echo $a_3; ?> >Cam</option>
									  <option value="skin/den/" <?php echo $a_4; ?> >Đen</option>
									  <option value="skin/xanh_la/" <?php echo $a_5; ?> >Xanh lá</option>
									  <option value="skin/xanh_dam/" <?php echo $a_6; ?> >Xanh đậm</option>
									  <option value="skin/do/" <?php echo $a_7; ?> >Đỏ</option>
                                    </select>
								</td>
							</tr>
							<tr>
								<td>&nbsp;
									 
								</td>
								<td>
									<input type="submit" name="form_55" value="Thay Đổi" style="margin:6px;padding:3px;"/>
								</td>
							</tr>
						</table>
						 
						
						 
						
					</div>
					</div>

				
			</td>
		</tr>

	</table>
</form>
<script type="text/javascript">
	table_css_1("er_10");
	table_css("er_p");
</script>
