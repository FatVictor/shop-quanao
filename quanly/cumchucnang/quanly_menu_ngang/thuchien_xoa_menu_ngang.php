<?php
	chong_pha_hoai();
?>
<?php
		$sql = "select count(*) from menu_ngang where thuoc_menu = '$_GET[id_menu]'";
		$query = mysql_query($sql);
		$rows = mysql_fetch_row($query);
		if($rows[0] == 0)
		{

			$del = "DELETE FROM `menu_ngang` WHERE `id` = '$_GET[id_menu]'";
			//echo $del." \$del <br>";

				//thongbao($del);
				mysql_query($del);


		}
		else
		{
			thongbao("Con menu con nen menu nay khong duoc xoa !");
		}
?>