// JavaScript Document

//Play file format : swf, flv, wma, wmv, avi, mp3, wav, dat
function playfile(file, width, height, autoplay, image, slink, flashvars) {
    file = file.toLowerCase();
    if (Right(file, 3) == "swf" || Right(file, 3) == "xml" || Right(file, 4) == "aspx") {
        EmbedFlash(file, width, height, flashvars);
    }
    if (Right(file, 3) == "flv") {
        PlayFlash(file, width, height, autoplay, image, slink, flashvars)
    }
    if (Right(file, 3) == "mp3" || Right(file, 3) == "wma" || Right(file, 3) == "wmv" || Right(file, 3) == "avi" || Right(file, 3) == "wav" || Right(file, 3) == "dat") {
        PlayVideo(file, width, height, autoplay, flashvars);
    }
}

function PlayFlash(path, width, height, autoplay, image, slink, flashvars) {
    auto = false; if (autoplay == true) { auto = true; } var str_link = ""; if (slink.length > 0) { str_link = "&link=" + slink + "&linktarget=_blank"; } var str = "<embed name=\"PlayerVideo\" id=\"PlayerVideo\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" src=\"js/player.swf\" bgcolor=\"#FFFFFF\" quality=\"high\" allowscriptaccess=\"always\" allowfullscreen=\"true\" flashvars=\"file=" + path + "&image=" + image + str_link + "&autostart=" + auto + "&volume=100&overstretch=fit&showeq=true&linkfromdisplay=true&duration=auto\" width=\"" + width + "\" height=\"" + height + "\"></embed>"; if (flashvars != "") { $Get(flashvars).innerHTML = str; } else { document.write(str); } 
}

function PlayVideo(path, width, height, autoplay, flashvars) {
    auto = false; if (autoplay == true) { auto = true; } str = "<object id=\"MediaPlayer\" classid=\"CLSID:6BF52A52-394A-11D3-B153-00C04F79FAA6\"  codeBase=\"http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,5,715\" width=\"" + width + "\" height=\"" + height + "\"> <param name=\"autoplay\" value=\"" + auto + "\"/> <param name=\"autostart\" value=\"" + auto + "\"/> <param name=\"showcontrols\" value=\"true\">  <param name=\"EnableContextMenu\" value=\"true\"/> <param name=\"showstatusbar\" value=\"false\"/> <param name=\"URL\" value=\"" + path + "\"/><param name=\"wmode\" value=\"transparent\"><embed name=\"MediaPlayer\" type=\"application/x-mplayer2\" src=\"" + path + "\" autoplay=\"" + auto + "\" autostart=\"" + auto + "\" showcontrols=\"true\" enablecontextmenu=\"true\" showstatusbar=\"false\" pluginspage=\"http://www.microsoft.com/windows/windowsmedia/download\" wmode=\"transparent\" width=\"" + width + "\" height=\"" + height + "\"></embed> </object>"; if (flashvars != "") { $Get(flashvars).innerHTML = str; } else { document.write(str); } 
}

function EmbedFlash(path, width, height, flashvars) { if (height.length == 0) { height = "100%"; } if (width.length == 0) { width = "100%"; } str = "<object id=\"FlashContent\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\"  codeBase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0\" quality=\"high\" width=\"" + width + "\" height=\"" + height + "\"> <param name=\"flashvars\" value=\"" + flashvars + "\"/> <param name=\"allowScriptAccess\" value=\"always\">  <param name=\"allowFullScreen\" value=\"true\"/> <param name=\"movie\" value=\"" + path + "\"/> <param name=\"src\" value=\"" + path + "\"/> <param name=\"quality\" value=\"high\"/> <param name=\"wmode\" value=\"transparent\"/> <param name=\"bgcolor\" value=\"#000000\"/> <embed name=\"FlashContent\" src=\"" + path + "\" quality=\"high\" flashvars=\"" + flashvars + "\" allowFullScreen=\"true\"  allowScriptAccess=\"always\" wmode=\"transparent\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"" + width + "\" height=\"" + height + "\"></embed> </object>"; document.write(str); }

function ChangeImage(path, pic_width, swf_height, flashvars) { document.write('<object id="FlashContent" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="' + pic_width + '" height="' + swf_height + '" style="margin: 0px 0px 0px 0px;"> <param name="movie" value="' + path + '"> <param name="quality" value="high"> <param name="wmode" value="transparent"> <param name="FlashVars" value="' + flashvars + '"> <embed style="margin: 0px 0px 0px 0px;" src="' + path + '" FlashVars="' + flashvars + '" quality="high" width="' + pic_width + '" height="' + swf_height + '" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer"> </object>'); }

function $Get(idname) {
    if (document.getElementById) {
        return document.getElementById(idname);
    }
    else if (document.all) {
        return document.all[idname];
    }
    else if (document.layers) {
        return document.layers[idname];
    }
    else {
        return null;
    }
}

function Trim(iStr) {
    while (iStr.charCodeAt(0) <= 32) { iStr = iStr.substr(1); } while (iStr.charCodeAt(iStr.length - 1) <= 32) { iStr = iStr.substr(0, iStr.length - 1); } return iStr;
}

function Left(str, n) {
    if (n <= 0) { return ""; } else if (n > String(str).length) { return str; } else { return String(str).substring(0, n); }
}

function Right(str, n) {
    if (n <= 0) return ""; else if (n > String(str).length) return str; else { var iLen = String(str).length; return String(str).substring(iLen, iLen - n); }
}

function resize_panel(divId, start_pos, end_pos) {
    hMax = 0;
    currentID = "";
    if (divId == "")
        divId = "Panel";
    for (i = start_pos; i <= end_pos; i++) {
        if (document.getElementById(divId + i)) {
            intH = parseInt($("#" + divId + i).height());
        }
        if (intH > hMax) {
            hMax = intH;
            currentID = "#" + divId + i;
        }
    }
    for (i = start_pos; i <= end_pos; i++) {
        if (document.getElementById(divId + i)) {
            intH = parseInt($("#" + divId + i).height());
            if (("#" + divId + i != currentID) && intH < hMax) {
                //$("#Panel" + i + " .price-sale").css({ 'margin-bottom': '18px' });
                $("#" + divId + i).css({ height: hMax });
            }
        }
    }
}

function FloatTopDiv() { startX = document.body.clientWidth - 70, startY = 71; var a = (navigator.appName.indexOf("Netscape") != -1); var b = document; if (document.body.clientWidth < 980) { startX = -77 } function c(e) { var d = b.getElementById ? b.getElementById(e) : b.all ? b.all[e] : b.layers[e]; if (b.layers) { d.style = d } d.sP = function (f, g) { this.style.left = f; this.style.top = g }; d.x = startX; d.y = startY; return d } window.stayTopLeft = function () { if (getBodyWidth() <= 1024) { ftlObj.x = -1000; ftlObj.y = 0; ftlObj.sP(ftlObj.x + "px", ftlObj.y + "px") } else { if (document.documentElement && document.documentElement.scrollTop) { var d = a ? pageYOffset : document.documentElement.scrollTop } else { if (document.body) { var d = a ? pageYOffset : document.body.scrollTop } } if (document.body.scrollTop > 71) { startY = 3 } else { startY = 71 } ftlObj.x = getX(document.getElementById("wrapper")) + document.getElementById("wrapper").offsetWidth + 4; ftlObj.y += (d + startY - ftlObj.y) / 32; ftlObj.sP(ftlObj.x + "px", ftlObj.y + "px") } setTimeout("stayTopLeft()", 1) }; ftlObj = c("divAdvRight"); stayTopLeft() } function FloatTopDiv2() { startX2 = getBodyWidth() - 1024, startY2 = 71; var a = (navigator.appName.indexOf("Netscape") != -1); var c = document; if (getBodyWidth() < 1024) { startX2 = -1000 } function b(e) { var d = c.getElementById ? c.getElementById(e) : c.all ? c.all[e] : c.layers[e]; if (c.layers) { d.style = d } d.sP = function (f, g) { this.style.left = f; this.style.top = g }; d.x = startX2; d.y = startY2; return d } window.stayTopLeft2 = function () { if (getBodyWidth() <= 1024) { ftlObj2.x = -1000; ftlObj2.y = 0; ftlObj2.sP(ftlObj2.x + "px", ftlObj2.y + "px") } else { if (document.documentElement && document.documentElement.scrollTop) { var d = a ? pageYOffset : document.documentElement.scrollTop } else { if (document.body) { var d = a ? pageYOffset : document.body.scrollTop } } if (document.body.scrollTop > 71) { startY2 = 3 } else { startY2 = 71 } ftlObj2.x = getX(document.getElementById("wrapper")) - getElementWidth("divAdvLeft") - 4; ftlObj2.y += (d + startY2 - ftlObj2.y) / 32; ftlObj2.sP(ftlObj2.x + "px", ftlObj2.y + "px") } setTimeout("stayTopLeft2()", 1) }; ftlObj2 = b("divAdvLeft"); stayTopLeft2() } function ShowAdDiv() { var b = document.getElementById("divAdvLeft"); var a = document.getElementById("divAdvRight"); if (getBodyWidth() <= 1024) { b.style.left = -1000; a.style.left = -1000 } FloatTopDiv(); FloatTopDiv2() } function getX(b) { var a = 0; while (b != null) { a += b.offsetLeft; b = b.offsetParent } return a } function getElementWidth(b) { var a = 0; var c = document.getElementById(b); if (typeof (window.innerWidth) == "number") { a = c.innerWidth } a = c.clientWidth; return a } function getBodyWidth() { var a = 0; if (typeof (window.innerWidth) == "number") { a = window.innerWidth } else { if (document.documentElement && document.documentElement.clientWidth) { a = document.documentElement.clientWidth } else { if (document.body && document.body.clientWidth) { a = document.body.clientWidth } } } return a }

function toggle_bb() {
    if ($(".bb_open").css('display') == 'none') {
        $(".bb_open").show();
        $(".bb_close").hide();
        $(".BottomLayer").toggle();
    } else if ($(".bb_close").css('display') == 'none') {
        $(".bb_open").hide();
        $(".bb_close").show();
        $(".BottomLayer").toggle();
    }
}
$(document).ready(function () { ShowAdDiv(); });