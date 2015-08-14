<?php
	chong_pha_hoai();
	//include("cumchucnang/gio_hang/capnhat_soluong.php");
	//include("cumchucnang/gio_hang/thanh_toan.php");

?>
<?php
// doan code cap nhat so luong
if(isset($_POST['form_1']))
{
	for($i=0;$i<count($_SESSION['id_giohang']);$i++)
	{
		$sl_capnhat="soluong_$i";
		//echo $sl_capnhat."<hr>";
		$_SESSION['soluong_giohang'][$i]=$_POST[$sl_capnhat];

	}	
	for($i=0;$i<count($_SESSION['id_giohang']);$i++)
	{
		if($_SESSION['soluong_giohang'][$i]==0)
		{
			unset($_SESSION['soluong_giohang'][$i]);
			unset($_SESSION['id_giohang'][$i]);

		}	
	}
	$_SESSION['soluong_giohang']=ham_1($_SESSION['soluong_giohang']);
	$_SESSION['id_giohang']=ham_1($_SESSION['id_giohang']);
	chuyen_trang($base_url."?thamso=gio_hang");
	exit();
}
?>
<?php
	// doan code thuc hien thanh toan
	function mua_tang($id,$sl)
	{
		$tv="select * from dulieu where id in ('$id')";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		$tang=$tv_2['so_luong_da_mua'] + $sl;
		return $tang;
	}
	if(isset($_POST['form_2']))
	{
		//print_r($_POST);
		if(trim($_POST['fullname'])==""){$ten="khong_hop_le";}else{$ten="hop_le";}
		if(trim($_POST['email'])==""){$email="khong_hop_le";}else{$email="hop_le";}
		if(trim($_POST['phone'])==""){$dien_thoai="khong_hop_le";}else{$dien_thoai="hop_le";}
		if($ten=="hop_le" and $email=="hop_le" and $dien_thoai=="hop_le")
		{
			$ho_ten=$_POST['fullname'];
			$email=$_POST['email'];
			$dien_thoai=$_POST['phone'];
			$dia_chi=$_POST['address'];
			$noi_dung=nl2br($_POST['content']);

			$khach_mua="";
			for($i=0;$i<count($_SESSION['soluong_giohang']);$i++)
			{
				$id=$_SESSION['id_giohang'][$i];
				$sl=$_SESSION['soluong_giohang'][$i];
				if($sl!=0)
				{
					$khach_mua=$khach_mua."$id"."___"."$sl"."______";
				}
				//$mua_tang=mua_tang($id,$sl);
				//$mua="UPDATE `dulieu` SET `so_luong_da_mua` = '$mua_tang' WHERE `dulieu`.`id` =$id;";
				//mysql_query($mua);
			}
			$kd=$_SESSION[$ten_danh_dau.'ky_danh__abc'];
			$khach_mua=substr($khach_mua,0,-6);

			$them=
			"
				INSERT INTO `hoadon`
				(
					`id` ,
					`khach_mua` ,
					`ho_ten` ,
					`dia_chi` ,
					`email` ,
					`dien_thoai` ,
					`noi_dung`,
					`ky_danh`
				)
				VALUES
				(
					NULL ,
					'$khach_mua',
					'$ho_ten',
					'$dia_chi',
					'$email',
					'$dien_thoai',
					'$noi_dung',
					'$kd'
				);
			";
			mysql_query($them);
			unset($_SESSION['soluong_giohang']);
			unset($_SESSION['id_giohang']);
			thongbao("Cảm ơn đã mua hàng tại website của chúng tôi! \\n Hóa đơn của bạn đã gủi cho chúng tôi!");
			chuyen_trang($base_url."index.php");
		}
		else 
		{
			thongbao("Bạn chưa điền đủ thông tin");
			trangtruoc();
		}
		exit();
	}
?>
<style type="text/css">
table.table_09 td
{
	height:25px;
	font-size:14px
}
</style>
<script type="text/javascript">
function chuyen_ooo()
{
	var form=document.getElementsByName("form_999");
	form[0].submit();

}
function chuyen_ooo_2()
{
	var form=document.getElementsByName("FormOrderProduct");
	form[0].submit();

}
</script>

<?php 
	function gio_hang($ten,$email,$dien_thoai,$base_url)
	{
		?>
        
			<form name="form_999" method="post" action="<?php echo $base_url; ?>?thamso=gio_hang" id="zzz" >
			<input type="hidden" name="form_1" value="form_1" >
			<table border="0" cellpadding="0" cellspacing="1" width="100%" style="font-size:14px;margin-top:4px" id="lll" class="tb_p25">
				<tr  class="tr_p26">
									<td width="10px" align="center" height="40px"><div class="thong_so_kt_text"><b>STT</b></div></td>
									<td align="center" width="250px"><div class="thong_so_kt_text"><b>Tên sản phẩm</b></div></td>
									<td width="100px" align="center"><div class="thong_so_kt_text"><b>Số lượng</b></div></td>
									<td width="100px" align="center"><div class="thong_so_kt_text"><b>Giá (VND)</b></div></td>
				
									<td width="100px" align="center"><div class="thong_so_kt_text"><b>Tổng số (VND)</b></div></td>
				</tr>
			
							
				<?php
					//include("cumchucnang/gio_hang/xuat_tr.php");
					include_file_2("web/quanao/cumchucnang/gio_hang/xuat_tr.php");
				?>
                </table>
                <input type="hidden" name="action" value="update_cart" />
			</form>	
                <table border="0" cellpadding="0" cellspacing="1" class="tb_p28" width="100%" style="font-size:14px;margin-top:-1px;border-top:0px solid red" id="lll">
				<tr align="left" class="tr_p27" >
					<td colspan="5" valign="middle" height="40px">
						
							<a href="<?php echo $base_url; ?>" class="xemcard_2" >Tiếp tục mua hàng</a>
							<a href="javascript:voild(0)" onclick="chuyen_ooo()" class="xemcard_2" >Cập nhật giỏ hàng</a>

						<span style="font-size:12px;font-family: Tahoma;margin-left:131px">
						&nbsp;&nbsp;Nhập số lượng bằng <strong style="font-family: Tahoma;">0</strong> để xóa sản phẩm.	</span>					<div style="clear:both; height:5px;"></div>
					</td>
				</tr>
			</table>


						<form name="FormOrderProduct" method="post" action="<?php echo $base_url; ?>?thamso=gio_hang" id="uuu" >
				<table border="0" cellpadding="0" cellspacing="1" width="100%" style="margin-top:10px;font-size:14px" class="table_09">
					<tr class="tr_p26">
						<td align="center" colspan="2" height="40px"><div class="thong_so_kt_text"><b>Vui lòng điền đầy đủ các thông tin bên dưới</b></div></td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td width="150px" align="left" >Họ và tên <font color="#FF0000">(*)</font>:</td>

						<td align="left" >
							<input name="fullname" value="<?php echo $_POST['fullname'];?>" type="text" size="30" class="input_box" />&nbsp; 
							<?php if($ten=="khong_hop_le"){echo "<span style=\"color:red\">Thông tin bắt buộc phải nhập</span>";}?>						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td align="left">Địa chỉ:</td>
						<td align="left" >
							<input name="address" value="" type="text" size="30" class="input_box" />
						</td>

					</tr>
					<tr bgcolor="#FFFFFF">
						<td align="left" >Hòm thư <font color="#FF0000">(*)</font>:</td>
						<td align="left" >
							<input name="email" value="<?php echo $_POST['email'];?>" type="text" size="30" class="input_box"  />&nbsp;
							<?php if($email=="khong_hop_le"){echo "<span style=\"color:red\">Thông tin bắt buộc phải nhập</span>";}?>
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">

						<td align="left" >Điện thoại <font color="#FF0000">(*)</font>:</td>
						<td align="left" >
							<input name="phone" value="<?php echo $_POST['phone'];?>" type="text" size="30" class="input_box" />&nbsp;
							<?php if($dien_thoai=="khong_hop_le"){echo "<span style=\"color:red\">Thông tin bắt buộc phải nhập</span>";}?>
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td align="left" valign="middle">Nội dung:</td>
						<td align="left">
							<textarea id="content" name="content" style="width:300px; height:100px;"></textarea>

						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" >
						<a href="javascript:voild(0)" onclick="chuyen_ooo_2()" class="xemcard_3">Gửi đơn hàng</a>

						</td>
					</tr>
				</table>
				<input type="hidden" name="form_product_order" value="product_order" />
				<input type="hidden" name="form_2" value="form_2" />
				</form>
		<?php
	}
?>
<div class="headboxpro"><a href='#' >Giỏ hàng</a></div>
<div class="bodyboxpro" >
	<table width="100%" border="0" cellspacing="0" cellpadding="0">

		<tr>

			<td bgcolor="#FFFFFF" align="left">
				<?php
					if(count($_SESSION['soluong_giohang'])!=0)
					{
						gio_hang($ten,$email,$dien_thoai,$base_url);
					}
					else
					{
						echo "<span style='font-size:12px'>Bạn chưa mua hàng</span>";
					}
				?>
			</td>

		</tr>

	</table>
</div>