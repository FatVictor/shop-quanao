<?php
	chong_pha_hoai();
?>
<?php 
	if(trim($_POST['sua_hop_html_1'])=="sua_hop_html_1")
	{
		//thongbao("dddddddd");exit();
		//die($_POST['ten_hop']);
		up_thong_so(11,$_POST['ten_hop']);
		for($r=1;$r<=10;$r++)
		{
			$name_link_hinh="link_hinh_".$r;
			$name_link_lien_ket="link_lien_ket_".$r;
			$name_id_abc="id_abc_".$r;
			
			$link_hinh=$_POST[$name_link_hinh];
			$link_lien_ket=$_POST[$name_link_lien_ket];
			$id_abc=$_POST[$name_id_abc];
			
			$up="update `hop_html` set `tieu_de`='$link_hinh',
			`link`='$link_lien_ket'
			
			where id='$id_abc'
	
			";
			mysql_query($up);
			//echo $up."<hr>";
			
		}
		trangtruoc();
			exit();
	}
?>
<style>
	input.oo89
	{
		padding:3px;
		margin:3px;
		width:500px
	}
</style>
<?php
	$ten_hop=thong_so(11);
	$tv="select * from hop_html where vi_tri='trai' order by id limit 0,10";
	$tv_1=mysql_query($tv);
	//$tv_2=mysql_fetch_array($tv_1);
	$so=mysql_num_rows($tv_1);
?>
<form style="margin:0" method="post">
	<table style="margin:6px 0px" id="er_5" width="970px" id="jk899">
		<tr>
			<td>Sữa hộp html</td>
		</tr>
		<tr>
			<td>
            	<table id="er_999" style="margin:6px">
                    <tr>
                        <td width="110px">Tên hộp <?php echo $i; ?> :</td>
                        <td width="600px"><input name="ten_hop" value="<?php echo $ten_hop; ?>" class="oo89"></td>

                    </tr>

                </table>
                <div style="height:5px;overflow:hidden;width:5px"></div>
				<?php 
					$i=1;
					$z=6;
					//while($tv_2=mysql_fetch_array($tv_1))
					for($r=1;$r<=10;$r++)
					{
					$tv_2=mysql_fetch_array($tv_1);
					//print_r($tv_2);
				?>
						<table id="er_<?php echo $z; ?>" style="margin:6px">
							<tr>
								<td width="110px">Tiêu đề <?php echo $i; ?> :</td>
								<td width="600px"><input name="link_hinh_<?php echo $r; ?>" value="<?php echo $tv_2['tieu_de']; ?>" class="oo89"></td>

							</tr>
							<tr>
								<td>Link liên kết <?php echo $i; ?> :</td>
								<td ><input name="link_lien_ket_<?php echo $r; ?>" value="<?php echo $tv_2['link']; ?>" class="oo89" ></td>
								<input type="hidden" name="id_abc_<?php echo $r; ?>" value="<?php echo $tv_2['id']; ?>">
							</tr>

						</table>
				<?php 
					$i++;
					$z++;
					}
				?>
				<input type="hidden" name="sua_hop_html_1" value="sua_hop_html_1">
							<input type="submit" class="nut_chapnhan" value="Sữa" style="margin-left:124px"><br>
							<div style="width:5px;height:6px;overflow:hidden"></div>
							<!--<span style="font-size:14px;margin-left:124px">Kích cỡ hình nên chọn là 602x231</span>-->
							<div style="width:5px;height:6px;overflow:hidden"></div>
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">
	table_css_1("er_5");
	table_css("er_999");
	//table_css("er_6");
	var so=<?php echo $so; ?>;
	var so_1=6+so;
	for(i=6;i<=16;i++)
	{
		table_css("er_"+i);
	}
</script>