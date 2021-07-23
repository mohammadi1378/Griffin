<?php session_start(); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<title>Compare Samsung Galaxy A22 5G - GSMArena.com</title>
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


if(isset($_REQUEST['id1'])){
    $id1=$_GET['id1'];
    $_SESSION['id1']=$id1;
    $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id1' ");
    $phone1 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id1' ");
    $ph1 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id1' ");
    $titleImg1=$st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id1' ");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $storage1="";

    foreach($st as $i){
    $storage1=$storage1.$i['memory']."GB"." / ";
    }
    $storage1=trim($storage1," / ");
    $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id1' ORDER BY ram ASC");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $ram1="";
    foreach($st as $i){
    $ram1=$ram1.$i['ram']."-";
    }
    $ram1=trim($ram1,"-");
}


else if(isset($_SESSION['id1'])){
  $id1=$_SESSION['id1'];
  $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id1' ");
  $phone1 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id1' ");
  $ph1 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id1' ");
  $titleImg1=$st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id1' ");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $storage1="";

  foreach($st as $i){
  $storage1=$storage1.$i['memory']."GB"." / ";
  }
  $storage1=trim($storage1," / ");
  $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id1' ORDER BY ram ASC");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $ram1="";
  foreach($st as $i){
  $ram1=$ram1.$i['ram']."-";
  }
  $ram1=trim($ram1,"-");
}


if(isset($_SESSION['id2'])){
    $id2=$_SESSION['id2'];
    $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id2' ");
    $phone2 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id2' ");
    $ph2 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id2' ");
    $titleImg2=$st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id2' ");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $storage2="";

    foreach($st as $i){
    $storage2=$storage2.$i['memory']."GB"." / ";
    }
    $storage2=trim($storage2," / ");
    $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id2' ORDER BY ram ASC");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $ram2="";
    foreach($st as $i){
    $ram2=$ram2.$i['ram']."-";
    }
    $ram2=trim($ram2,"-");
}
else if(isset($_GET['id2'])){
  $id2=$_GET['id2'];
  $_SESSION['id2']=$id2;
  $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id2' ");
  $phone2 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id2' ");
  $ph2 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id2' ");
  $titleImg2=$st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id2' ");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $storage2="";

  foreach($st as $i){
  $storage2=$storage2.$i['memory']."GB"." / ";
  }
  $storage2=trim($storage2," / ");
  $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id2' ORDER BY ram ASC");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $ram2="";
  foreach($st as $i){
  $ram2=$ram2.$i['ram']."-";
  }
  $ram2=trim($ram2,"-");
}

if(isset($_SESSION['id3'])){
    $id3=$_SESSION['id3'];
    $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id3' ");
    $phone3 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id3' ");
    $ph3 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id3' ");
    $titleImg3=$st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id3' ");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $storage3="";

    foreach($st as $i){
    $storage3=$storage3.$i['memory']."GB"." / ";
    }
    $storage3=trim($storage3," / ");
    $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id3' ORDER BY ram ASC");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $ram3="";
    foreach($st as $i){
    $ram3=$ram3.$i['ram']."-";
    }
    $ram3=trim($ram3,"-");
}

else if(isset($_GET['id3'])){
  $id3=$_GET['id3'];
  $_SESSION['id3']=$id3;
  $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id3' ");
  $phone3 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id3' ");
  $ph3 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id3' ");
  $titleImg3=$st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id3' ");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $storage3="";

  foreach($st as $i){
  $storage3=$storage3.$i['memory']."GB"." / ";
  }
  $storage3=trim($storage3," / ");
  $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id3' ORDER BY ram ASC");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $ram3="";
  foreach($st as $i){
  $ram3=$ram3.$i['ram']."-";
  }
  $ram3=trim($ram3,"-");
}
if(isset($_SESSION['id4'])){
    $id4=$_SESSION['id4'];
    $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id4' ");
    $phone4 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id4' ");
    $ph4 = $st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id4' ");
    $titleImg4=$st->fetch(PDO::FETCH_BOTH);

    $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id4' ");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $storage4="";

    foreach($st as $i){
    $storage4=$storage4.$i['memory']."GB"." / ";
    }
    $storage4=trim($storage4," / ");
    $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id4' ORDER BY ram ASC");
    $st = $st->fetchAll(PDO::FETCH_BOTH);
    $ram4="";
    foreach($st as $i){
    $ram4=$ram4.$i['ram']."-";
    }
    $ram4=trim($ram4,"-");
}

else if(isset($_GET['id4'])){
  $id4=$_GET['id4'];
  $_SESSION['id4']=$id4;
  $st = $pdoObj->query("SELECT * FROM gsmphone WHERE id='$id4' ");
  $phone4 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT * FROM specifications WHERE id='$id4' ");
  $ph4 = $st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT img_title FROM images WHERE id='$id4' ");
  $titleImg4=$st->fetch(PDO::FETCH_BOTH);

  $st = $pdoObj->query("SELECT DISTINCT memory FROM storage WHERE id='$id4' ");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $storage4="";

  foreach($st as $i){
  $storage4=$storage4.$i['memory']."GB"." / ";
  }
  $storage4=trim($storage4," / ");
  $st = $pdoObj->query("SELECT DISTINCT ram FROM storage WHERE id='$id4' ORDER BY ram ASC");
  $st = $st->fetchAll(PDO::FETCH_BOTH);
  $ram4="";
  foreach($st as $i){
  $ram4=$ram4.$i['ram']."-";
  }
  $ram4=trim($ram4,"-");
}

function passId(){
  $ids=null;
  if(isset($_REQUEST['id1'])){
    $ids="id1=".urldecode($_REQUEST['id1']);
  }
  if(isset($_REQUEST['id2'])){
    if($ida==null){
      $ids="id2=".urldecode($_REQUEST['id2']);
    }
    else{
      $ids=$ids."&id2=".urldecode($_REQUEST['id2']);
    }
  }
  if(isset($_REQUEST['id3'])){
    if($ida==null){
      $ids="id3=".urldecode($_REQUEST['id3']);
    }
    else{
      $ids=$ids."&id3=".urldecode($_REQUEST['id3']);
    }
  }
  if(isset($_REQUEST['id4'])){
    if($ida==null){
      $ids="id4=".urldecode($_REQUEST['id4']);
    }
    else{
      $ids=$ids."&id4=".urldecode($_REQUEST['id4']);
    }
  }
  echo $ids;
  
}

?>





<!-- 
<script type="text/javascript" src="//dsh7ky7308k4b.cloudfront.net/publishers/gsmarenacom.min.js"></script> -->

<!-- <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script> -->
<!-- <script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script> -->

<!-- <script>
  googletag.cmd.push(function() {
	
	googletag.defineSlot('/8095840/.2_A.34912.3_gsmarena.com_tier1', [[468,60],[728,90],[970,90]], 'div-gpt-ad-top728x90gsmarenadesktop-0').setTargeting('pageid', '113').addService(googletag.pubads());
	
	googletag.defineSlot('/8095840/.2_A.38194.3_gsmarena.com_tier1', [[468,60],[728,90],[970,90]], 'div-gpt-ad-gsmarenacom38194').setTargeting('pageid', '113').addService(googletag.pubads());
	
	googletag.defineSlot('/8095840/.2_A.34914.10_gsmarena.com_tier1', [[728,90],[950,90],[960,90],[970,90],[930,180],[750,200],[970,250]], 'div-gpt-ad-bb970x250topgsmarenadesktop-0').setTargeting('pageid', '113').addService(googletag.pubads());



	googletag.enableServices();
  });
</script> -->


<link rel="stylesheet" href="https://fdn.gsmarena.com/vv/assets12/css/specs.css?v=2">
<link rel="stylesheet" href="https://fdn.gsmarena.com/vv/assets12/css/compare.css?v=1">


<!-- <link rel="canonical" href="https://www.gsmarena.com/compare.php3?idPhone1=10873"> -->
<!-- <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.gsmarena.com/compare.php3?idPhone1=10873"> -->
</head>

<body >



<!-- <script type="text/javascript" src="https://fdn.gsmarena.com/vv/assets12/js/misc.js?v=10"></script> -->

<script language='JavaScript' type='text/javascript'>
function phpads_deliverActiveX(content)
{
	document.write(content);	
}
</script>
<!-- <header id="header" class="row">
<div class="wrapper clearfix">
<div class="top-bar clearfix"> -->
<!-- HAMBURGER MENU -->
<!-- <button type="button" role="button" aria-label="Toggle Navigation" class="lines-button minus focused">
<span class="lines"></span>
</button> -->
<!-- /HAMBURGER MENU -->


<!-- 
<object type="image/svg+xml" data="https://fdn.gsmarena.com/vv/assets12/i/logo.svg"><img src="https://fdn.gsmarena.com/vv/assets12/i/logo-fallback.gif" alt="GSMArena.com"></object>
<span>GSMArena.com</span></a> -->
<!-- </div> -->


<!-- 
<div id="nav" role="main">
<form action="res.php3" method="get" id="topsearch">
    <input type="text" placeholder="Search" tabindex="201" accesskey="s" id="topsearch-text" name="sSearch" autocomplete="off" />
    <span id="quick-search-button">
      <input type="submit" value="Go" />
      <i class="head-icon icomoon-liga icon-search-left"></i>
    </span>
    

</form>
</div> -->

<!-- 
<div id="social-connect">
<a href="tipus.php3" class="tip-icon">
  <i class="head-icon icon-tip-us icomoon-liga"></i><br><span class="icon-count">Tip us</span>
</a>
<a href="https://www.facebook.com/GSMArenacom-189627474421/" class="fb-icon" target="_blank" rel="noopener">
  <i class="head-icon icon-soc-fb2 icomoon-liga"></i><br><span class="icon-count">893k</span>
</a>
<a href="https://twitter.com/gsmarena_com" class="tw-icon" target="_blank" rel="noopener">
  <i class="head-icon icon-soc-twitter2 icomoon-liga"></i><br><span class="icon-count">158k</span>
</a>

<a href="https://www.instagram.com/gsmarenateam/" class="ig-icon" target="_blank" rel="noopener">
  <i class="head-icon icon-instagram icomoon-liga"></i>
  <span class="icon-count">95k</span>
</a>
<a href="https://www.youtube.com/channel/UCbLq9tsbo8peV22VxbDAfXA?sub_confirmation=1" class="yt-icon" target="_blank" rel="noopener">
  <i class="head-icon icon-soc-youtube icomoon-liga"></i><br><span class="icon-count">1.3m</span>
</a>
<a href="rss-news-reviews.php3" class="rss-icon">
  <i class="head-icon icon-soc-rss2 icomoon-liga"></i><br><span class="icon-count">RSS</span>
</a>




	<a href="#" onclick="return false;" class="login-icon" id="login-active">
	  <i class="head-icon icon-login"></i><br><span class="icon-count" style="right:4px;">Log in</span>
	</a>

	<span class="tooltip" id="login-popup2">
<form action="login.php3" method="post">
<input type="Hidden" name="sSource" value="MHxwcm9%2BbXoxb3dvLCB2e093cHF6LiIuLycoLA%3D%3D">  
	<p>Login</p>
	<label for="email"></label>
	<input type="email" id="email" name="sEmail" maxlength="50" value="" required="" autocomplete="false">

	<label for="upass"></label>
	<input type="password" id="upass" name="sPassword" placeholder="Your password" maxlength="20" pattern="\S{6,}" required="" autocomplete="false">

	<input class="button" type="submit" value="Log in" id="nick-submit">
</form>
	<a class="forgot" href="forgot.php3">I forgot my password</a>
	</span>
 <a href="register.php3" class="signup-icon no-margin-right"><i class="head-icon icon-user-plus"></i><span class="icon-count">Sign up</span></a>  
              </div>  
           </div>                 
<ul id="menu" class="main-menu-list">
	<li><a href="/">Home</a></li>
	<li><a href="news.php3">News</a></li>
	<li><a href="reviews.php3">Reviews</a></li>
  <li><a href="videos.php3">Videos</a></li>
	<li><a href="news.php3?sTag=Featured">Featured</a></li>
	<li><a href="search.php3">Phone Finder</a></li>
  <li><a href="deals.php3" style="position: relative;">Deals<span class="icon-count" style="top: 3px; right: 5px;">New</span></a></li>
	<li><a href="tools.php3">Tools</a></li>
	<li><a href="network-bands.php3">Coverage</a></li>
	<li><a href="contact.php3">Contact</a></li>                   
</ul>
  </div>
 -->


    
    

<!-- </header>  -->


		
<script type="text/javascript" language="javascript">

$gsm.addEventListener(document, "DOMContentLoaded", function() {
    new Autocomplete("sSearch1", ".candidate-search-1", false);
    new Autocomplete("sSearch2", ".candidate-search-2", false);
    new Autocomplete("sSearch3", ".candidate-search-3", false);
});

</script>

<div id="wrapper" class="l-container">
<div id="outer" class="row">


<!-- <div id="subHeader" class="col">

<div id="topAdv" class="l-box">
<span class="ad-c-label">ADVERTISEMENTS</span>	
/8095840/.2_A.34912.3_gsmarena.com_tier1
<div id='div-gpt-ad-top728x90gsmarenadesktop-0'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-top728x90gsmarenadesktop-0'); });
</script>
</div>
	</div>   
</div>
 -->

<div id="body">

	<div class="page-header clearfix">

	<!-- MAIN BOX -->


<!-- <style>
.review-background {
    background-image: url('https://fdn.gsmarena.com/imgroot/static/headers/compare-hlr.jpg');
    background-size: 100%;
  }  
</style> -->
<!-- <div class="review-header float-right">  
<div class="review-hd review-background">
<div class="article-info">
    <div class="article-info-line border-bottom">
        <div class="blur"></div>

</div>
<div class="center-stage article-accent">
    <div class="article-hgroup">
        
        <br>
        <h1 class="article-info-name">Compare specs</h1>
    </div>
</div>
<div class="article-info-line">
    <div class="blur bottom"></div><ul class="article-info-meta">
  <li class="article-info-meta-link "><a href="piccmp.php3?idType=1&idPhone1=10873">Compare camera samples</a></li> 
  <li class="article-info-meta-link "><a href="vidcmp.php3?idType=3&idPhone1=10873">Compare video samples</a></li> 
  <br style="clear:both;">
</ul>
    </div>
</div>
</div>
</div>          -->




<!-- <aside class="sidebar float-left">

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
</aside>
 -->


</div>  <!-- page header -->







<header class="compare-candidates" dir="rtl" style="left:-170px;" >



<div class="compare-candidate compare-col"  >
  <div class="candidate-search candidate-search-1" >
      <form action="comp.php" method="get">
    <?php  
  $st = $pdoObj->query("SELECT id FROM images");
?>
<select name="id1" id="" style="width:188px">;
<?php 
$n=0;
    foreach($st as $i){
        $z=$i['id'];
        if($z==$_SESSION['id1']){
            echo "<option value='".$z."' selected >".$z."</option>";
        }
        else{
            echo "<option value='".$z."'>".$z."</option>";
        }
    }
echo "</select>";

?>
<br>
<input type="submit" value="تایید">
</form>
  </div>

  <section>
      
  </section>
<h5><a href="samsung_galaxy_a22_5g-10873.php"><span data-spec="modelname"><?php echo $ph1['id']; ?></span></a></h5>

<ul class="compare-link-list">
	
<li title="Samsung Galaxy A22 5G phone specifications"><a href="samsung_galaxy_a22_5g-10873.php">مشخصات</a></li>
<li title="Samsung Galaxy A22 5G user reviews and opinions"><a href="samsung_galaxy_a22_5g-reviews-10873.php">نظرات</a></li>
<li><a href=samsung_galaxy_a22_5g-pictures-10873.php>تصاویر</a></li>
</ul>
<div class="compare-media-wrap float-left clearfix">
<img src="<?php echo $titleImg1[0]; ?>" alt="Samsung Galaxy A22 5G">  

</div>


<div class="compare pricing widget" dir="ltr">
    <p   class="offer">
       128GB 6GB RAM<br>
       <span>&#36;&thinsp;319.99</span>
   
</p>
    <a href="samsung_galaxy_a22_5g-price-10873.php" class="show-more">همه قیمت ها</a>
</div>



</div>


<div class="compare-candidate compare-col">
  <div class="candidate-search candidate-search-1">
  <form action="comp.php" method="get">
    <?php  
  $st = $pdoObj->query("SELECT id FROM images");
?>
<select name="id2" id="" style="width:188px">;
<?php 
    foreach($st as $i){
        $z=$i['id'];
        if($z==$_SESSION['id2']){
            echo "<option value='".$z."' selected >".$z."</option>";
        }
        else{
            echo "<option value='".$z."'>".$z."</option>";
        }
    }
echo "</select>";

?>
<br>
<input type="submit" value="تایید">
</form>
      
  </div>

  <?php
  if(isset($_SESSION['id2'])){
  echo "<h5><a href='samsung_galaxy_a22_5g-10873.php'><span data-spec='modelname'>".$_SESSION['id2']."</span></a></h5>
  
  <ul class='compare-link-list'>
	  
  <li title='Samsung Galaxy A22 5G phone specifications'><a href='samsung_galaxy_a22_5g-10873.php'>مشخصات</a></li>
  <li title='Samsung Galaxy A22 5G user reviews and opinions'><a href='samsung_galaxy_a22_5g-reviews-10873.php'>نظرات</a></li>
  <li><a href=samsung_galaxy_a22_5g-pictures-10873.php>تصاویر</a></li>
  </ul>
  <div class='compare-media-wrap float-left clearfix'>
  <img src='".$titleImg2[0]."' alt='Samsung Galaxy A22 5G'>  
  
  </div>

  
  <div class='compare pricing widget' dir='ltr'>
	  <p   class='offer'>
		 128GB 6GB RAM<br>
		 <span>&#36;&thinsp;319.99</span>
	 
  </p>
	  <a href='samsung_galaxy_a22_5g-price-10873.php' class='show-more'>همه قیمت ها</a>
  </div>";
  
}
?>


</div>



<div class="compare-candidate compare-col">
  <div class="candidate-search candidate-search-1">
  <form action="comp.php" method="get">
    <?php  
  $st = $pdoObj->query("SELECT id FROM images");
?>
<select name="id3" id="" style="width:188px">;
<?php 
    foreach($st as $i){
        $z=$i['id'];
        if($z==$_SESSION['id3']){
            echo "<option value='".$z."' selected >".$z."</option>";
        }
        else{
            echo "<option value='".$z."'>".$z."</option>";
        }
    }
echo "</select>";

?>
<br>
<input type="submit" value="تایید">
</form>
      
  </div>

  <?php
  if(isset($_SESSION['id3'])){
  echo "<h5><a href='samsung_galaxy_a22_5g-10873.php'><span data-spec='modelname'>".$_SESSION['id3']."</span></a></h5>
  
  <ul class='compare-link-list'>
	  
  <li title='Samsung Galaxy A22 5G phone specifications'><a href='samsung_galaxy_a22_5g-10873.php'>مشخصات</a></li>
  <li title='Samsung Galaxy A22 5G user reviews and opinions'><a href='samsung_galaxy_a22_5g-reviews-10873.php'>نظرات</a></li>
  <li><a href=samsung_galaxy_a22_5g-pictures-10873.php>تصاویر</a></li>
  </ul>
  <div class='compare-media-wrap float-left clearfix'>
  <img src='".$titleImg3[0]."' alt='Samsung Galaxy A22 5G'>  
  
  </div>

  
  <div class='compare pricing widget' dir='ltr'>
	  <p   class='offer'>
		 128GB 6GB RAM<br>
		 <span>&#36;&thinsp;319.99</span>
	 
  </p>
	  <a href='samsung_galaxy_a22_5g-price-10873.php' class='show-more'>همه قیمت ها</a>
  </div>";
  
}
?>
  
  </div>
  


<div class="compare-candidate compare-col">
  <div class="candidate-search candidate-search-1">
  <form action="comp.php?" method="get">
    <?php  
  $st = $pdoObj->query("SELECT id FROM images");
?>
<select name="id4" id="" style="width:188px">;
<?php 
    foreach($st as $i){
        $z=$i['id'];
        if($z==$_SESSION['id4']){
            echo "<option value='".$z."' selected >".$z."</option>";
        }
        else{
            echo "<option value='".$z."'>".$z."</option>";
        }
    }
echo "</select>";

?>
<br>
<input type="submit" value="تایید">
</form>
      
  </div>
  <?php
  if(isset($_SESSION['id4'])){
  echo "<h5><a href='samsung_galaxy_a22_5g-10873.php'><span data-spec='modelname'>".$_SESSION['id4']."</span></a></h5>
  
  <ul class='compare-link-list'>
	  
  <li title='Samsung Galaxy A22 5G phone specifications'><a href='samsung_galaxy_a22_5g-10873.php'>مشخصات</a></li>
  <li title='Samsung Galaxy A22 5G user reviews and opinions'><a href='samsung_galaxy_a22_5g-reviews-10873.php'>نظرات</a></li>
  <li><a href=samsung_galaxy_a22_5g-pictures-10873.php>تصاویر</a></li>
  </ul>
  <div class='compare-media-wrap float-left clearfix'>
  <img src='".$titleImg4[0]."' alt='Samsung Galaxy A22 5G'>  
  
  </div>

  
  <div class='compare pricing widget' dir='ltr'>
	  <p   class='offer'>
		 128GB 6GB RAM<br>
		 <span>&#36;&thinsp;319.99</span>
	 
  </p>
	  <a href='samsung_galaxy_a22_5g-price-10873.php' class='show-more'>همه قیمت ها</a>
  </div>";
  
}
?>
  
  </div>
  



</header>



<!-- <style>
.diff-toggle-box { border-bottom: none; }
.compare-candidate.compare-col { padding-bottom: 20px; }
</style> -->
<!-- 
<div class="adv" style="margin: 10px 0 20px 0;">


<div style="height: 90px;">

<div id='div-gpt-ad-gsmarenacom38194'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-gsmarenacom38194'); });
</script>
</div>
</div>
	
</div> -->
<!-- 
<script language="JavaScript">

function helpW( strURL )
{
window.open( 'help.php3?term=' + strURL, '_blank', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=420,height=390' );
}

</script> -->

<div id="specs-list" class="compare-specs-list" dir="rtl">
					


<table cellspacing="0" class="expandable-table">
<tr>
<th rowspan="15" scope="row"><b>شبکه</b></th>
<td class="ttl"><a href="#">تکنولوژی</a></td>
<td class="nfo" data-spec="nettech"><?php echo $phone1['Technology']; ?></td>
<td class="nfo" data-spec="nettech"><?php if(isset($_SESSION['id2'])) echo $phone2['Technology']; ?></td>  
<td class="nfo" data-spec="nettech"><?php if(isset($_SESSION['id3'])) echo $phone3['Technology']; ?></td>  
<td class="nfo" data-spec="nettech"><?php if(isset($_SESSION['id4'])) echo $phone4['Technology']; ?></td>  
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="network-bands.php3">2G </a></td>
<td class="nfo" data-spec="net2g"><?php echo $phone1['2G bands']; ?></td>
<td class="nfo" data-spec="net2g"><?php if(isset($_SESSION['id2'])) echo $phone2['2G bands']; ?></td>  
<td class="nfo" data-spec="net2g"><?php if(isset($_SESSION['id3'])) echo $phone3['2G bands']; ?></td>  
<td class="nfo" data-spec="net2g"><?php if(isset($_SESSION['id4'])) echo $phone4['2G bands']; ?></td>  

</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="network-bands.php3">3G </a></td>
<td class="nfo" data-spec="net3g"><?php echo $phone1['3G bands']; ?></td>
<td class="nfo" data-spec="net3g"><?php if(isset($_SESSION['id2'])) echo $phone2['3G bands']; ?></td>
<td class="nfo" data-spec="net3g"><?php if(isset($_SESSION['id3'])) echo $phone3['3G bands']; ?></td>
<td class="nfo" data-spec="net3g"><?php if(isset($_SESSION['id4'])) echo $phone4['3G bands']; ?></td>
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="network-bands.php3">4G </a></td>
<td class="nfo" data-spec="net4g"><?php echo $phone1['4G bands']; ?></td>
<td class="nfo" data-spec="net4g"><?php if(isset($_SESSION['id2'])) echo $phone2['4G bands']; ?></td>
<td class="nfo" data-spec="net4g"><?php if(isset($_SESSION['id3'])) echo $phone3['4G bands']; ?></td>
<td class="nfo" data-spec="net4g"><?php if(isset($_SESSION['id4'])) echo $phone4['4G bands']; ?></td>
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="network-bands.php3">5G </a></td>
<td class="nfo" data-spec="net5g">
<?php echo $phone1['5G bands']; ?></td>
<td class="nfo" data-spec="net5g">
<?php if(isset($_SESSION['id2'])) echo $phone2['5G bands']; ?></td>
<td class="nfo" data-spec="net5g">
<?php if(isset($_SESSION['id3'])) echo $phone3['5G bands']; ?></td>
<td class="nfo" data-spec="net5g">
<?php if(isset($_SESSION['id4'])) echo $phone4['5G bands']; ?></td>
</tr>
<tr class="tr-toggle">
<td class="ttl"><a href="glossary.php3?term=3g">سرعت</a></td>
<td class="nfo" data-spec="speed"><?php echo $phone1['Speed']; ?></td>
<td class="nfo" data-spec="speed"><?php if(isset($_SESSION['id2'])) echo $phone2['Speed']; ?></td>
<td class="nfo" data-spec="speed"><?php if(isset($_SESSION['id3'])) echo $phone3['Speed']; ?></td>
<td class="nfo" data-spec="speed"><?php if(isset($_SESSION['id4'])) echo $phone4['Speed']; ?></td>
</tr>
	



</table>





<table cellspacing="0">
<tr>
<th rowspan="2" scope="row"><b>انتشار</b></th>
<td class="ttl"><a href="glossary.php3?term=phone-life-cycle">تاریخ معرفی</a></td>
<td class="nfo" data-spec="year"><?php echo $phone1['Announced']; ?></td>
<td class="nfo" data-spec="year"><?php if(isset($_SESSION['id2'])) echo $phone2['Announced']; ?></td>
<td class="nfo" data-spec="year"><?php if(isset($_SESSION['id3'])) echo $phone3['Announced']; ?></td>
<td class="nfo" data-spec="year"><?php if(isset($_SESSION['id4'])) echo $phone4['Announced']; ?></td>
</tr><tr>
<td class="ttl"><a href="glossary.php3?term=phone-life-cycle">وضعیت</a></td>
<td class="nfo" data-spec="status"><?php echo $phone1['Stat']; ?></td>
<td class="nfo" data-spec="status"><?php if(isset($_SESSION['id2'])) echo $phone2['Stat']; ?></td>
<td class="nfo" data-spec="status"><?php if(isset($_SESSION['id3'])) echo $phone3['Stat']; ?></td>
<td class="nfo" data-spec="status"><?php if(isset($_SESSION['id4'])) echo $phone4['Stat']; ?></td>
</tr>
</table>


<table cellspacing="0">
<tr>
<th rowspan="6" scope="row"><b>بدنه</b></th>
<td class="ttl"><a href=# onClick="helpW('h_dimens.htm');">ابعاد</a></td>
<td class="nfo" data-spec="dimensions"><?php echo $phone1['Dimensions']; ?></td>
<td class="nfo" data-spec="dimensions"><?php if(isset($_SESSION['id2'])) echo $phone2['Dimensions']; ?></td>
<td class="nfo" data-spec="dimensions"><?php if(isset($_SESSION['id3'])) echo $phone3['Dimensions']; ?></td>
<td class="nfo" data-spec="dimensions"><?php if(isset($_SESSION['id4'])) echo $phone4['Dimensions']; ?></td>
</tr>
<tr>
<td class="ttl"><a href=# onClick="helpW('h_weight.htm');">وزن</a></td>
<td class="nfo" data-spec="weight"><?php if ((int)$ph1['_weight']==$ph1['_weight']) echo (int)$ph1['_weight']; else echo $ph1['_weight']; echo " گرم"; ?></td>
<td class="nfo" data-spec="weight"><?php if(isset($_SESSION['id2'])){ if ((int)$ph2['_weight']==$ph2['_weight']) echo (int)$ph2['_weight']; else echo $ph2['_weight']; echo " گرم";}?></td>
<td class="nfo" data-spec="weight"><?php if(isset($_SESSION['id3'])){if ((int)$ph3['_weight']==$ph3['_weight']) echo (int)$ph3['_weight']; else echo $ph3['_weight']; echo " گرم";} ?></td>
<td class="nfo" data-spec="weight"><?php if(isset($_SESSION['id4'])){if ((int)$ph4['_weight']==$ph4['_weight']) echo (int)$ph4['_weight']; else echo $ph4['_weight']; echo " گرم";} ?></td>
</tr>
	

<tr>
<td class="ttl"><a href="glossary.php3?term=build">ساختار</a> </td>
<td class="nfo" data-spec="build"><?php echo $phone1['Build']; ?></td>
<td class="nfo" data-spec="build"><?php if(isset($_SESSION['id2'])) echo $phone2['Build']; ?></td>
<td class="nfo" data-spec="build"><?php if(isset($_SESSION['id3'])) echo $phone3['Build']; ?></td>
<td class="nfo" data-spec="build"><?php if(isset($_SESSION['id4'])) echo $phone4['Build']; ?></td>
</tr>
	
<tr>
<td class="ttl"><a href="glossary.php3?term=sim">سیم کارت</a></td>
<td class="nfo" data-spec="sim"><?php echo $phone1['SIM']; ?></td>
<td class="nfo" data-spec="sim"><?php if(isset($_SESSION['id2'])) echo $phone2['SIM']; ?></td>
<td class="nfo" data-spec="sim"><?php if(isset($_SESSION['id3'])) echo $phone3['SIM']; ?></td>
<td class="nfo" data-spec="sim"><?php if(isset($_SESSION['id4'])) echo $phone4['SIM']; ?></td>
</tr>
		
</table>


<table cellspacing="0">
<tr>
<th rowspan="5" scope="row"><b>صفحه نمایش</b></th>
<td class="ttl"><a href="glossary.php3?term=display-type">نوع</a></td>
<td class="nfo" data-spec="displaytype"><?php echo $phone1['DisplayType']; ?></td>
<td class="nfo" data-spec="displaytype"><?php if(isset($_SESSION['id2'])) echo $phone2['DisplayType']; ?></td>
<td class="nfo" data-spec="displaytype"><?php if(isset($_SESSION['id3'])) echo $phone3['DisplayType']; ?></td>
<td class="nfo" data-spec="displaytype"><?php if(isset($_SESSION['id4'])) echo $phone4['DisplayType']; ?></td>
</tr>
<tr>
<td class="ttl"><a href=# onClick="helpW('h_dsize.htm');">اندازه</a></td>
<td class="nfo" data-spec="displaysize"><?php echo $phone1['Size']; ?></td>
<td class="nfo" data-spec="displaysize"><?php if(isset($_SESSION['id2'])) echo $phone2['Size']; ?></td>
<td class="nfo" data-spec="displaysize"><?php if(isset($_SESSION['id3'])) echo $phone3['Size']; ?></td>
<td class="nfo" data-spec="displaysize"><?php if(isset($_SESSION['id4'])) echo $phone4['Size']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=resolution">وضوح</a></td>
<td class="nfo" data-spec="displayresolution"><?php echo $phone1['Resolution']; ?></td>
<td class="nfo" data-spec="displayresolution"><?php if(isset($_SESSION['id2'])) echo $phone2['Resolution']; ?></td>
<td class="nfo" data-spec="displayresolution"><?php if(isset($_SESSION['id3'])) echo $phone3['Resolution']; ?></td>
<td class="nfo" data-spec="displayresolution"><?php if(isset($_SESSION['id4'])) echo $phone4['Resolution']; ?></td>
</tr>

<tr>
<td class="ttl"><a href="glossary.php3?term=resolution">فن آوری محافظ</a></td>
<td class="nfo" data-spec="displayresolution"><?php echo $phone1['Protection']; ?></td>
<td class="nfo" data-spec="displayresolution"><?php if(isset($_SESSION['id2'])) echo $phone2['Protection']; ?></td>
<td class="nfo" data-spec="displayresolution"><?php if(isset($_SESSION['id3'])) echo $phone3['Protection']; ?></td>
<td class="nfo" data-spec="displayresolution"><?php if(isset($_SESSION['id4'])) echo $phone4['Protection']; ?></td>
</tr>

		
</table>


<table cellspacing="0">
<tr>
<th rowspan="4" scope="row"><b>پلتفرم</b></th>
<td class="ttl"><a href="glossary.php3?term=os">سیستم عامل</a></td>
<td class="nfo" data-spec="os"><?php echo $phone1['OS']; ?></td>
<td class="nfo" data-spec="os"><?php if(isset($_SESSION['id2'])) echo $phone2['OS']; ?></td>
<td class="nfo" data-spec="os"><?php if(isset($_SESSION['id3'])) echo $phone3['OS']; ?></td>
<td class="nfo" data-spec="os"><?php if(isset($_SESSION['id4'])) echo $phone4['OS']; ?></td>
</tr>
<tr><td class="ttl"><a href="glossary.php3?term=chipset">چیپست</a></td>
<td class="nfo" data-spec="chipset"><?php echo $phone1['Chipset']; ?></td>
<td class="nfo" data-spec="chipset"><?php if(isset($_SESSION['id2'])) echo $phone2['Chipset']; ?></td>
<td class="nfo" data-spec="chipset"><?php if(isset($_SESSION['id3'])) echo $phone3['Chipset']; ?></td>
<td class="nfo" data-spec="chipset"><?php if(isset($_SESSION['id4'])) echo $phone4['Chipset']; ?></td>
</tr>
<tr><td class="ttl"><a href="glossary.php3?term=cpu">پردازنده مرکزی</a></td>
<td class="nfo" data-spec="cpu"><?php echo $phone1['CPU']; ?></td>
<td class="nfo" data-spec="cpu"><?php if(isset($_SESSION['id2'])) echo $phone2['CPU']; ?></td>
<td class="nfo" data-spec="cpu"><?php if(isset($_SESSION['id3'])) echo $phone3['CPU']; ?></td>
<td class="nfo" data-spec="cpu"><?php if(isset($_SESSION['id4'])) echo $phone4['CPU']; ?></td>
</tr>
<tr><td class="ttl"><a href="glossary.php3?term=gpu">پردازنده گرافیکی</a></td>
<td class="nfo" data-spec="gpu"><?php echo $phone1['GPU']; ?></td>
<td class="nfo" data-spec="gpu"><?php if(isset($_SESSION['id2'])) echo $phone2['GPU']; ?></td>
<td class="nfo" data-spec="gpu"><?php if(isset($_SESSION['id3'])) echo $phone3['GPU']; ?></td>
<td class="nfo" data-spec="gpu"><?php if(isset($_SESSION['id4'])) echo $phone4['GPU']; ?></td>
</tr>
</table>


<table cellspacing="0">
<tr>
<th rowspan="5" scope="row"><b>حافظه</b></th>
<td class="ttl"><a href="glossary.php3?term=memory-card-slot">کارت حافظه</a></td>
<td class="nfo" data-spec="memoryslot"><?php echo $phone1['Cslot']; ?></td>
<td class="nfo" data-spec="memoryslot"><?php if(isset($_SESSION['id2'])) echo $phone2['Cslot']; ?></td>
<td class="nfo" data-spec="memoryslot"><?php if(isset($_SESSION['id3'])) echo $phone3['Cslot']; ?></td>
<td class="nfo" data-spec="memoryslot"><?php if(isset($_SESSION['id4'])) echo $phone4['Cslot']; ?></td>
</tr>

	

<tr>
<td class="ttl"><a href="glossary.php3?term=dynamic-memory">حافظه دستگاه</a></td>
<td class="nfo" data-spec="internalmemory"><?php echo $phone1['Internal']; ?></td>
<td class="nfo" data-spec="internalmemory"><?php if(isset($_SESSION['id2'])) echo $phone2['Internal']; ?></td>
<td class="nfo" data-spec="internalmemory"><?php if(isset($_SESSION['id3'])) echo $phone3['Internal']; ?></td>
<td class="nfo" data-spec="internalmemory"><?php if(isset($_SESSION['id4'])) echo $phone4['Internal']; ?></td>
</tr>
	

</table>


<table cellspacing="0">
<tr>
<th rowspan="3" scope="row" class="small-line-height"><b>دوربین اصلی </b></th>
<td class="ttl"><a href="glossary.php3?term=camera">لنز ها</a></td>
<td class="nfo" data-spec="cam1modules"><?php
    if($ph1['cameraNum']==1){
      echo $phone1['MainCameraSingle'];
    }
    else if($ph1['cameraNum']==2){
      echo $phone1['MainCameraDual'];
    }
    else if($ph1['cameraNum']==3){
      echo $phone1['MainCameraTriple'];
    }
    else if($ph1['cameraNum']==4){
      echo $phone1['MainCameraQuad'];
    }
    ?></td>
<td class="nfo" data-spec="cam1modules"><?php
if(isset($_SESSION['id2'])){
    if($ph2['cameraNum']==1){
      echo $phone2['MainCameraSingle'];
    }
    else if($ph2['cameraNum']==2){
      echo $phone2['MainCameraDual'];
    }
    else if($ph2['cameraNum']==3){
      echo $phone2['MainCameraTriple'];
    }
    else if($ph2['cameraNum']==4){
      echo $phone2['MainCameraQuad'];
    }}
    ?></td>
<td class="nfo" data-spec="cam1modules"><?php
if(isset($_SESSION['id3'])){
    if($ph3['cameraNum']==1){
      echo $phone3['MainCameraSingle'];
    }
    else if($ph3['cameraNum']==2){
      echo $phone3['MainCameraDual'];
    }
    else if($ph3['cameraNum']==3){
      echo $phone3['MainCameraTriple'];
    }
    else if($ph3['cameraNum']==4){
      echo $phone3['MainCameraQuad'];
    }}
    ?></td>
<td class="nfo" data-spec="cam1modules"><?php
if(isset($_SESSION['id4'])){
    if($ph4['cameraNum']==1){
      echo $phone4['MainCameraSingle'];
    }
    else if($ph4['cameraNum']==2){
      echo $phone4['MainCameraDual'];
    }
    else if($ph4['cameraNum']==3){
      echo $phone4['MainCameraTriple'];
    }
    else if($ph4['cameraNum']==4){
      echo $phone4['MainCameraQuad'];
    }}
    ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=camera">ویژگی ها</a></td>
<td class="nfo" data-spec="cam1features"><?php echo $phone1['MainCameraFeatures']; ?></td>
<td class="nfo" data-spec="cam1features"><?php if(isset($_SESSION['id2'])) echo $phone2['MainCameraFeatures']; ?></td>
<td class="nfo" data-spec="cam1features"><?php if(isset($_SESSION['id3'])) echo $phone3['MainCameraFeatures']; ?></td>
<td class="nfo" data-spec="cam1features"><?php if(isset($_SESSION['id4'])) echo $phone4['MainCameraFeatures']; ?></td>
</tr>

<tr>
<td class="ttl"><a href="glossary.php3?term=camera">ویدیو</a></td>
<td class="nfo" data-spec="cam1video"><?php echo $phone1['MainCameraVideo']; ?></td>
<td class="nfo" data-spec="cam1video"><?php if(isset($_SESSION['id2'])) echo $phone2['MainCameraVideo']; ?></td>
<td class="nfo" data-spec="cam1video"><?php if(isset($_SESSION['id3'])) echo $phone3['MainCameraVideo']; ?></td>
<td class="nfo" data-spec="cam1video"><?php if(isset($_SESSION['id4'])) echo $phone4['MainCameraVideo']; ?></td>

</tr>
</table>

<table cellspacing="0">
<tr>
<th rowspan="2" scope="row" class="small-line-height"><b>دوربین سلفی</b></th>
<td class="ttl"><a href="glossary.php3?term=camera">لنز ها</a></td>
<td class="nfo" data-spec="cam2modules"><?php
    if(isset($phone1['SelfieCameraSingle'])){
      echo $phone1['SelfieCameraSingle'];
    }
    else{
      echo $phone1['SelfieCameraDual'];
    }
    
    ?></td>
<td class="nfo" data-spec="cam2modules"><?php
  if(isset($_SESSION['id2'])){
    if(isset($phone2['SelfieCameraSingle'])){
      echo $phone2['SelfieCameraSingle'];
    }
    else{
      echo $phone2['SelfieCameraDual'];
    }
  }
    ?></td>
<td class="nfo" data-spec="cam2modules"><?php
if(isset($_SESSION['id3'])){
    if(isset($phone3['SelfieCameraSingle'])){
      echo $phone3['SelfieCameraSingle'];
    }
    else{
      echo $phone3['SelfieCameraDual'];
    }
  }
    ?></td>
<td class="nfo" data-spec="cam2modules"><?php
if(isset($_SESSION['id4'])){
    if(isset($phone4['SelfieCameraSingle'])){
      echo $phone4['SelfieCameraSingle'];
    }
    else{
      echo $phone4['SelfieCameraDual'];
    }
  }
    ?></td>
</tr>

<tr>
<td class="ttl"><a href="glossary.php3?term=camera">ویدیو</a></td>
<td class="nfo" data-spec="cam2video"><?php echo $phone1['SelfieCameraVideo']; ?></td>
<td class="nfo" data-spec="cam2video"><?php if(isset($_SESSION['id2'])) echo $phone2['SelfieCameraVideo']; ?></td>
<td class="nfo" data-spec="cam2video"><?php if(isset($_SESSION['id3'])) echo $phone3['SelfieCameraVideo']; ?></td>
<td class="nfo" data-spec="cam2video"><?php if(isset($_SESSION['id4'])) echo $phone4['SelfieCameraVideo']; ?></td>
</tr>
</table>


<table cellspacing="0">
<tr>
<th rowspan="3" scope="row"><b> صدا </b></th>
<td class="ttl"><a href="glossary.php3?term=loudspeaker">بلندگو</a> </td>
<td class="nfo"><?php echo $phone1['Loudspeaker']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id2'])) echo $phone2['Loudspeaker']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id3'])) echo $phone3['Loudspeaker']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id4'])) echo $phone4['Loudspeaker']; ?></td>
</tr>


<tr>
<td class="ttl"><a href="glossary.php3?term=audio-jack">جک 3.5 میلی متری</a> </td>
<td class="nfo"><?php echo $phone1['jack']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id2'])) echo $phone2['jack']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id3'])) echo $phone3['jack']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id4'])) echo $phone4['jack']; ?></td>
</tr>
	


	
</table>


<table cellspacing="0">
<tr>
<th rowspan="9" scope="row"><b> ارتباطات </b></th>

<td class="ttl"><a href="glossary.php3?term=wi-fi">شبکه بی سیم</a></td>
<td class="nfo" data-spec="wlan"><?php echo $phone1['WLAN']; ?></td>
<td class="nfo" data-spec="wlan"><?php if(isset($_SESSION['id2'])) echo $phone2['WLAN']; ?></td>
<td class="nfo" data-spec="wlan"><?php if(isset($_SESSION['id3'])) echo $phone3['WLAN']; ?></td>
<td class="nfo" data-spec="wlan"><?php if(isset($_SESSION['id4'])) echo $phone4['WLAN']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=bluetooth">بلوتوث</a></td>
<td class="nfo" data-spec="bluetooth"><?php echo $phone1['Bluetooth']; ?></td>
<td class="nfo" data-spec="bluetooth"><?php if(isset($_SESSION['id2'])) echo $phone2['Bluetooth']; ?></td>
<td class="nfo" data-spec="bluetooth"><?php if(isset($_SESSION['id3'])) echo $phone3['Bluetooth']; ?></td>
<td class="nfo" data-spec="bluetooth"><?php if(isset($_SESSION['id4'])) echo $phone4['Bluetooth']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=gps">موقعیت یاب</a></td>
<td class="nfo" data-spec="gps"><?php echo $phone1['GPS']; ?></td>
<td class="nfo" data-spec="gps"><?php if(isset($_SESSION['id2'])) echo $phone2['GPS']; ?></td>
<td class="nfo" data-spec="gps"><?php if(isset($_SESSION['id3'])) echo $phone3['GPS']; ?></td>
<td class="nfo" data-spec="gps"><?php if(isset($_SESSION['id4'])) echo $phone4['GPS']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=nfc">NFC</a> </td>
<td class="nfo" data-spec="nfc"><?php echo $phone1['NFC']; ?></td>
<td class="nfo" data-spec="nfc"><?php if(isset($_SESSION['id2'])) echo $phone2['NFC']; ?></td>
<td class="nfo" data-spec="nfc"><?php if(isset($_SESSION['id3'])) echo $phone3['NFC']; ?></td>
<td class="nfo" data-spec="nfc"><?php if(isset($_SESSION['id4'])) echo $phone4['NFC']; ?></td>
</tr>
	<!--
<tr>
<td class="ttl"><a href="glossary.php3?term=irda"> مادون قرمز</a></td>
<td class="nfo"></td>
<td class="nfo"></td>
<td class="nfo"></td>
<td class="nfo"></td>
</tr>
-->
<tr>
<td class="ttl"><a href="glossary.php3?term=fm-radio">رادیو</a></td>
<td class="nfo" data-spec="radio"><?php echo $phone1['Radio']; ?></td>
<td class="nfo" data-spec="radio"><?php if(isset($_SESSION['id2'])) echo $phone2['Radio']; ?></td>
<td class="nfo" data-spec="radio"><?php if(isset($_SESSION['id3'])) echo $phone3['Radio']; ?></td>
<td class="nfo" data-spec="radio"><?php if(isset($_SESSION['id4'])) echo $phone4['Radio']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=usb">USB</a></td>
<td class="nfo" data-spec="usb"><?php echo $phone1['USB']; ?></td>
<td class="nfo" data-spec="usb"><?php if(isset($_SESSION['id2'])) echo $phone2['USB']; ?></td>
<td class="nfo" data-spec="usb"><?php if(isset($_SESSION['id3'])) echo $phone3['USB']; ?></td>
<td class="nfo" data-spec="usb"><?php if(isset($_SESSION['id4'])) echo $phone4['USB']; ?></td>
</tr>
</table>


<table cellspacing="0">
<tr>
<th rowspan="6" scope="row"><b> امکانات </b></th>

<td class="ttl"><a href="glossary.php3?term=sensors">حسگر ها</a></td>
<td class="nfo" data-spec="sensors"><?php echo $phone1['Sensors']; ?></td>
<td class="nfo" data-spec="sensors"><?php if(isset($_SESSION['id2'])) echo $phone2['Sensors']; ?></td>
<td class="nfo" data-spec="sensors"><?php if(isset($_SESSION['id3'])) echo $phone3['Sensors']; ?></td>
<td class="nfo" data-spec="sensors"><?php if(isset($_SESSION['id4'])) echo $phone4['Sensors']; ?></td>
</tr>

	 

 	

	

</table>


<table cellspacing="0">
<tr>
<th rowspan="5" scope="row"><b> باطری </b></th>
<td class="ttl"><a href="glossary.php3?term=rechargeable-battery-types">نوع</a></td>
<td class="nfo" data-spec="batdescription1"><?php echo $phone1['_Type']; ?></td>
<td class="nfo" data-spec="batdescription1"><?php if(isset($_SESSION['id2'])) echo $phone2['_Type']; ?></td>
<td class="nfo" data-spec="batdescription1"><?php if(isset($_SESSION['id3'])) echo $phone3['_Type']; ?></td>
<td class="nfo" data-spec="batdescription1"><?php if(isset($_SESSION['id4'])) echo $phone4['_Type']; ?></td>
</tr>
<tr>
<td class="ttl"><a href="glossary.php3?term=battery-charging">شارژ</a></td>
<td class="nfo"><?php echo $phone1['Charging']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id2'])) echo $phone2['Charging']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id3'])) echo $phone3['Charging']; ?></td>
<td class="nfo"><?php if(isset($_SESSION['id4'])) echo $phone4['Charging']; ?></td>
</tr>
</table>


<table cellspacing="0">
<tr>
<th rowspan="6" scope="row">Misc</th>
<!--
<tr>
<td class="ttl"><a href="glossary.php3?term=build">رنگ ها</a></td>
<td class="nfo" data-spec="colors"></td>
<td class="nfo" data-spec="colors"></td>
<td class="nfo" data-spec="colors"></td>
<td class="nfo" data-spec="colors"></td>
</tr>
-->
<tr>
<td class="ttl"><a href="glossary.php3?term=models">مدل ها</a></td>
<td class="nfo" data-spec="models"><?php echo $phone1['Models']; ?></td>
<td class="nfo" data-spec="models"><?php if(isset($_SESSION['id2'])) echo $phone2['Models']; ?></td>
<td class="nfo" data-spec="models"><?php if(isset($_SESSION['id3'])) echo $phone3['Models']; ?></td>
<td class="nfo" data-spec="models"><?php if(isset($_SESSION['id4'])) echo $phone4['Models']; ?></td>
</tr><tr>

<td class="ttl"><a href="glossary.php3?term=price">قیمت</a></td>
<td class="nfo" data-spec="price"><?php 
echo " از".($ph1['minPrice']/10)." ";
if(isset($ph1['maxPrice'])){
  echo " تا ".($ph1['maxPrice']/10)." ";
}
echo "میلیون تومان "; ?></td>
<td class="nfo" data-spec="price"><?php
if(isset($_SESSION['id2'])){
echo " از".($ph2['minPrice']/10)." ";
if(isset($ph2['maxPrice'])){
  echo " تا ".($ph2['maxPrice']/10)." ";
}
echo "میلیون تومان "; }?></td>
<td class="nfo" data-spec="price"><?php
if(isset($_SESSION['id3'])){
echo " از".($ph3['minPrice']/10)." ";
if(isset($ph3['maxPrice'])){
  echo " تا ".($ph3['maxPrice']/10)." ";
}
echo "میلیون تومان ";} ?></td>
<td class="nfo" data-spec="price"><?php
if(isset($_SESSION['id4'])){
echo " از".($ph4['minPrice']/10)." ";
if(isset($ph4['maxPrice'])){
  echo " تا ".($ph4['maxPrice']/10)." ";
}
echo "میلیون تومان "; }?></td>
</tr></table>





</div>
	





</div><!-- id body -->
</div><!-- id outer -->



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
<a href="https://www.gsmarena.com/switch.php3?ver=mobile&ref=MHxwcm9%2BbXoxb3dvLCB2e093cHF6LiIuLycoLA%3D%3D">Mobile version</a>
<a target="_blank" rel="noopener" href="https://play.google.com/store/apps/details?id=com.gsmarena.android">Android app</a>
<a href="contact.php3">Contact us</a>
<a href="privacy-policy.php3">Privacy</a> 
<a href="terms.php3">Terms of use</a>

			
</p>			

  </div>
 </div>
 
  -->
<!-- </div> -->


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
, { 'dimension2': '113' }
	);

</script>



<script type="text/javascript" src="https://fdn.gsmarena.com/vv/assets12/js/specs2.js?v=1"></script>
</body></html>