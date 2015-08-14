<?php 
	chong_pha_hoai();
?>
<div class="dongchuchay"><marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left" scrollamount=3>
</marquee>
<div class="search"> 
	<form action="<?php echo $base_url; ?>">
    <input type="hidden" name="thamso" value="tim_kiem"  />
    <input name="tu_khoa" type="text" value="Tìm kiếm" id="u_control1_ctl00_u_news_menutop1_u_Search1_txtSearch" class="texsearch" onfocus="this.value = '';" onblur="if(this.value == '') {this.value = 'Tìm kiếm';};" /> 
    <input type="submit"  value="" id="u_control1_ctl00_u_news_menutop1_u_Search1_btnSearch" class="inputs" />
	</form>
</div>
</div>