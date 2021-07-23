<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "database"; //it must be exist
$charset = "utf8";
$dsn =
"mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
$pdoObj = new PDO($dsn, $username, $password, $opt);
$id=$_REQUEST['id'];

$st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id' ");
$phone = $st->fetch(PDO::FETCH_BOTH);
$st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id' ");
$titleImg=$st->fetch(PDO::FETCH_BOTH);

$st = $pdoObj->query("UPDATE specifications SET view=view+1 WHERE id='$id' ");
$st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id' ");
$ph = $st->fetch(PDO::FETCH_BOTH);

$st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id' ");
$st = $st->fetchAll(PDO::FETCH_BOTH);
$storage="";

foreach($st as $i){
  $storage=$storage.$i['memory']."GB"." / ";
}
$storage=trim($storage," / ");
$st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id' ORDER BY ram ASC");
$st = $st->fetchAll(PDO::FETCH_BOTH);
$ram="";
foreach($st as $i){
  $ram=$ram.$i['ram']."-";
}
$ram=trim($ram,"-");
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<title> <?php echo $phone['id']; ?> - Full phone specifications</title>
<script>
DESKTOP_BASE_URL = "https://www.gsmarena.com/";
ASSETS_BASE_URL  = "https://fdn.gsmarena.com/vv/assets12/";
CDN_BASE_URL = "//fdn.gsmarena.com/";
CDN2_BASE_URL = "//fdn2.gsmarena.com/";
</script>
<!--
<script data-cfasync="false" type="text/javascript">(function(w, d) { var s = d.createElement('script'); s.src = '//delivery.adrecover.com/16425/adRecover.js?ts=1527752433225'; s.type = 'text/javascript'; s.async = true; (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s); })(window, document);</script>
-->
<meta charset="utf-8">
<meta name="viewport" content="width=1060, initial-scale=1.0">
<link rel="stylesheet" href="https://fdn.gsmarena.com/vv/assets12/css/gsmarena.css?v=40">
<!--
<link rel="shortcut icon" href="https://fdn.gsmarena.com/imgroot/static/favicon.ico">
-->






<!--
<script type="text/javascript" src="//dsh7ky7308k4b.cloudfront.net/publishers/gsmarenacom.min.js"></script>

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>

<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
	
	googletag.defineSlot('/8095840/.2_A.35723.3_gsmarena.com_tier1', [[728, 90], [970, 90]], 'div-gpt-ad-gsmarenacom35723').setTargeting('pageid', '3').addService(googletag.pubads());
	
	pgSlot34909 = googletag.defineSlot('/8095840/.2_A.34909.4_gsmarena.com_tier1', [300, 250], 'div-gpt-ad-300x250atfgsmarenadesktop-0').setTargeting('pageid', '3').addService(googletag.pubads());
	
	googletag.defineSlot('/8095840/.2_A.34910.4_gsmarena.com_tier1', [300, 250], 'div-gpt-ad-opt300x250gsmarenadesktop-0').setTargeting('pageid', '3').addService(googletag.pubads());
	
	googletag.defineSlot('/8095840/.2_A.34913.3_gsmarena.com_tier1', [728, 90], 'div-gpt-ad-728x90bagsmarenadesktop-0').setTargeting('pageid', '3').addService(googletag.pubads());
	
	googletag.defineSlot('/8095840/.2_A.35282.4_gsmarena.com_tier1', [300, 250], 'div-gpt-ad-300x250mid-left-mpugsmarenadesktop-0').setTargeting('pageid', '3').addService(googletag.pubads());



	googletag.enableServices();
  });
</script>
-->

<link rel="stylesheet" href="https://fdn.gsmarena.com/vv/assets12/css/specs.css?v=2">
<!--
<link rel="stylesheet" href="https://fdn.gsmarena.com/vv/assets12/css/comments-2.css?v=6">
-->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--
<meta name="Description" content="Samsung Galaxy S21 Ultra 5G Android smartphone. Announced Jan 2021. Features 6.8&Prime;  display, Exynos 2100 chipset, 5000 mAh battery, 512 GB storage, 16 GB RAM, Corning Gorilla Glass Victus.">
<meta name="keywords" content="Samsung Galaxy S21 Ultra 5G,Samsung,Galaxy S21 Ultra 5G,GSM,mobile,phone,cellphone,information,info,specs,specification,opinion,review">

<link rel="canonical" href="https://www.gsmarena.com/samsung_galaxy_s21_ultra_5g-10596.php">

<link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.gsmarena.com/samsung_galaxy_s21_ultra_5g-10596.php">

<link rel="amphtml" href="https://m.gsmarena.com/samsung_galaxy_s21_ultra_5g-ampp-10596.php">

-->
</head>
<body>



<script type="text/javascript" src="https://fdn.gsmarena.com/vv/assets12/js/misc.js?v=9"></script>
<!--
<script language='JavaScript' type='text/javascript'>
function phpads_deliverActiveX(content)
{
	document.write(content);	
}
</script>





<script type="text/javascript" language="javascript">
HISTORY_ITEM_ID = "10596";
HISTORY_ITEM_NAME = "Samsung Galaxy S21 Ultra 5G";
HISTORY_ITEM_URL = "samsung_galaxy_s21_ultra_5g-10596.php";
HISTORY_ITEM_IMAGE = "https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-ultra-5g-.jpg";

</script>

-->
<div id="wrapper" class="l-container">
<div id="outer" class="row">




<div id="body">

<div class="main main-review right l-box col">  

<div class="review-header">  
    <div class="article-info">
      
<style type="text/css">
    .review-header::after {
	background-image:url( https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-ultra-5g-.jpg );
	background-size: 1000%;
	background-position: -866px -7011px;
    }
</style>


        <div class="article-info-line page-specs light border-bottom">
            <div class="blur review-background"></div>
            <h1 class="specs-phone-name-title" data-spec="modelname"><?php echo $phone['id']; ?></h1>



<script>
	var sURLSocialE = "https%3A%2F%2Fwww.gsmarena.com%2Fsamsung_galaxy_s21_ultra_5g-10596.php";
</script>


<ul class="social-share sharrre close">
<li class="help help-social">
  <a class="box btnFb" title="Facebook" id="facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.gsmarena.com%2Fsamsung_galaxy_s21_ultra_5g-10596.php" target="_blank" rel="noopener" onclick="window.open('http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.gsmarena.com%2Fsamsung_galaxy_s21_ultra_5g-10596.php','fbookshare','width=500,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">
    
    <div class="share">
      <i class="head-icon icon-soc-fb2"></i>
    </div>
  </a>
</li>
<li>
  <a class="box btnTw" title="Twitter" id="twitter" href="https://twitter.com/intent/tweet?text=Samsung+Galaxy+S21+Ultra+5G&url=https%3A%2F%2Fwww.gsmarena.com%2Fsamsung_galaxy_s21_ultra_5g-10596.php" target="_blank" rel="noopener" onclick="window.open('https://twitter.com/intent/tweet?text=Samsung+Galaxy+S21+Ultra+5G&url=https%3A%2F%2Fwww.gsmarena.com%2Fsamsung_galaxy_s21_ultra_5g-10596.php','twitshare','width=500,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">
    <div class="share">
      <i class="head-icon icon-soc-twitter2"></i></div>
  </a>
</li>
<li>
    <a href="#"><div class="share share-button"><i class="head-icon icon-share"></i></div></a>
</li>
</ul>             
</div>

<script type="text/javascript" language="javascript">
BECOME_FAN_URL = "";
</script>



<div class="center-stage light nobg specs-accent" dir="rtl">
  <div class="specs-photo-main">
<a href=samsung_galaxy_s21_ultra_5g-pictures-10596.php><img alt="<?php echo $phone['id']." "; ?>
MORE PICTURES" src='<?php echo $titleImg[0]; ?>'></a>      
  </div>
  <ul class="specs-spotlight-features" style="overflow:hidden;">
    <li class="specs-brief pattern right"  >
      <span class="specs-brief-accent"><i class="head-icon icon-launched"></i><span data-spec="released-hl"></span> <?php echo str_replace("موجود در بازار.","",$phone['Stat']); ?> </span><br>
      <span class="specs-brief-accent"><i class="head-icon icon-mobile2"></i><span data-spec="body-hl">
      <?php if ((int)$ph['_weight']==$ph['_weight']) echo (int)$ph['_weight']; else echo $ph['_weight']; echo " گرم"; ?>
      </span></span><br>
      <span class="specs-brief-accent"><i class="head-icon icon-os"></i><span data-spec="os-hl"><?php echo $ph['os']; ?></span></span><br>
      <span class="specs-brief-accent"><i class="head-icon icon-sd-card-0"></i><span data-spec="storage-hl"><?php echo $storage; ?></span></span>  
      
     
    </li>
    
    <li class="help accented help-display">
      <i class="head-icon icon-touch-0"></i>
      <strong class="accent"><span data-spec="displaysize-hl">" <?php echo $ph['displaySize']; ?></span></strong><div data-spec="displayres-hl"><?php echo $ph['displayResolutionX']."x".$ph['displayResolutionY']." پیکسل"; ?></div>
    </li>
    <li class="help accented help-camera">
      <i class="head-icon icon-camera-1"></i>
      <strong class="accent accent-camera"><span data-spec="camerapixels-hl"><?php echo $ph['mainCameraResoloution']; ?></span><span>MP</span>
      </strong> <div data-spec="videopixels-hl">4320p</div></li>


    <li class="help accented help-expansion" >
      <i class="head-icon icon-cpu"></i>
      <strong class="accent accent-expansion"><span data-spec="ramsize-hl"><?php echo $ram; ?>GB</span><span> رم</span></strong> 
      <div data-spec="chipset-hl">Exynos 2100</div></li>


    <li class="help accented help-battery">
    <i class="head-icon icon-battery-1"></i>
    
    <strong class="accent accent-battery"><span data-spec="batsize-hl"><?php echo $ph['BatteryCapacity']; ?></span><span>mAh</span></strong><div data-spec="battype-hl">Li-Ion</div></li>
    
  </ul>
</div>

<div class="article-info-line page-specs light">

<ul class="article-info-meta">

<li class="article-info-meta-link article-info-meta-link-review light large help help-review"><a href="samsung_galaxy_s21_ultra-review-2219.php"><i class="head-icon icon-review"></i>بررسی</a></li>
<li class="article-info-meta-link light"><a href=samsung_galaxy_s21_ultra_5g-price-10596.php><i class="head-icon icon-price"></i>قیمت </a></li>
<li class="article-info-meta-link light">
  <a href="picture.php?id=<?php echo urlencode($id); ?>"><i class="head-icon icon-pictures"></i>تصاویر</a></li>
<li class="article-info-meta-link light"><a href="comp.php?id1=<?php echo urlencode($id); ?>"><i class="head-icon icon-mobile-phone231 icon-compare"></i>مقایسه</a></li>
<li class="article-info-meta-link light" title="Samsung Galaxy S21 Ultra 5G user reviews and opinions"><a href="samsung_galaxy_s21_ultra_5g-reviews-10596.php"><i class="head-icon icon-comment-count"></i>نظرات</a></li>


<br style="clear:both;" />
</ul>
</div>

</div> 			
</div>






<script language="JavaScript">

function helpW( strURL )
{
window.open( 'help.php3?term=' + strURL, '_blank', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=420,height=390' );
}

</script>

<div id="specs-list" dir="rtl">

					
<!--<style type="text/css"> .tr-toggle {  display:none; }  </style>-->
<p data-spec="comment"></p>

<!-- 
    NETWORK
-->

<table cellspacing="0" >

<tr class="tr-hover">
<th rowspan="15" scope="row">شبکه</th>
<td class="ttl"><a href="network-bands.php3">تکنولوژی</a></td>
<td class="nfo" ><a href="#" class=" collapse" data-spec="nettech"></a><?php echo $phone['Technology']; ?></td>


</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="network-bands.php3">2G </a></td>
<td class="nfo" data-spec="net2g"><?php echo $phone['2G bands']; ?></td>
</tr><tr class="tr-toggle" data-spec-optional>

</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="network-bands.php3">  3G </a></td>
<td class="nfo" data-spec="net3g"><?php echo $phone['3G bands']; ?></td>
</tr>
<tr class="tr-toggle" data-spec-optional>

</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="network-bands.php3">4G </a></td>
<td class="nfo" data-spec="net4g"><?php echo $phone['4G bands']; ?></td>
</tr>
<?php 
if(isset($phone['5G bands'])){
  echo "<tr class='tr-toggle'>";
  echo "<td class='ttl'><a href='network-bands.php3'>5G </a></td>";
  echo "<td class='nfo' data-spec='net5g'>".$phone['5G bands']."</td>";
  echo "</tr>";
}
?>
<tr class="tr-toggle">
<td class="ttl"><a href="glossary.php3?term=3g">سرعت</a></td>
<td class="nfo" data-spec="speed"><?php echo $phone['Speed']; ?></td>
</tr>
	

	
</table>


<!-- 
        Launch
-->


<table cellspacing="0">
<tr>
<th rowspan="2" scope="row">انتشار</th>
<td class="ttl"><a href="glossary.php3?term=phone-life-cycle">تاریخ معرفی</a></td>
<td class="nfo" data-spec="year"><?php echo $phone['Announced']; ?></td>
</tr>	
<tr>
<td class="ttl"><a href="glossary.php3?term=phone-life-cycle">وضعیت</a></td>
<td class="nfo" data-spec="status"><?php echo $phone['Stat']; ?></td>
</tr>
</table>

<!-- 
   BODY
-->


<table cellspacing="0" >
<tr >
<th rowspan="6" scope="row">بدنه</th>
<td class="ttl"><a href=# onClick="helpW('h_dimens.htm');">ابعاد</a></td>
<td class="nfo" data-spec="dimensions"  ><?php echo $phone['Dimensions']; ?></td>
</tr><tr>
<td class="ttl"><a href=# onClick="helpW('h_weight.htm');">وزن</a></td>
<td class="nfo" data-spec="weight"><?php if ((int)$ph['_weight']==$ph['_weight']) echo (int)$ph['_weight']; else echo $ph['_weight']; echo " گرم"; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=build">ساختار</a></td>
<td class="nfo" data-spec="build"><?php echo $phone['Build']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=sim">سیم کارت</a></td>
<td class="nfo" data-spec="sim"><?php echo $phone['SIM']; ?></td>
</tr>
<?php
if(isset($phone['Body'])){
  echo "<tr>";
  echo "<td class='ttl'></td>";
  echo "<td class='nfo' data-spec='sim'>".$phone['Body']."</td>";
  echo "</tr>";
}
?>
</table>


<!-- 
   Display
-->


<table cellspacing="0">
<tr>
<th rowspan="5" scope="row">صفحه نمایش</th>
<td class="ttl"><a href="glossary.php3?term=display-type">نوع</a></td>
<td class="nfo" data-spec="displaytype"><?php echo $phone['DisplayType']; ?></td>
</tr>
<tr>
<td class="ttl"><a href=# onClick="helpW('h_dsize.htm');">اندازه</a></td>
<td class="nfo" data-spec="displaysize"><?php echo $phone['Size']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=resolution">وضوح</a></td>
<td class="nfo" data-spec="displayresolution"><?php echo $phone['Resolution']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=screen-protection">فن آوری محافظ </a></td>
<td class="nfo" data-spec="displayprotection"><?php echo $phone['Protection']; ?></td>
</tr>
<?php
if(isset($phone['Display'])){
echo "<tr><td class='ttl'>&nbsp;</td><td class='nfo' data-spec='displayother'>".$phone['Display']."</td></tr>";
}
?>	
</table>

<!-- 
   Platform
-->


<table cellspacing="0">
<tr>
<th rowspan="4" scope="row">پلتفرم</th>
<td class="ttl"><a href="glossary.php3?term=os">سیستم عامل</a></td>
<td class="nfo" data-spec="os"><?php echo $phone['OS']; ?></td>
</tr>
<tr><td class="ttl"><a href="glossary.php3?term=chipset">چیپست</a></td>
<td class="nfo" data-spec="chipset"><?php echo $phone['Chipset']; ?></td>
</tr>


<tr><td class="ttl"><a href="glossary.php3?term=cpu">پردازنده مرکزی</a></td>
<td class="nfo" data-spec="cpu">
    <br>
    <?php echo $phone['CPU']; ?>
</td>
</tr>
<tr><td class="ttl"><a href="glossary.php3?term=gpu">پردازنده گرافیکی</a></td>
<td class="nfo" data-spec="gpu">
  <br>
  <?php echo $phone['GPU']; ?>
  </td>
</tr>
</table>

<!-- 
   Memory
-->


<table cellspacing="0">
<tr>
<th rowspan="5" scope="row">حافظه</th>
<td class="ttl"><a href="glossary.php3?term=memory-card-slot"> کارت حافظه</a></td>

<td class="nfo" data-spec="memoryslot"><?php echo $phone['Cslot']; ?></td></tr>

	

<tr>
<td class="ttl"><a href="glossary.php3?term=dynamic-memory">حافظه  دستگاه</a></td>
<td class="nfo" data-spec="internalmemory"><?php echo $phone['Internal']; ?></td>
</tr>
	
<?php
if(isset($phone['Memory'])){
echo "<tr><td class='ttl'>&nbsp;UFS</td><td class='nfo' data-spec='memoryother'><br />".$phone['Memory']."</td></tr>";
}
?>		
</td>
</tr>
</table>


<!-- 
   Main Camera
-->


	<table cellspacing="0">
	<tr>
	<th rowspan="4" scope="row" class="small-line-height">دوربین اصلی</th>
		<td class="ttl"><a href="glossary.php3?term=camera">لنز (ها)</a></td>
	<td class="nfo" data-spec="cam1modules">
    <?php
    if($ph['cameraNum']==1){
      echo $phone['MainCameraSingle'];
    }
    else if($ph['cameraNum']==2){
      echo $phone['MainCameraDual'];
    }
    else if($ph['cameraNum']==3){
      echo $phone['MainCameraTriple'];
    }
    else if($ph['cameraNum']==4){
      echo $phone['MainCameraQuad'];
    }
    ?>
  </td>
	</tr>
		<tr>
	<td class="ttl"><a href="glossary.php3?term=camera">امکانات</a></td>
	<td class="nfo" data-spec="cam1features"><?php echo $phone['MainCameraFeatures']; ?></td>
	</tr>
		<tr>
	<td class="ttl"><a href="glossary.php3?term=camera">ویدیو</a></td>
	<td class="nfo" data-spec="cam1video"><?php echo $phone['MainCameraVideo']; ?></td>
	</tr>
		</table>


 <!-- 
   Selfie Camera
-->

	<table cellspacing="0">
	<tr>
	<th rowspan="4" scope="row" class="small-line-height">دوربین سلفی</th>
		<td class="ttl"><a href="glossary.php3?term=secondary-camera">لنز (ها)</a></td>
	<td class="nfo" data-spec="cam2modules">
    <?php
    if(isset($phone['SelfieCameraSingle'])){
      echo $phone['SelfieCameraSingle'];
    }
    else{
      echo $phone['SelfieCameraDual'];
    }
    
    ?>
  </td>
	</tr>
  <?php
  if(isset($phone['SelfiecameraFeatures'])){
		echo "<tr>
	<td class='ttl'><a href='glossary.php3?term=secondary-camera'>امکانات</a></td>
	<td class='nfo' data-spec='cam2features'>".$phone['SelfiecameraFeatures']."</td>
	</tr>";
}
?>
<?php
  if(isset($phone['SelfieCameraVideo'])){
		echo "<tr><td class='ttl'><a href='glossary.php3?term=secondary-camera'>ویدیو</a></td>
	<td class='nfo' data-spec='cam2video'>".$phone['SelfieCameraVideo']."</td></tr>";
  }
  ?>
		</table>


<!-- 
   Sound
-->


<table cellspacing="0">
<tr>
<th rowspan="3" scope="row">صدا</th>
<td class="ttl"><a href="glossary.php3?term=loudspeaker">بلندگو</a> </td>
<td class="nfo"><?php echo $phone['Loudspeaker']; ?>
</td>
</tr>

	

<tr>
<td class="ttl"><a href="glossary.php3?term=audio-jack"> جک 3.5 mm</a> </td>
<td class="nfo"><?php echo $phone['jack']; ?></td>
</tr>
	
<?php
if(isset($phone['Sound'])){
echo "<tr><td class='ttl'>&nbsp;</td><td class='nfo' data-spec='optionalother'>
  <br>
".$phone['Sound']."
</td></tr>";
}
?>
</table>


<!-- 
   Comms
-->



<table cellspacing="0">
<tr>
<th rowspan="9" scope="row">ارتباطات</th>
<td class="ttl"><a href="glossary.php3?term=wi-fi">شبکه بی سیم</a></td>
<td class="nfo" data-spec="wlan"><?php echo $phone['WLAN']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=bluetooth">بلوتوث</a></td>
<td class="nfo" data-spec="bluetooth"><?php echo $phone['Bluetooth']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=gps">موقعیت یاب</a></td>
<td class="nfo" data-spec="gps"><?php echo $phone['GPS']; ?></td>
</tr>  
<tr>
<td class="ttl"><a href="glossary.php3?term=nfc">NFC</a></td>
<td class="nfo" data-spec="nfc"><?php echo $phone['NFC']; ?></td>
</tr>
	
	
<tr>
<td class="ttl"><a href="glossary.php3?term=fm-radio">رادیو</a></td>
<td class="nfo" data-spec="radio"><?php echo $phone['Radio']; ?></td>
</tr>
   
<tr>
<td class="ttl"><a href="glossary.php3?term=usb">USB</a></td>
<td class="nfo" data-spec="usb"><?php echo $phone['USB']; ?></td>
</tr>
</table>


<!-- 
   Features
-->


<table cellspacing="0">
<tr>
<th rowspan="9" scope="row">امکانات</th>
<td class="ttl"><a href="glossary.php3?term=sensors">حسگر ها</a></td>
<td class="nfo" data-spec="sensors"><?php echo $phone['Sensors']; ?></td>
</tr>
<!--

echo "<tr><td class='ttl'>&nbsp;</td><td class='nfo' data-spec='featuresother'>";
echo "<br>";
  
echo "<br>";
  
echo  "<br>";
  
  echo "</td></tr>";

-->
</table>

<!-- 
   Battery
-->



<table cellspacing="0">
<tr>
<th rowspan="7" scope="row">باطری</th>
<td class="ttl"><a href="glossary.php3?term=rechargeable-battery-types">نوع</a></td>
<td class="nfo" data-spec="batdescription1"><?php echo $phone['_Type']; ?></td>
</tr>
<?php
if(isset($phone['Charging'])){
echo "<tr><td class='ttl'><a href='glossary.php3?term=battery-charging'>شارژ </a></td>
<td class='nfo'>".$phone['Charging']."</td></tr>";
}
?>

</table>

<!-- 
   Misc
-->



<table cellspacing="0">
<tr>
<th rowspan="4" scope="row">Misc</th>
<td class="ttl"><a href="glossary.php3?term=build">رنگ ها</a></td>
<td class="nfo" data-spec="colors"><?php echo $phone['Colors']; ?></td>
</tr>

<tr>
<td class="ttl"><a href="glossary.php3?term=models">مدل ها</a></td>
<td class="nfo" data-spec="models"><?php echo $phone['Models']; ?></td>
</tr>

<?php
if(isset($ph['minPrice'])){
echo "<tr>
<td class='ttl'><a href='glossary.php3?term=price'>قیمت</a></td>
<td class='nfo' data-spec='price'><a href='samsung_galaxy_s21_ultra_5g-price-10596.php'></a>";
echo " از".($ph['minPrice']/10)." ";
if(isset($ph['maxPrice'])){
  echo " تا ".($ph['maxPrice']/10)." ";
}
echo "میلیون تومان ";
echo "</td>
</tr>";
}
?>
</table>

<!-- 
   Test
-->



<table cellspacing="0">
<tr>
<th rowspan="5" scope="row">آزمون ها </th>
<td class="ttl"><a href="glossary.php3?term=benchmarking">عملکرد</a></td>
<td class="nfo" data-spec="tbench">
	</td>
</tr><tr>

<td class="ttl"><a href="gsmarena_lab_tests-review-751p2.php">صفحه نمایش</a></td>
<td class="nfo">
<a class="noUnd" href="samsung_galaxy_s21_ultra-review-2219p3.php#dt"></a></td>
</tr>
<!--
<tr>

<td class="ttl"><a href="gsmarena_lab_tests-review-751p5.php">دوربین</a></td>
<td class="nfo">
<a class="noUnd" href="piccmp.php3?idType=1&idPhone1=10596&nSuggest=1">عکس</a> / <a class="noUnd" href="vidcmp.php3?idType=3&idPhone1=10596&nSuggest=1">ویدیو</a></td>
</tr>
-->
<?php
if(isset($phone['TestsLoudspeaker'])){
echo "<tr>

<td class='ttl'><a href='gsmarena_lab_tests-review-751p7.php'>بلندگو</a></td>
<td class='nfo'>
<a class='noUnd' href='samsung_galaxy_s21_ultra-review-2219p3.php#lt'></a>".
$phone['TestsLoudspeaker']."
</td>
</tr>";
}

if(isset($ph['BatteryLife'])){
echo "<tr>
<td class='ttl'><a href='gsmarena_lab_tests-review-751p6.php'>عمر باطری</a></td>
<td class='nfo' data-spec='batlife'>
  
<div style='position:relative;'>
<a href='#' onclick='showBatteryPopup(event, 10596); '></a>".$ph['BatteryLife']."<div class='popover top' id='battery-popover' style='display: none;'></div>
</div>
</td>
</tr>";
}
?>
<tr>

</tr></table>



</div>










<div class="article-info-line page-specs light">

<ul class="article-info-meta">

<li class="article-info-meta-link article-info-meta-link-review light large help help-review"><a href="samsung_galaxy_s21_ultra-review-2219.php"><i class="head-icon icon-review"></i>Review</a></li><li class="article-info-meta-link light"><a href=samsung_galaxy_s21_ultra_5g-price-10596.php><i class="head-icon icon-price"></i>Prices</a></li>

<li class="article-info-meta-link light"><a href=samsung_galaxy_s21_ultra_5g-pictures-10596.php><i class="head-icon icon-pictures"></i>Pictures</a></li>
<li class="article-info-meta-link light"><a href=compare.php3?idPhone1=10596><i class="head-icon icon-mobile-phone231 icon-compare"></i>Compare</a></li>

<li class="article-info-meta-link light" title="Samsung Galaxy S21 Ultra 5G user reviews and opinions"><a href="samsung_galaxy_s21_ultra_5g-reviews-10596.php"><i class="head-icon icon-comment-count"></i>Opinions</a></li>


<br style="clear:both;" />
</ul>
</div>



<!-- Price -->


    
<caption >

    <h3 dir="rtl" style="margin-right: 15px; margin-top: 5px;">قیمت</h3>
    
        <!--
            <h3 >قیمت
		<div class="pricing-info">
		    <button class="head-icon icon-info-outline"></button>
		    <div>These are the best offers from our affiliate partners. We may get a commission from qualifying sales.</div>
		</div>
        </h3>    
        -->
    
</caption>
<table class="pricing inline widget"
style="margin-bottom: 30px;">



<tbody>



<tr>
	<td></td>

	<td></td>


	<td></td>

</tr>



<tr>
	<td></td>

	<td></td>


	<td></td>

</tr>



<tr>
	<td>512GB 16GB RAM</td>

	<td><a href="https://www.amazon.com/dp/B0935RTR5T?tag=gsmarena093-20&linkCode=osi&th=1&psc=1" data-click="pricecounter-js.php3?idOffer=125731&idStore=1" target="_blank" rel="noopener noreferrer">&#36;&thinsp;1,199.99</a><img alt="" src="https://fdn.gsmarena.com/imgroot/static/stores/amazon-com1.png"></td>


	<td ><a href="https://www.amazon.de/dp/B08QNDWYMP?tag=gsmarena0ca-21&linkCode=osi&th=1&psc=1" data-click="pricecounter-js.php3?idOffer=125355&idStore=11" target="_blank" rel="noopener noreferrer">&#8364;&thinsp;1,080.54</a><img alt="" src="https://fdn.gsmarena.com/imgroot/static/stores/amazon-de1.png"></td>

</tr>

</tbody>

</table>



<!-- 

<div class="module module-phones module-related">              
<h4 class="section-heading">Similarly priced
<div class="pricing-info">
	<button class="head-icon icon-info-outline"></button>
	<div>Popular recent phones in the same price range as Samsung Galaxy S21 Ultra 5G</div>
</div>
</h4>
 
<ul class="clearfix">
<li><a class="module-phones-link" href="oneplus_9_pro-10806.php"><img src=https://fdn2.gsmarena.com/vv/bigpic/oneplus-9-pro-.jpg alt="OnePlus 9 Pro"><br>OnePlus 9 Pro<span>&#36;&thinsp;859.99</span></a></li><li><a class="module-phones-link" href="samsung_galaxy_s21+_5g-10625.php"><img src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-plus-5g-.jpg alt="Samsung Galaxy S21+ 5G"><br>Samsung Galaxy S21+ 5G<span>&#36;&thinsp;779.99</span></a></li><li><a class="module-phones-link" href="vivo_x60_pro-10797.php"><img src=https://fdn2.gsmarena.com/vv/bigpic/vivo-x60-pro-global-new.jpg alt="vivo X60 Pro"><br>vivo X60 Pro<span>&#36;&thinsp;899.99</span></a></li><li><a class="module-phones-link" href="samsung_galaxy_s20_ultra_5g-10040.php"><img src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-ultra-.jpg alt="Samsung Galaxy S20 Ultra 5G"><br>Samsung Galaxy S20 Ultra 5G<span>&#36;&thinsp;797.99</span></a></li><li><a class="module-phones-link" href="sony_xperia_1_ii-10096.php"><img src=https://fdn2.gsmarena.com/vv/bigpic/sony-xperia-1-II-o.jpg alt="Sony Xperia 1 II"><br>Sony Xperia 1 II<span>&#36;&thinsp;788.00</span></a></li>
</ul>
</div>

 -->
 
<!--

					
<div id="user-comments" class="box s3 nobg">
<h2><a href="samsung_galaxy_s21_ultra_5g-reviews-10596.php">Samsung Galaxy S21 Ultra 5G - user opinions and reviews</a></h2>
						
<div class="user-thread">
<div class="uavatar"><span class="avatar-box" style="background-color: #71a273">M</span></div>
<ul class="uinfo2">
<li class="uname2">Meo</li>
<li class="ulocation">
<i class="head-icon icon-location"></i>
<span title="Encoded anonymized location">G}9</span></li>
<li class="upost"><time>7 hours ago</time></li>
</ul>
<p class="uopin">Hey guys Does anyone use the Exynos version ? How is the battery performance on 120HZ mode ?</p>

<ul class="uinfo">
<li class="ureply">
<span title="Reply to this post">
<a href="postopinion.php3?idPhone=10596&idOpinion=6411311">Reply</a></span>
</li>


</ul>




</div>
 
						
<div class="user-thread">
<div class="uavatar"><span class="avatar-box" style="background-color: #ed81a6">M</span></div>
<ul class="uinfo2">
<li class="uname2">Mahtab</li>
<li class="ulocation">
<i class="head-icon icon-location"></i>
<span title="Encoded anonymized location">sUv</span></li>
<li class="upost"><time>8 hours ago</time></li>
</ul>
<p class="uopin">Becasue of Exynos Junk processor </p>

<ul class="uinfo">
<li class="ureply">
<span title="Reply to this post">
<a href="postopinion.php3?idPhone=10596&idOpinion=6411301">Reply</a></span>
</li>


</ul>




</div>
						
<div class="user-thread">
<div class="uavatar"><span class="avatar-box" style="background-color: #ab69b7">?</span></div>
<ul class="uinfo2">
<li class="uname2">Anonymous</li>
<li class="ulocation">
<i class="head-icon icon-location"></i>
<span title="Encoded anonymized location">pMe</span></li>
<li class="upost"><time>23 hours ago</time></li>
</ul>
<p class="uopin">I have the 2100 International version and based in Germany. The phone itself is 5G capable and has a power saving option to disable it, but it definitely has 5G integration </p>

<ul class="uinfo">
<li class="ureply">
<span title="Reply to this post">
<a href="postopinion.php3?idPhone=10596&idOpinion=6411074">Reply</a></span>
</li>


</ul>




</div>


<div class="sub-footer">
<div class="button-links">
<ul>
								
<li><a class="button" href="samsung_galaxy_s21_ultra_5g-reviews-10596.php">Read all opinions</a></li>
<li><a class="button" href="postopinion.php3?idPhone=10596">Post your opinion</a></li>
</ul>

</div>
<div id="opinions-total">Total user opinions: <b>1975</b></div>
<br class="clear" />
									
						</div>
			


<div class="module module-vid-review">
<iframe width="728" height="410" src="https://www.youtube.com/embed/uRQEyYOzUfQ" frameborder="0" allowfullscreen></iframe>
</div>




			

<div class="adv bottom-728" adonis-marker data-pan-sizes="[[728,90]]">

<div id='div-gpt-ad-728x90bagsmarenadesktop-0' style='height:90px; width:728px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-728x90bagsmarenadesktop-0'); });
</script>
</div>	
	</div>


</div>
</div>
-->
<aside class="sidebar col left">
<!--
<div class="brandmenu-v2 light l-box clearfix">
<p class="pad">
<a href="search.php3" class="pad-single pad-finder">
<i class="head-icon icon-search-right"></i>
<span>Phone finder</span></a>
</p>
<ul>
<li><a href="samsung-phones-9.php">Samsung</a></li><li><a href="apple-phones-48.php">Apple</a></li><li><a href="huawei-phones-58.php">Huawei</a></li><li><a href="nokia-phones-1.php">Nokia</a></li><li><a href="sony-phones-7.php">Sony</a></li><li><a href="lg-phones-20.php">LG</a></li><li><a href="htc-phones-45.php">HTC</a></li><li><a href="motorola-phones-4.php">Motorola</a></li><li><a href="lenovo-phones-73.php">Lenovo</a></li><li><a href="xiaomi-phones-80.php">Xiaomi</a></li><li><a href="google-phones-107.php">Google</a></li><li><a href="honor-phones-121.php">Honor</a></li><li><a href="oppo-phones-82.php">Oppo</a></li><li><a href="realme-phones-118.php">Realme</a></li><li><a href="oneplus-phones-95.php">OnePlus</a></li><li><a href="vivo-phones-98.php">vivo</a></li><li><a href="meizu-phones-74.php">Meizu</a></li><li><a href="blackberry-phones-36.php">BlackBerry</a></li><li><a href="asus-phones-46.php">Asus</a></li><li><a href="alcatel-phones-5.php">Alcatel</a></li><li><a href="zte-phones-62.php">ZTE</a></li><li><a href="microsoft-phones-64.php">Microsoft</a></li><li><a href="vodafone-phones-53.php">Vodafone</a></li><li><a href="energizer-phones-106.php">Energizer</a></li><li><a href="cat-phones-89.php">Cat</a></li><li><a href="sharp-phones-23.php">Sharp</a></li><li><a href="micromax-phones-66.php">Micromax</a></li><li><a href="infinix-phones-119.php">Infinix</a></li><li><a href="ulefone_-phones-124.php">Ulefone</a></li><li><a href="tecno-phones-120.php">Tecno</a></li><li><a href="blu-phones-67.php">BLU</a></li><li><a href="acer-phones-59.php">Acer</a></li><li><a href="wiko-phones-96.php">Wiko</a></li><li><a href="panasonic-phones-6.php">Panasonic</a></li><li><a href="verykool-phones-70.php">verykool</a></li><li><a href="plum-phones-72.php">Plum</a></li></ul>

<p class="pad">
<a href="makers.php3" class="pad-multiple pad-allbrands">
  <i class="head-icon icon-mobile-phone231"></i>
  <span>All brands</span>
</a>
<a href="rumored.php3" class="pad-multiple pad-rumormill">
  <i class="head-icon icon-rumored"></i>
  <span>Rumor mill</span>
</a>
</p>
</div>


<div class="adv banner-mpu" adonis-marker data-pan-sizes="[[300,250]]">
<span class="ad-label">ADVERTISEMENTS</span>	

<div id='div-gpt-ad-300x250atfgsmarenadesktop-0'  style='height:250px; width:300px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-300x250atfgsmarenadesktop-0'); });
</script>
</div>
	</div>

-->

<!-- 

<div class="module price">
    <h4 class="section-heading">Prices</h4>
    <div class="pricing-container">
        <h5><a href="samsung_galaxy_s21_ultra_5g-price-10596.php">Samsung Galaxy S21 Ultra 5G</a>
		    <div class="pricing-info">
			    <button class="head-icon icon-info-outline"></button>
			    <div>These are the best offers from our affiliate partners. We may get a commission from qualifying sales.</div>
			</div>
		</h5>
	<div class="pricing-scroll-container" data-img="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-ultra-5g-.jpg">

<div class="pricing">
	<span>128GB 12GB RAM</span>
	<ul> 
<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/amazon-com1.png" alt="">
<a href="https://www.amazon.com/dp/B094WXLVG5?tag=gsmarena093-20&linkCode=osi&th=1&psc=1" data-description="Samsung Galaxy S21 Ultra 5G, US Version, 128GB, Phantom Silver for Verizon (Renewed)" data-img="https://m.media-amazon.com/images/I/510xZQMm81L._SL500_.jpg" data-click="pricecounter-js.php3?idOffer=122934&idStore=1" target="_blank" rel="noopener">&#36;&thinsp;859.99</a>
</li>

<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/ebay-com2.png" alt="">
<a href="https://rover.ebay.com/rover/1/711-53200-19255-0/1?ff3=2&toolid=10044&campid=5338659500&customid=gsmarena&lgeo=1&vectorid=229466&item=363371233014" data-description="NEW Samsung Galaxy S21 Ultra AT&amp;T UNLOCKED 5G SM-G998U 128GB Phantom Black OEM" data-img="https://thumbs3.ebaystatic.com/m/mjNtGZrlqbiokVIO5xNmu1g/140.jpg" data-click="pricecounter-js.php3?idOffer=125667&idStore=2" target="_blank" rel="noopener">&#36;&thinsp;989.99</a>
</li>

<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/samsung.png" alt="">
<a href="https://www.samsung.com/us/smartphones/galaxy-s21-5g/buy/galaxy-s21-ultra-5g-128gb-unlocked-sm-g998uzsaxaa/?hideDevice=galaxy-s21-ultra-5g" data-description="Samsung Galaxy S21 Ultra 5G 128GB (Unlocked)" data-img="https://image-us.samsung.com/us/smartphones/galaxy-s21/Gallery-images-Palette/P3-Silver/PDP-P3-Silver-lockup-01-1600x1200.jpg?$product-details-zoomed-png$" data-click="pricecounter-js.php3?idOffer=121211&idStore=19" data-clickmate target="_blank" rel="noopener">&#36;&thinsp;1,199.99</a>
</li>

	</ul>
</div>
<div class="pricing">
	<span>256GB 12GB RAM</span>
	<ul> 
<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/wirelessplace1.png" alt="">
<a href="https://www.wirelessplace.com/products/samsung-galaxy-s21-ultra#gsmarena" data-description="Samsung Galaxy S21 Ultra 5G 256GB/12GB RAM (G998B) GSM Unlocked International Version (New) - Phantom Silver" data-img="https://cdn.shopify.com/s/files/1/1126/0898/products/uk-galaxy-s21-ultra-5g-g988-sm-g998bzkdeua-thumb-368887917.png?v=1610658204" data-click="pricecounter-js.php3?idOffer=105732&idStore=14" target="_blank" rel="noopener">&#36;&thinsp;1,049.99</a>
</li>

<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/amazon-com1.png" alt="">
<a href="https://www.amazon.com/dp/B08V8PR9WL?tag=gsmarena093-20&linkCode=osi&th=1&psc=1" data-description="Samsung Galaxy S21 Ultra 5G G9980 256GB 12GB RAM International Version - Phantom Silver" data-img="https://m.media-amazon.com/images/I/516+4DcyxIL._SL500_.jpg" data-click="pricecounter-js.php3?idOffer=107233&idStore=1" target="_blank" rel="noopener">&#36;&thinsp;1,199.99</a>
</li>

<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/ebay-com2.png" alt="">
<a href="https://rover.ebay.com/rover/1/711-53200-19255-0/1?ff3=2&toolid=10044&campid=5338659500&customid=gsmarena&lgeo=1&vectorid=229466&item=393137232445" data-description="Samsung Galaxy S21 Ultra 5G G998B 256GB GSM Unlocked Phone - Phantom Black" data-img="https://thumbs2.ebaystatic.com/m/mQOixjRuEsgDw7_5sHs7yMQ/140.jpg" data-click="pricecounter-js.php3?idOffer=125064&idStore=2" target="_blank" rel="noopener">&#36;&thinsp;1,219.98</a>
</li>

	</ul>
</div>
<div class="pricing">
	<span>512GB 16GB RAM</span>
	<ul> 
<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/amazon-com1.png" alt="">
<a href="https://www.amazon.com/dp/B0935RTR5T?tag=gsmarena093-20&linkCode=osi&th=1&psc=1" data-description="SAMSUNG Galaxy S21 Ultra 5G | Factory Unlocked Android Cell Phone | US Version 5G Smartphone | Pro-Grade Camera, 8K Video, 108MP High Res | 512GB, Phantom Black (SM-G998UZKFXAA) (Renewed)" data-img="https://m.media-amazon.com/images/I/41WTXejvk2S._SL500_.jpg" data-click="pricecounter-js.php3?idOffer=125731&idStore=1" target="_blank" rel="noopener">&#36;&thinsp;1,199.99</a>
</li>

<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/amazon-de1.png" alt="">
<a href="https://www.amazon.de/dp/B08QNDWYMP?tag=gsmarena0ca-21&linkCode=osi&th=1&psc=1" data-description="Samsung Galaxy S21 Ultra SILVER" data-img="https://m.media-amazon.com/images/I/41-cMhW12ML._SL500_.jpg" data-click="pricecounter-js.php3?idOffer=125355&idStore=11" target="_blank" rel="noopener">&#8364;&thinsp;1,080.54</a>
</li>

<li>
<img src="https://fdn.gsmarena.com/imgroot/static/stores/amazon-uk1.png" alt="">
<a href="https://www.amazon.co.uk/dp/B08QN9217H?tag=gsmcom-21&linkCode=osi&th=1&psc=1" data-description="Samsung Galaxy S21 Ultra 5G Smartphone SIM Free Android Mobile Phone Phantom Black 512GB" data-img="https://m.media-amazon.com/images/I/41B+BNm0PDL._SL500_.jpg" data-click="pricecounter-js.php3?idOffer=124224&idStore=4" target="_blank" rel="noopener">&#163;&thinsp;1,388.99</a>
</li>

	</ul>
</div>

</div> 
        <div class="footer">
            <div class="pad">
            	<a href="samsung_galaxy_s21_ultra_5g-price-10596.php" class="show-more">Show all prices</a>
            </div>
        </div>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {
    var _fallbackImage = "";
    function _imageError() {
        image.src = _fallbackImage;
    }
    function hover(event) {
        if (this.hasAttribute("data-no-balloon")) return;

        balloon.style.display = "";
        var src = this.getAttribute("data-img");
        if (src) image.src = src; else _imageError();
        description.innerText = this.getAttribute("data-description");
        
        var bcr = this.getBoundingClientRect();

        var x = bcr.left + window.scrollX + bcr.width;
        var y = bcr.top  + window.scrollY + bcr.height / 2.0;

        balloon.style.left = x + "px";
        balloon.style.top  = y + "px";

        var container = this.parentElement;
        while (container && !container.getAttribute("data-img")) {
            container = container.parentElement;
        }
        if (container) _fallbackImage = container.getAttribute("data-img");
    }
    function leave(event) {
        balloon.style.display = "none";
        image.removeAttribute("src");
    }

    var links = document.querySelectorAll(".module.price .pricing a");
    for (var i = 0; i < links.length; i++) {
        links[i].onmouseover  = hover;
        links[i].onmouseleave = leave;
    }

    var balloon = $gsm.tag("div", {"class": "price-balloon", "style": "display: none;"}, "", document.body);
    var imageContainer = $gsm.tag("div", {"class": "image"}, "", balloon);
    var image = $gsm.tag("img", {}, "", imageContainer);
    var description = $gsm.tag("span", {}, "", balloon);
    image.onerror = _imageError;
});
</script> 


<div class="module module-news-l">
<h4 class="section-heading"><a href="news.php3?idPhoneSearch=10596">Galaxy S21 Ultra 5G in the news</a></h4>
<ul>
<li>
    <a href="newsdetail.php3?idNews=49566&c=10003">
        <img src="https://fdn.gsmarena.com/imgroot/news/21/06/xiaomi-rumored-flagship-with-uwb-under-display-cam/-184x111/gsmarena_000.jpg" alt="">
        <span>Xiaomi rumored to release flagship with UWB and under-display camera  <time>12 Jun 2021</time></span>
    </a>
</li>
<li>
    <a href="newsdetail.php3?idNews=49347&c=10003">
        <img src="https://fdn.gsmarena.com/imgroot/news/21/03/samsung-galaxy-s21-sales-impressive/-184x111/gsmarena_000.jpg" alt="">
        <span>Samsung Galaxy S21 and Galaxy Z Flip 5G are getting the June 2021 security patch already <time>28 May 2021</time></span>
    </a>
</li>
<li>
    <a href="newsdetail.php3?idNews=49283&c=10003">
        <img src="https://fdn.gsmarena.com/imgroot/news/21/05/samsung-isocell-hm3-ofic-video/-184x111/gsmarena_00.jpg" alt="">
        <span>Samsung details its ISOCELL HM3 sensor in new video <time>25 May 2021</time></span>
    </a>
</li>
<li>
    <a href="newsdetail.php3?idNews=49243&c=10003">
        <img src="https://fdn.gsmarena.com/imgroot/news/21/05/counterpoint-q1-smartphone-revenues/-184x111/gsmarena_000.jpg" alt="">
        <span>Counterpoint: iPhone 12 series leads Q1 sales in terms of volume and revenue <time>21 May 2021</time></span>
    </a>
</li>
</ul>   
<p class="more"><a class="more-news-link" href="news.php3?idPhoneSearch=10596">More related articles</a></p>
</div>



    

<style type="text/css">
.checkprice-list::before {
    background: url('https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-ultra-5g-.jpg') no-repeat center center;
  }
</style>


<style type="text/css">
	.checkprice-list::before {
	background-size: 1000% !important;
	background-position:  -357px -2889px;
	}
</style>


<div class="module reviews-xl-snazzy">
<h4 class="section-heading">Samsung Galaxy S21 Ultra 5G reviews</h4>

<a href="samsung_galaxy_s21_ultra-review-2219.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb" src="https://fdn.gsmarena.com/imgroot/reviews/21/samsung-galaxy-s21-ultra/-347x151/header-thumb.jpg" alt="Samsung Galaxy S21 Ultra 5G review">
  <div class="module-review-xl-title">
    <strong>Samsung Galaxy S21 Ultra 5G review</strong>
  </div>
</a>
<a href="camera_test_samsung_galaxy_s21_ultra_vs_note20_ult-review-2227.php" class="module-reviews-xl-link">
  <img class="module-reviews-xl-thumb" src="https://fdn.gsmarena.com/imgroot/reviews/21/samsung-galaxy-note20-ultra-vs-s21-ultra/-347x151/gsmarena_001.jpg" alt="Camera test: S21 Ultra vs. Note20 Ultra">
  <div class="module-review-xl-title">
    <strong>Camera test: Galaxy S21 Ultra vs. Note20 Ultra</strong>
  </div>
</a>

</div>
				
<div class="module module-phones module-related">				
<h4 class="section-heading"><a href="related.php3?idPhone=10596">Related devices</a>
<div class="pricing-info">
	<button class="head-icon icon-info-outline"></button>
	<div>The devices our readers are most likely to research together with Samsung Galaxy S21 Ultra 5G</div>
</div>
</h4>

<ul class="clearfix">
<li><a class="module-phones-link" href="apple_iphone_12_pro_max-10237.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-12-pro-max-.jpg" alt="Phone" /><br>Apple iPhone 12 Pro Max</a></li><li><a class="module-phones-link" href="samsung_galaxy_note20_ultra_5g-10261.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note20-ultra-.jpg" alt="Phone" /><br>Samsung Galaxy Note20 Ultra 5G</a></li><li><a class="module-phones-link" href="xiaomi_mi_11_ultra-10737.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi11-ultra-5g-k1.jpg" alt="Phone" /><br>Xiaomi Mi 11 Ultra</a></li><li><a class="module-phones-link" href="samsung_galaxy_s21_5g-10626.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-5g-r.jpg" alt="Phone" /><br>Samsung Galaxy S21 5G</a></li><li><a class="module-phones-link" href="samsung_galaxy_s21+_5g-10625.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-plus-5g-.jpg" alt="Phone" /><br>Samsung Galaxy S21+ 5G</a></li><li><a class="module-phones-link" href="samsung_galaxy_s20_ultra_5g-10040.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-ultra-.jpg" alt="Phone" /><br>Samsung Galaxy S20 Ultra 5G</a></li>					
</ul>
<p class="more"><a class="more-news-link" href="related.php3?idPhone=10596">More related devices</a></p>					
</div>

				
	<div class="module module-phones module-related phonelist">				
	<h4 class="section-heading"><a href=samsung-phones-9.php>Popular from Samsung</a></h4>

	<ul class="clearfix">
	<li><a class="module-phones-link" href="samsung_galaxy_s21_ultra_5g-10596.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-ultra-5g-.jpg" alt="Phone" /><br>Samsung Galaxy S21 Ultra 5G</a></li><li><a class="module-phones-link" href="samsung_galaxy_a52-10641.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a52-4g.jpg" alt="Phone" /><br>Samsung Galaxy A52</a></li><li><a class="module-phones-link" href="samsung_galaxy_a32-10753.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a32-4g-new.jpg" alt="Phone" /><br>Samsung Galaxy A32</a></li><li><a class="module-phones-link" href="samsung_galaxy_a12-10604.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a12-sm-a125.jpg" alt="Phone" /><br>Samsung Galaxy A12</a></li><li><a class="module-phones-link" href="samsung_galaxy_a72-10469.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a72-4g.jpg" alt="Phone" /><br>Samsung Galaxy A72</a></li><li><a class="module-phones-link" href="samsung_galaxy_a52_5g-10631.php"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a52-5g.jpg" alt="Phone" /><br>Samsung Galaxy A52 5G</a></li>					
	</ul>
						
	<p class="more"><a class="more-news-link" href="samsung-phones-9.php">More from Samsung</a></p>	</div>


</aside>

</div>
</div>
-->

<script type="text/javascript" src="https://fdn.gsmarena.com/vv/assets12/js/specs2.js?v=1"></script>
  <!--

<div id="footer">
 <div class="footer-logo">
     <img src="https://fdn2.gsmarena.com/w/css/logo-gsmarena-com.png" alt="" />
    </div>
    <div id="footmenu">
<p>
<a href="/">Home</a>
<a href="news.php3">News</a>
<a href="reviews.php3">Reviews</a>
<a href="compare.php3">Compare</a>
<a href="network-bands.php3">Coverage</a>
<a href="glossary.php3">Glossary</a>
<a href="faq.php3">FAQ</a>

<a href="rss-news-reviews.php3" class="rss-icon">RSS feed</a></li>
<a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCbLq9tsbo8peV22VxbDAfXA?sub_confirmation=1" class="yt-icon">Youtube</a>
<a target="_blank" rel="noopener" href="https://www.facebook.com/GSMArenacom-189627474421/" class="fb-icon">Facebook</a>
<a target="_blank" rel="noopener" href="https://twitter.com/gsmarena_com" class="tw-icon">Twitter</a>
<a target="_blank" rel="noopener" href="https://www.instagram.com/gsmarenateam/" class="ig-icon">Instagram</a>

</p>

<p>
&copy; 2000-2021 <a href="team.php3">GSMArena.com</a> 
<a href="https://www.gsmarena.com/switch.php3?ver=mobile&ref=MGx%2BcmxqcXhAeH5zfmdmQGwtLkBqc2ttfkAqeDIuLyomKTFvd28%3D">Mobile version</a>
<a target="_blank" rel="noopener" href="https://play.google.com/store/apps/details?id=com.gsmarena.android">Android app</a>
<a href="contact.php3">Contact us</a>
<a href="privacy-policy.php3">Privacy</a> 
<a href="terms.php3">Terms of use</a>

			
</p>			

  </div>
 </div>
 
-->
</div>

<!--
<script type="text/javascript" src="https://fdn.gsmarena.com/vv/assets12/js/autocomplete.js"></script>

<script type="text/javascript" language="javascript">
AUTOCOMPLETE_LIST_URL = "/quicksearch-8089.jpg";
$gsm.addEventListener(document, "DOMContentLoaded", function() 
{
    new Autocomplete( "topsearch-text", "topsearch", true );
}
)
</script>


<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-131096-1', 'auto' );
	ga('set', 'anonymizeIp', true);
	ga('send', 'pageview'
, { 'dimension2': '3' }
	);

</script>

-->

</body></html>