
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<title><?php echo $_REQUEST['id']; ?> - Pictures</title>
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
$st = $pdoObj->query("SELECT * FROM images WHERE id='$id' ");
$titleImg=$st->fetch(PDO::FETCH_NUM);


$st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id' ");
$phone = $st->fetch(PDO::FETCH_BOTH);

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
<meta name="Description" content="Samsung Galaxy S21 Ultra 5G Android smartphone. Announced Jan 2021. Features 6.8&Prime;  display, Exynos 2100 chipset, 5000 mAh battery, 512 GB storage, 16 GB RAM, Corning Gorilla Glass Victus.">
<meta name="keywords" content="Samsung Galaxy S21 Ultra 5G,Samsung,Galaxy S21 Ultra 5G,GSM,mobile,phone,cellphone,information,info,specs,specification,opinion,review">

<link rel="canonical" href="https://www.gsmarena.com/samsung_galaxy_s21_ultra_5g-10596.php">

<link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.gsmarena.com/samsung_galaxy_s21_ultra_5g-10596.php">

<link rel="amphtml" href="https://m.gsmarena.com/samsung_galaxy_s21_ultra_5g-ampp-10596.php">


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
            <h1 class="specs-phone-name-title" data-spec="modelname"><?php echo $id; ?></h1>





        </div>




        

<script type="text/javascript" language="javascript">
BECOME_FAN_URL = "";
</script>
<!----------------->

<div class="center-stage light nobg specs-accent" dir="rtl">
  <div class="specs-photo-main">
<a href=samsung_galaxy_s21_ultra_5g-pictures-10596.php><img alt="<?php echo $phone['id']." "; ?>
MORE PICTURES" src='<?php echo $titleImg[1]; ?>'></a>      
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
      </strong> <div data-spec="videopixels-hl"></div></li>


    <li class="help accented help-expansion" >
      <i class="head-icon icon-cpu"></i>
      <strong class="accent accent-expansion"><span data-spec="ramsize-hl"><?php echo $ram; ?>GB</span><span> رم</span></strong> 
      <div data-spec="chipset-hl"></div></li>


    <li class="help accented help-battery">
    <i class="head-icon icon-battery-1"></i>
    
    <strong class="accent accent-battery"><span data-spec="batsize-hl"><?php echo $ph['BatteryCapacity']; ?></span><span>mAh</span></strong><div data-spec="battype-hl">Li-Ion</div></li>
    
  </ul>
</div>


<!---------------->
<div class="article-info-line page-specs light">

<ul class="article-info-meta">

<li class="article-info-meta-link article-info-meta-link-review light large help help-review"><a href="samsung_galaxy_s21_ultra-review-2219.php"><i class="head-icon icon-review"></i>بررسی</a></li>
<li class="article-info-meta-link light"><a href=samsung_galaxy_s21_ultra_5g-price-10596.php><i class="head-icon icon-price"></i>قیمت </a></li>
<li class="article-info-meta-link light"><a href=samsung_galaxy_s21_ultra_5g-pictures-10596.php><i class="head-icon icon-pictures"></i>تصاویر</a></li>
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

<div id="pictures-list">


<script src="https://fdn.gsmarena.com/vv/assets12/js/infinite-pics.js?v=1"></script>

<?php
	echo "<h2>".$titleImg[0]." official images</h2>";
  
  if(isset($titleImg[2])){
	echo "<img src=".$titleImg[2]." border=0 alt=".$titleImg[0].">";
  } 
  if(isset($titleImg[3])){
    echo "<img src=".$titleImg[3]." border=0 alt=".$titleImg[0].">";
  }
  if(isset($titleImg[4])){
    echo "<img src=".$titleImg[4]." border=0 alt=".$titleImg[0].">";
  }
  if(isset($titleImg[5])){
    echo "<img src=".$titleImg[5]." border=0 alt=".$titleImg[0].">";
  }

  ?>
		

		</div>
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
, { 'dimension2': '5' }
	);

</script> -->



</body></html>