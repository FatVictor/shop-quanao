<?php
	chong_pha_hoai();
?>
<?php
	function mang_lien_he()
	{
		$sql="select * from lien_he where id='1'";
		$sql_1=mysql_query($sql);
		$sql_2=mysql_fetch_array($sql_1);
		return $sql_2;
	}	
?>
<?php

if(isset($_POST['gui_lien_he']))
{
	if(trim($_POST['fullname'])!="" && trim($_POST['email'])!="" && trim($_POST['content'])!="")
	{
		//print_r($_POST);echo "<hr>";
		$mang_lien_he=mang_lien_he();
		$email_lh=$mang_lien_he['email'];
		//echo $email_lh;echo "<hr>";
		//die($email_lh);
		$_POST['content']=str_replace("<","",$_POST['content']);
		$_POST['content']=nl2br($_POST['content']);
		$tinnhan="
		Họ tên : $_POST[fullname]<br>
		Email : $_POST[email]<br>
		Địa chỉ : $_POST[address]<br>
		Điện thoại : $_POST[phone]<br>
		
		<center><h1 style=\"color:red\">Nội dung</h1></center>
		$_POST[content]
		";
		$to      = $email_lh;
		$subject = 'Khách hàng gửi mail';
		$message = $tinnhan;
		$headers = 'Content-type: text/html;charset=utf-8';
		
		mail($to, $subject, $message, $headers);
		echo '<script>
		alert("Cảm ơn đã liên hệ với chúng tôi!");
		</script>';
		//die($message);
		chuyentrang($base_url."index.php");
		exit();
	}
	else
	{
		//echo "khong hop le";
		echo '<script>
		alert("Bạn chưa điền đủ thông tin , xin hãy thử lại");
		</script>';
		//chuyentrang("index.php");
		trangtruoc();
		exit();

	}
}
?>
<div class="headboxpro"><a href='javascript:voild(0)' >Liên hệ</a></div>
<div class="bodyboxpro"  >


	<div style="clear:both"></div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:14px;font-family:Tahoma, Geneva, sans-serif" >
		<tr>
			<td width="20px">&nbsp;</td>
			<td height="6" background="">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="6" background="">&nbsp;</td>
			<td bgcolor="#FFFFFF">


					<?php
						$sql_lh="select * from lien_he where id in ('1')";
						$q_sql_lh=mysql_query($sql_lh);
						$mang_lien_he=mysql_fetch_array($q_sql_lh);
						echo $mang_lien_he['thongtin_lienhe'];
					?>

			<form name="FormContactUs" method="post">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:14px;font-family:Tahoma, Geneva, sans-serif" >
					<tr><td colspan="5">&nbsp;</td></tr>
					<tr>
						<td width="20%" align="left" valign="top">Họ và tên <font color="#FF0000">(*)</font>:</td>
						<td align="left" valign="top">

							<input name="fullname" value="<?php echo $_POST['fullname']; ?>" type="text" size="30" class="input_box" />&nbsp;
							<?php
								 if($_POST['fullname']=="" && $_POST['gui_lien_he'])
								 {
									echo "<br><span style=\"color:red\">Thông tin bắt buộc phải nhập</span>";
									
								 }
							 ?>
						</td>
					</tr>
					<tr><td colspan="2" height="4px;"></td></tr>
					<tr>
						<td align="left" valign="top">Địa chỉ:</td>
						<td align="left" valign="top">
							<input name="address" value="" type="text" size="30" class="input_box" />
						</td>

					</tr>
					<tr><td colspan="2" height="4px;"></td></tr>
					<tr>
						<td align="left" valign="top">Hòm thư <font color="#FF0000">(*)</font>:</td>
						<td align="left" valign="top">
							<input name="email" value="<?php echo $_POST['email']; ?>" type="text" size="30" class="input_box"  />&nbsp;
							<?php
								 if($_POST['email']=="" && $_POST['gui_lien_he'])
								 {
									echo "<br><span style=\"color:red\">Thông tin bắt buộc phải nhập</span>";
									
								 }
							 ?>					
						</td>
					</tr>

					<tr><td colspan="2" height="4px;"></td></tr>
					<tr>
						<td align="left" valign="top">Điện thoại:</td>
						<td align="left" valign="top"><input name="phone" value="" type="text" size="30" class="input_box" /></td>
					</tr>
					<tr><td colspan="2" height="4px;"></td></tr>
					<tr>
						<td align="left" valign="middle">Nội dung <font color="#FF0000">(*)</font>:</td>

						<td align="left" valign="top">
							<textarea id="content" name="content" style="width:300px; height:100px;"><?php echo $_POST['content']; ?></textarea><br />	
							<?php
								 if($_POST['content']=="" && $_POST['gui_lien_he'])
								 {
									echo "<br><span style=\"color:red\">Thông tin bắt buộc phải nhập</span>";
									
								 }
							 ?>	
						</td>
					</tr>
					<tr><td colspan="2" height="4px;"></td></tr>
					<tr>
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" valign="top"><input type="submit" value="Gửi liên hệ" name="gui_lien_he"/></td>
					</tr>

				</table>
				<input type="hidden" name="action" value="send_contact" />
			</form>
			</td>
			<td width="6" >&nbsp;</td>
		</tr>

	</table>
   </div>