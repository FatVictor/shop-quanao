<?php 
	chong_pha_hoai();
?>
<div class="headright">Tỷ giá</div>
<div>
<script type="text/javascript" language="javascript" src="http://vnexpress.net/Service/Forex_Content.js"></script> 
<script type="text/javascript" language="JavaScript" src="http://vnexpress.net/Service/Weather_Content.js"></script> 
<table   style="border-collapse:collapse; width:100%" cellpadding="0" cellspacing="0" class="hop_ty_gia" > 
    <script language="javascript">
        for (i = 0; i < 11; i++) {
            //if (i == 0 || i == 10 || i == 2 || i == 1)
            //if (true)
                if (i != 2) {
                    document.write("<tr><td width=\"50%\" style=\"text-align:left;padding-left:10px;\"> " + vForexs[i] + ":</td><td style=\"text-align:right;padding-right:10px;\">" + vCosts[i] + "</td></tr>");
                }
                else {
                    var cny = vCosts[i];
                    document.write("<tr><td width=\"50%\" style=\"text-align:left;padding-left:10px;\"> NDT :</td><td style=\"text-align:right;padding-right:10px;\">" + cny + "</td></tr>");
                }
        }
    </script> 
</table>
</div>