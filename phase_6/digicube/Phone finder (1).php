
<!doctype html>
<head>
 
<title>digicubes</title>

<!--
    <script data-cfasync="false" type="text/javascript">(function(w, d) { var s = d.createElement('script'); s.src = '//delivery.adrecover.com/16425/adRecover.js?ts=1527752433225'; s.type = 'text/javascript'; s.async = true; (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s); })(window, document);</script>
-->
<meta charset="utf-8">
<meta name="viewport" content="width=1060, initial-scale=1.0">

<link rel="stylesheet" href="https://fdn.gsmarena.com/vv/assets12/css/gsmarena.css?v=40">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://fdn.gsmarena.com/vv/assets12/js/misc.js?v=10"></script>

<link rel="stylesheet" href="https://fdn.gsmarena.com/vv/assets12/css/phonefinder.css?v=3">
<!--<link rel="stylesheet" href="testCss.css">-->
<style>
	input[type=button], input[type=submit], input[type=reset] {
  background-color: red;
  border: none;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>
<body>
  	<script src="https://fdn.gsmarena.com/vv/assets12/js/bootstrap-select.js"></script>
	<script type="text/javascript" src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<script src="https://fdn.gsmarena.com/vv/assets12/js/jquery.nouislider.min.js"></script>
	<script type="text/javascript">

		var osVersionNames = {
			1: [],
			2: [["Android 11", "Android 11"],
			["Android 10", "Android 10"],
			["Android 9.0 Pie", "Android 9.0 Pie"],
			["Android 8.1 Oreo", "Android 8.1 Oreo"],
			["Android 8.0 Oreo", "Android 8.0 Oreo"],
			["Android 7.1 Nougat", "Android 7.1 Nougat"],
			 ["Android 7.0 Nougat", "Android 7.0 Nougat"],
			  ["Android 6.0 Marshmallow", "Android 6.0 Marshmallow"],
			   ["Android 5.1 Lollipop", "Android 5.1 Lollipop"],
			    ["Android 5.0 Lollipop", "Android 5.0 Lollipop"], 
				["Android 4.4 KitKat", "Android 4.4 KitKat"],
				["Android 4.1-4.3 Jelly Bean", "Android 4.1-4.3 Jelly Bean"],
				["Android 4.0 Ice Cream Sandwich", "Android 4.0 Ice Cream Sandwich"]],
			3: [["iOS 13", "iOS 13"],
			 ["iOS 12", "iOS 12"],
			  ["iOS 11", "iOS 11"],
			   ["iOS 10", "iOS 10"],
			   ["iOS 9", "iOS 9"],
			   ["iOS 8", "iOS 8"],
			   ["iOS 7", "iOS 7"]]
		};
	</script>
	<?php
	
	?>

<script src="java.js?v=2"></script>

	<div id="wrapper" class="l-container" >
		<div id="outer" class="row" >
  			<div id="body"class="main-column-full" >
    			<form action="results.php" method="get" class="phonefinder row tabs-phone-highlight">
      				<div class="row" >
        				<span dir="rtl"><h3 class="phonefinder-title">عمومی</h3></span>
						<div class="row">
		 					<div class="l-col l-col-1-2 mr10 right" style="margin-right: 0;">
								
							<label for="Makers" class="" style="position:absolute; margin-right: 30px; right: 0; text-align: right; "> : برندهای انتخاب شده </label>
						
								<span>
							<select name="Makers" multiple class="phonefinder-select" 			data-live-search="true" title=" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;برند" style="width: 100%;">
        
								<option value="Apple" style="float: right; padding-right: 0">اپل</option>
								<option value="Samsung" style="float: right; padding-right: 0">سامسونگ</option>
								<option value="Xiaomi" style="float: right; padding-right: 0">شیائومی</option>
								
							</select>
						</span>
					
       
		  					</div>
		  					<div class="l-col l-col-1-2 framed p10">
								<span class="label float-right" style="padding-left: 9px;">:سال عرضه</span>
								<div class="phonefinder-slider phonefinder-slider-year l-col-3-4">
									<span class="slider-value left" id="skipval-year-min" name="YearMin"></span>
									<span class="slider-value right" id="skipval-year-max" name="YearMax"></span>
								</div>
			
								<script type="text/javascript">
									makeSlider(".phonefinder-slider-year", "#skipval-year-min", "#skipval-year-max", 2000, 2021, 1, "");
		
								</script>

		  					</div>
						</div>
						<div class="row">
							
		  <div class="l-col l-col-1-2  right">
			<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
			<label for="" >: وضعیت دسترسی</label>
		</span>
			<select name="Availabilities" multiple class="phonefinder-select" title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وضعیت دسترسی">
				<option value=1 style="float: right; padding-right: 0">موجود در بازار</option>
				<option value=2 style="float: right; padding-right: 0">به زودی</option>
				<option value=3 style="float: right; padding-right: 0">توقف تولید</option>
				<option value=4 style="float: right; padding-right: 0">شایعه شده</option>       
			</select>
		  </div>
		
		  <div class="l-col l-col-1-2 framed p10">
			<span class="label float-right" style="padding-left: 40px;">:قیمت</span>
			<div class="phonefinder-slider phonefinder-slider-price l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-price-min" name="PriceMin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-price-max" name="PriceMax" dir="rtl"></span>
			</div>
			

			<script type="text/javascript">
				makeSlider(".phonefinder-slider-price", "#skipval-price-min", "#skipval-price-max", [
					["3 میلیون تومان", "30"], 
					["3.5 میلیون تومان", "35"], 
					["4 میلیون تومان", "40"], 
					["4.5 میلیون تومان", "45"], 
					["5 میلیون تومان", "50"],
					["5.5 میلیون تومان", "55"], 
					["6 میلیون تومان", "60"], 
					["6.5 میلیون تومان", "65"], 
					["7 میلیون تومان", "70"],
					["7.5 میلیون تومان", "75"], 
					["8 میلیون تومان", "80"], 
					["8.5 میلیون تومان", "85"], 
					["9 میلیون تومان", "90"], 
					["9.5 میلیون تومان", "95"], 
					["10 میلیون تومان", "100"],
					["10.5 میلیون تومان", "105"],
					["11 میلیون تومان", "110"],
					["11.5 میلیون تومان", "115"],
					["12 میلیون تومان", "120"],
					["12.5 میلیون تومان", "125"],
					["13 میلیون تومان", "130"],
					["13.5 میلیون تومان", "135"],
					["14 میلیون تومان", "140"],
					["14.5 میلیون تومان", "145"],
					["15 میلیون تومان", "150"],
					["16 میلیون تومان", "160"],
					["17 میلیون تومان", "170"],
					["18 میلیون تومان", "180"],
					["19 میلیون تومان", "190"],
					["20 میلیون تومان", "200"],
					["21 میلیون تومان", "210"],
					["22 میلیون تومان", "220"],
					["23 میلیون تومان", "230"],
					["24 میلیون تومان", "240"],
					["25 میلیون تومان", "250"],
					["27 میلیون تومان", "270"],
					["29 میلیون تومان", "290"],
					["31 میلیون تومان", "310"],
					["33 میلیون تومان", "330"],
					["35 میلیون تومان", "350"],
					["37 میلیون تومان", "370"],
					["39 میلیون تومان", "390"],
					["41 میلیون تومان", "410"],
					["43 میلیون تومان", "430"],
					["45 میلیون تومان", "450"],
					["47 میلیون تومان", "470"],
					["49 میلیون تومان", "490"],
					["51 میلیون تومان", "510"],
					["53 میلیون تومان", "530"]
				]);
			</script>
		  </div>
		</div>
	</div>
	
	

	  <!-- NETWORK -->                 
	  <div class="row">
		<span dir="rtl"><h3 class="phonefinder-title">شبکه</h3></span>
		<div class="framed  l-col-1-4 l-col right" style="margin-right: 0;">
			<label for="stereo-cb" class="right">2G</label>
			<input type="checkbox" name="2G" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
		  </div>
		  <div class="framed l-col-1-4 l-col right" >
			<label for="stereo-cb" class="right">3G</label>
			<input type="checkbox" name="3G" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
		  </div>
	  <div class="framed  l-col-1-4 l-col right">
		<label for="stereo-cb" class="right">4G</label>
		<input type="checkbox" name="4G" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
	  <div class="framed l-col-1-4 l-col">
		<label for="stereo-cb" class="right">5G</label>
		<input type="checkbox" name="5G" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
  </div>


	  <!-- SIM -->
	  <div class="row">
		<span dir="rtl"><h3 class="phonefinder-title">سیمکارت</h3></span>
		<div class="l-col l-col-1-2 mr10">
		  <span style="position: absolute;text-align: right;margin-right: 30px;right: 0;"><label for="">: سایز سیمکارت</label></span>
		  <select name="SIMTypes" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;سایز" >
			<option value="Mini" style="float: right; padding-right: 0">سیمکارت مینی</option>
			<option value="Micro" style="float: right; padding-right: 0">سیمکارت میکرو</option>
			<option value="Nano" style="float: right; padding-right: 0">سیمکارت نانو</option>
			<option value="eSIM" style="float: right; padding-right: 0">سیمکارت الکترونیکی</option>
		  </select>
		</div>

		<div class="l-col l-col-1-2">
			<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
		  <label for="">: تعداد سیمکارت</label>
		</span>
		  <select name="NumberSIMs" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; تعداد سیمکارت">
			<option value=2 style="float: right; padding-right: 0">دو سیمکارت</option>
			<option value=3 style="float: right; padding-right: 0">سه سیمکارت</option>
			<option value=4 style="float: right; padding-right: 0">چهار سیمکارت</option>
		  </select>
		</div>
	  </div>


	  <!-- BODY -->
	  <div class="row">

		<span dir="rtl"><h3 class="phonefinder-title">بدنه</h3></span>



		<div class="l-col l-col-1-2 mr10">
			<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
			<label>: جنس پشت دستگاه</label>
		</span>
			<select name="BodyBacks" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  جنس پشت دستگاه">
			  <option value="plastic" style="float: right;padding-right: 0;">پلاستیک</option>
			  <option value="aluminum" style="float: right;padding-right: 0;">آلومینیوم</option>
			  <option value="glass" style="float: right;padding-right: 0;">شیشه</option>			  
			</select>
		</div> 		
		<div class="l-col l-col-1-2">
			<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;"><label>: جنس بدنه</label></span>
			<select name="BodyFrames" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;جنس بدنه">
			  <option value="plastic" style="float: right;padding-right: 0;">پلاستیک</option>
			  <option value="aluminum" style="float: right;padding-right: 0;">آلومینیوم</option>
			  <option value="steel" style="float: right;padding-right: 0;">فولاد ضد زنگ</option>			  
			</select>
		</div>
			
	
		
    
	 

		<!-- height, width, thickness, weight -->
		<div class="l-col l-col-1-2 right">
		  <div class="framed clearfix p10 ">
			<span class="label float-right" style="padding-left: 45px;">: ارتفاع</span>
			<div class="phonefinder-slider phonefinder-slider-height l-col-3-4 center-box">
			  
			  <span class="slider-value left" id="skipval-height-min" name="HeightMin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-height-max" name="HeightMax" dir="rtl"></span>
			</div>
			
			<script type="text/javascript">
				makeSlider(".phonefinder-slider-height", "#skipval-height-min", "#skipval-height-max", 90, 180, 5, " میلی متر ");
				
				
			</script>
			</div>
		</div>

		<div class="l-col l-col-1-2">                      
		  <div class="framed clearfix p10">
			<span class="label float-right" style="padding-left: 40px;">: عرض</span>
			<div class="phonefinder-slider phonefinder-slider-width l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-width-min" name="WidthMin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-width-max" name="WidthMax" dir="rtl"></span>
			</div>
			
			<script type="text/javascript">
			
				makeSlider(".phonefinder-slider-width", "#skipval-width-min", "#skipval-width-max", 40, 80, 2, " میلی متر ");
						
			</script>
			</div>
		</div>

		<div class="l-col l-col-1-2 right">
		  <div class="framed clearfix p10">
			<span class="label float-right" style="padding-left: 33px;">: ضخامت</span>
			<div class="phonefinder-slider phonefinder-slider-thickness l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-thickness-min" name="ThicknessMin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-thickness-max" name="ThicknessMax" dir="rtl"></span>
			</div>
		
			<script type="text/javascript">
				makeSlider(".phonefinder-slider-thickness", "#skipval-thickness-min", "#skipval-thickness-max", 5, 20, 1, " میلی متر ");
			</script>
		  </div>
		</div>

		<div class="l-col l-col-1-2">
		  <div class="framed clearfix p10">
			<span class="label float-right" style="padding-left: 50px;">: وزن</span>
			<div class="phonefinder-slider phonefinder-slider-weight l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-weight-min" name="WeightMin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-weight-max" name="WeightMax" dir="rtl"></span>
			</div>
			
			<script type="text/javascript">
			
				makeSlider(".phonefinder-slider-weight", "#skipval-weight-min", "#skipval-weight-max", 60, 230, 5, " گرم ");
				
				
			</script>
			</div>
		</div>

		<div class="l-col l-col-1-2 right">
			<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
			<label>: IP certificate</label>
		</span>
			<select name="sIPCerts" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; IP certificate">
			  <option value="1" style="float: right;padding-right:0 ;">IP5x</option>
			  <option value="2" style="float: right;padding-right:0 ;">IP6x</option>
			  <option value="3" style="float: right;padding-right:0 ;">IPx5</option>			  
			  <option value="4" style="float: right;padding-right:0 ;">IPx6</option>
			  <option value="5" style="float: right;padding-right:0 ;">IPx7</option>
			  <option value="6" style="float: right;padding-right:0 ;">IPx8</option>
			  
			</select>
		</div> 
		<!--
		<div class="l-col l-col-1-2 free-text-input color">
			<span class="label float-left">Color:</span>
			<input type="text" name="sColor" value="" class="l-col-full framed p10 pf-input">
		</div>
-->
		 	
	
	  </div>








	  <!-- PLATFORM -->
	  <div class="row">
		<span dir="rtl"><h3 class="phonefinder-title">پلتفرم</h3></span>
		<div class="l-col l-col-1-2 right">
			<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
		  <label for="">: سیستم عامل</label>
		</span>
		  <select name="OSes" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  سیستم عامل">
		
			<option value="Android" style="float: right;padding-right: 0;">Android</option>
			<option value="iOS" style="float: right;padding-right: 0;">iOS</option>
				
		  </select>
		</div>


		
		<!--

		<div class="l-col l-col-1-2" >
			<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
			<label for="">: ورژن سیستم عامل</label>
		</span>
			<select name="OSversions" multiple class="phonefinder-select" title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ورژن سیستم عامل (یک سیستم عامل انتخاب کنید)" >
				  <option> </option>
			</select>
		  </div>

		
		<div class="clearfix" style="clear:left;"></div>
		<div class="l-col l-col-1-2 mr10">
		  <div class="framed clearfix p10">
			<span class="label float-left">CPU freq.:</span>
			<div class="phonefinder-slider phonefinder-slider-cpu l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-cpu-min" name="nCpuMHzMin"></span>
			  <span class="slider-value right" id="skipval-cpu-max" name="nCpuMHzMax"></span>
			</div>
			
			<script type="text/javascript">
				makeSlider(".phonefinder-slider-cpu", "#skipval-cpu-min", "#skipval-cpu-max", 700, 2500, 100, "MHz");
			</script>
		  </div>
		</div>
		<div class="l-col l-col-1-2">
		  <div class="framed clearfix p10">
			<span class="label float-left">CPU Cores:</span>
			<div class="phonefinder-slider phonefinder-slider-cores l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-cores-min" name="nCPUCoresMin"></span>
			  <span class="slider-value right" id="skipval-cores-max" name="nCPUCoresMax"></span>
			</div>
			
		
			<script type="text/javascript">
				makeSlider(".phonefinder-slider-cores", "#skipval-cores-min", "#skipval-cores-max", [
					["1", "1"], 
					["2", "2"], 
					["4", "4"], 
					["6", "6"], 
					["8", "8"]
				]);
			</script>
		  </div>
		</div>
	-->

	<div class="l-col l-col-1-2 right mr10">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">: چیپست</label>
	</span>
	  <select name="Chipset" class="phonefinder-select" multiple data-live-search="true" title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; چیپست">
<option value=1 style="float: right;padding-right: 0;">Snapdragon 888 </option>
<option value=2 style="float: right;padding-right: 0;">Snapdragon 870 </option>
<option value=3 style="float: right;padding-right: 0;">Snapdragon 865+ </option>
<option value=4 style="float: right;padding-right: 0;">Snapdragon 865 </option>
<option value=5 style="float: right;padding-right: 0;">Snapdragon 860</option>
<option value=6 style="float: right;padding-right: 0;">Snapdragon 855+</option>
<option value=7 style="float: right;padding-right: 0;">Snapdragon 855</option>
<option value=8 style="float: right;padding-right: 0;">Snapdragon 845</option>
<option value=9 style="float: right;padding-right: 0;">Snapdragon 835</option>
<option value=10 style="float: right;padding-right: 0;">Snapdragon 821</option>
<option value=11 style="float: right;padding-right: 0;">Snapdragon 820</option>
<option value=12 style="float: right;padding-right: 0;">Snapdragon 780</option>
<option value=13 style="float: right;padding-right: 0;">Snapdragon 768</option>
<option value=14 style="float: right;padding-right: 0;">Snapdragon 765G</option>
<option value=15 style="float: right;padding-right: 0;">Snapdragon 750</option>
<option value=16 style="float: right;padding-right: 0;">Snapdragon 732</option>
<option value=17 style="float: right;padding-right: 0;">Snapdragon 730G</option>
<option value=18 style="float: right;padding-right: 0;">Snapdragon 730</option>
<option value=19 style="float: right;padding-right: 0;">Snapdragon 720</option>
<option value=20 style="float: right;padding-right: 0;">Snapdragon 712</option>
<option value=21 style="float: right;padding-right: 0;">Snapdragon 710</option>
<option value=22 style="float: right;padding-right: 0;">Snapdragon 690</option>
<option value=23 style="float: right;padding-right: 0;">Snapdragon 675</option>
<option value=24 style="float: right;padding-right: 0;">Snapdragon 670</option>
<option value=25 style="float: right;padding-right: 0;">Snapdragon 665</option>
<option value=26 style="float: right;padding-right: 0;">Snapdragon 660</option>
<option value=27 style="float: right;padding-right: 0;">Snapdragon 652</option>
<option value=28 style="float: right;padding-right: 0;">Snapdragon 650</option>
<option value=29 style="float: right;padding-right: 0;">Snapdragon 636</option>
<option value=30 style="float: right;padding-right: 0;">Snapdragon 632</option>
<option value=31 style="float: right;padding-right: 0;">Snapdragon 630</option>
<option value=32 style="float: right;padding-right: 0;">Snapdragon 625</option>
<option value=33 style="float: right;padding-right: 0;">Snapdragon 460</option>
<option value=34 style="float: right;padding-right: 0;">Snapdragon 450</option>
<option value=35 style="float: right;padding-right: 0;">Snapdragon 439</option>
<option value=36 style="float: right;padding-right: 0;">Snapdragon 435</option>
<option value=37 style="float: right;padding-right: 0;">Snapdragon 430</option>
<option value=38 style="float: right;padding-right: 0;">Snapdragon 429</option>
<option value=39 style="float: right;padding-right: 0;">Snapdragon 425</option>
<option value=40 style="float: right;padding-right: 0;">Exynos 2100</option>
<option value=41 style="float: right;padding-right: 0;">Exynos 990</option>
<option value=42 style="float: right;padding-right: 0;">Exynos 980</option>
<option value=43 style="float: right;padding-right: 0;">Exynos 880</option>
<option value=44 style="float: right;padding-right: 0;">Exynos 850</option>
<option value=45 style="float: right;padding-right: 0;">Exynos 9825</option>
<option value=46 style="float: right;padding-right: 0;">Exynos 9820</option>
<option value=47 style="float: right;padding-right: 0;">Exynos 9810</option>
<option value=48 style="float: right;padding-right: 0;">Exynos 9611</option>
<option value=49 style="float: right;padding-right: 0;">Exynos 9610</option>
<option value=50 style="float: right;padding-right: 0;">Exynos 8895</option>
<option value=51 style="float: right;padding-right: 0;">Exynos 8890</option>
<option value=52 style="float: right;padding-right: 0;">Exynos 7904</option>
<option value=53 style="float: right;padding-right: 0;">Exynos 7884</option>
<option value=54 style="float: right;padding-right: 0;">Exynos 7870</option>
<option value=55 style="float: right;padding-right: 0;">Exynos 7580</option>
<option value=56 style="float: right;padding-right: 0;">Exynos 7420</option>
<option value=57 style="float: right;padding-right: 0;">Dimensity 1000</option>
<option value=58 style="float: right;padding-right: 0;">Dimensity 820</option>
<option value=59 style="float: right;padding-right: 0;">Dimensity 800</option>
<option value=60 style="float: right;padding-right: 0;">Dimensity 720</option>
<option value=61 style="float: right;padding-right: 0;">Helio X25</option>
<option value=62 style="float: right;padding-right: 0;">Helio X20</option>
<option value=63 style="float: right;padding-right: 0;">Helio X10</option>
<option value=64 style="float: right;padding-right: 0;">Helio G90T</option>
<option value=65 style="float: right;padding-right: 0;">Helio G85</option>
<option value=66 style="float: right;padding-right: 0;">Helio G70</option>
<option value=67 style="float: right;padding-right: 0;">Helio P90</option>
<option value=68 style="float: right;padding-right: 0;">Helio P70</option>
<option value=69 style="float: right;padding-right: 0;">Helio P65</option>
<option value=70 style="float: right;padding-right: 0;">Helio P60</option>
<option value=71 style="float: right;padding-right: 0;">Helio P35</option>
<option value=72 style="float: right;padding-right: 0;">Helio P25</option>
<option value=73 style="float: right;padding-right: 0;">Helio P23</option>
<option value=74 style="float: right;padding-right: 0;">Helio P22</option>
<option value=75 style="float: right;padding-right: 0;">Helio P20</option>
<option value=76 style="float: right;padding-right: 0;">Helio P10</option>
<option value=77 style="float: right;padding-right: 0;">Helio A22</option>

	  </select>
	</div>
		
	<div class="l-col l-col-1-2 ">
		<div class="framed clearfix p10 ">
			<span class="label float-right" style="margin-left: 0px;">: Antutu بنچ مارک</span>
			<div class="phonefinder-slider phonefinder-slider-capacity2 l-col-3-4 center-box" >
			  <span class="slider-value left" id="skipval-capacity-min2" name="ANTUTUmin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-capacity-max2" name="ANTUTUmax" dir="rtl"></span>
			</div>
			
		
		  <script type="text/javascript">
			  
			  makeSlider(".phonefinder-slider-capacity2", "#skipval-capacity-min2", "#skipval-capacity-max2", 41728, 728668, 10000, "");
			  
		  </script>
		  </div>
		</div>

		<div class="l-col l-col-1-2 right">
			<div class="framed clearfix p10 ">
				<span class="label float-right" style="margin-left: 0px;">: GeekBench بنچ مارک</span>
				<div class="phonefinder-slider phonefinder-slider-capacity3 l-col-3-4 center-box" >
				  <span class="slider-value left" id="skipval-capacity-min3" name="GeekbenchMin" dir="rtl"></span>
				  <span class="slider-value right" id="skipval-capacity-max3" name="GeekbenchMax" dir="rtl"></span>
				</div>
				
			
			  <script type="text/javascript">
				  
				  makeSlider(".phonefinder-slider-capacity3", "#skipval-capacity-min3", "#skipval-capacity-max3", 348, 3925, 100, "");
				  
			  </script>
			  </div>
			</div>





		
	  </div>


<!-- MEMORY -->
<div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">حافظه</h3></span>
	<div class="l-col l-col-1-2 right">
	  <div class="framed clearfix p10">
		<span class="label float-right" style="padding-left: 60px;">: رم</span>
		<div class="phonefinder-slider phonefinder-slider-ram l-col-3-4 center-box">
		  <span class="slider-value left" id="skipval-ram-min" name="RamMin"></span>
		  <span class="slider-value right" id="skipval-ram-max" name="RamMax"></span>
		</div>
		
	
		<script type="text/javascript">
				
			makeSlider(".phonefinder-slider-ram", "#skipval-ram-min", "#skipval-ram-max", [
				["1 GB", "1"],["2 GB", "2"], ["3 GB", "3"], ["4 GB", "4"], ["6 GB", "6"], ["8 GB", "8"], ["10 GB", "10"], ["12 GB", "12"], ["16 GB", "16"]
			]);

		</script>
	  </div>
	</div>
	<div class="l-col l-col-1-2">
	  <div class="framed clearfix p10">
		<span class="label float-right" style="padding-left: 10px;">: حافظه دستگاه</span>
		<div class="phonefinder-slider phonefinder-slider-internal l-col-3-4 center-box">
		  <span class="slider-value left" id="skipval-internal-min" name="IntMemMin"></span>
		  <span class="slider-value right" id="skipval-internal-max" name="IntMemMax"></span>
		</div>
		<script type="text/javascript">
			makeSlider(".phonefinder-slider-internal", "#skipval-internal-min", "#skipval-internal-max", [
				 
				["8 GB", 8], 
				["16 GB", 16],
				["32 GB", 32],
				["64 GB", 64],
				["128 GB", 128],
				["256 GB", 256],
				["512 GB", 512],
				["1 TB", 1024],
				["2 TB", 2048]

			]);
			
			
		</script>
	  </div>
	</div>
	<div class="l-col l-col-1-2 right">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">: درگاه حافظه</label>
	</span>
	  <select name="Cardslot" class="phonefinder-select"  title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; درگاه حافظه">
		<option value="0" style="float: right;padding-right: 1;"></option>
		<option value="1" style="float: right;padding-right: 1;">بله (هر نوع)</option>
		<option value="2" style="float: right;padding-right: 1;">بله (درگاه ویژه)</option>
		<option value="3" style="float: right;padding-right: 1;">خیر</option>
	  </select>
	</div>
  </div>
  <!-- DISPLAY -->
  <div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">صفحه نمایش</h3></span>

	<div class="l-col l-col-1-4 right">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;"><label for="">: تکنولوژی</label>
		</span>
		<select name="DisplayTechs" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; تکنولوژی">
		  <option value="IPS"  style="float: right;padding-right: 0;">IPS</option>
		  <option value="OLED" style="float: right;padding-right: 0;">OLED</option>
		</select>
	  </div>

	  <div class="l-col l-col-1-4 right mr10">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">: بریدگی</label>
	</span>
	  <select name="DisplayNotch" class="phonefinder-select"  title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; بریدگی">
		<option value="0" style="float: right;padding-right: 1;"></option>
		<option value="1" style="float: right;padding-right: 1;">خیر</option>
		<option value="2" style="float: right;padding-right: 1;">بله</option>
		<option value="3" style="float: right;padding-right: 1;">حفره</option>
	  </select>
	</div>

	  <div class="l-col l-col-1-2 mr10">
		<div class="framed clearfix p10">
			<span class="label float-right" style="padding-left: 48px;">: اندازه</span>
			<div class="phonefinder-slider phonefinder-slider-size l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-size-min" name="DisplayInchesMin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-size-max" name="DisplayInchesMax" dir="rtl"></span>
			</div>
		
			<script type="text/javascript">
				
			  makeSlider(".phonefinder-slider-size", "#skipval-size-min", "#skipval-size-max", 3, 7.2, 0.1, ' اینچ ');
			  
			</script>
		  </div>
	  </div>

	<div class="framed clearfix p10 l-col-full">
		<span class="label float-right" style="padding-left: 40px;">: رزولوشن</span>
	  <div class="phonefinder-slider phonefinder-slider-display l-col-3-4 center-box">
		<span class="slider-value left" id="skipval-display-min" name="DisplayResMin"></span>
		<span class="slider-value right" id="skipval-display-max" name="DisplayResMax"></span>
	  </div>
	  
	  <script type="text/javascript">
		  
		makeSlider(".phonefinder-slider-display", "#skipval-display-min", "#skipval-display-max", [
		 ["QVGA (240x320)", 76800], 
		 ["WQVGA (240x400)", 96000], 
		 ["HVGA (320x480)", 153600],
		 ["WVGA (480x800)", 384000], 
		 ["qHD (540x960)", 518400],
		 ["HD (720x1280)", 921600], 
		 ["FHD (1080x1920)", 2073600], 
		 ["QHD (1440x2560)", 3686400],
		 ["4K (1644x3840)", 6312960]
		]);
			
	  </script>
	 
	</div>


	<div class="l-col l-col-1-2 right">
	  <div class="framed clearfix p10">
		<span class="label float-right" style="padding-left: 47px;">: تراکم</span>
		  <div class="phonefinder-slider phonefinder-slider-density l-col-3-4 center-box">
			<span class="slider-value left" id="skipval-density-min" name="nDisplayDensityMin"></span>
			<span class="slider-value right" id="skipval-density-max" name="DisplayDensityMax"></span>
		  </div>
		  
		  <script type="text/javascript">
			  
			makeSlider(".phonefinder-slider-density", "#skipval-density-min", "#skipval-density-max", 100, 550, 10, " ppi ");
			  
		  
			
		  </script>
		</div>
	</div>		
	
	
	
	
	
		

	<div class="l-col l-col-1-2 right mr10">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">: نرخ بروزرسانی</label>
	</span>
	  <select name="DisplayR" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; نرخ بروزرسانی">
		
		<option value=60 style="float: right;padding-right: 0;">60Hz</option>
		<option value=90 style="float: right;padding-right: 0;">90Hz</option>
		<option value=120 style="float: right;padding-right: 0;">120Hz</option>
		<option value=144 style="float: right;padding-right: 0;">144Hz</option>
	  </select>
	</div>

  </div>

  <div class="row">
	<div class="l-col l-col-1-4 right">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;"><label for="">: صفحه نمایش خمیده</label>
		</span>
		<select name="DisplayEdge" class="phonefinder-select" title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;صفحه نمایش خمیده">
		  <option value=0  style="float: right;padding-right: 1;"></option>
		  <option value=1 style="float: right;padding-right: 1;">بله</option>
		  <option value=0 style="float: right;padding-right: 1;">خیر</option>
		</select>
	  </div>
  </div>


  <!-- MAIN CAMERA -->
  <div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">دوربین اصلی</h3></span>
	<div class="l-col l-col-1-2 right">
	  <div class="framed clearfix p10">
		  <span class="label float-right" style="margin-left:25px;">: رزولوشن</span>
		  <div class="phonefinder-slider phonefinder-slider-primary l-col-3-4 center-box">
			<span class="slider-value left" id="skipval-primary-min" name="CamPrimMin"></span>
			<span class="slider-value right" id="skipval-primary-max" name="CamPrimMax"></span>
		  </div>
		  
		<script type="text/javascript">
		
			  
			makeSlider(".phonefinder-slider-primary", "#skipval-primary-min", "#skipval-primary-max", [ 
				["2MP", 2],
				["5MP", 5],
				["8MP", 8],
				["10MP", 10], 
				["12MP", 12], 
				["16MP", 16],
				["20MP", 20], 
				["32MP", 32], 
				["40MP", 40],
				["48MP", 48],
				["64MP", 64],
				["108MP", 108]
			]);
			
			
		  </script>
		</div>
	</div>

	<div class="l-col l-col-1-4 mr10 right">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">: تعداد دوربین</label>
	</span>
	  <select name="NumberCameras" id="sNumberCameras" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; تعداد دوربین">
		<option value=1 style="float: right;padding-right: 0;">یک</option>
		<option value=2 style="float: right;padding-right: 0;">دو</option>
		<option value=3 style="float: right;padding-right: 0;">سه</option>
		<option value=4 style="float: right;padding-right: 0;">چهار و بیشتر</option>
	  </select>
	</div>
	
	<div class="framed l-col-1-4 l-col right" >
		<label for="stereo-cb" class="right">OIS</label>
		<input type="checkbox" name="CamPrimOIS" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>		

<div class="l-col l-col-1-2 right">

	<div class="framed clearfix p10">
		  <span class="label float-right" style="padding-left: 34px;">: دیافراگم</span>
		  <div class="phonefinder-slider phonefinder-slider-cameraf l-col-3-4 center-box">
			<span class="slider-value left" id="skipval-cameraf-min" name="fCameraFMin"></span>
			<span class="slider-value right" id="skipval-cameraf-max" name="fCameraFMax"></span>
		  </div>	  
	  <script type="text/javascript">		  
		makeSlider(".phonefinder-slider-cameraf", "#skipval-cameraf-min", "#skipval-cameraf-max", 1.5, 2.8, 0.1, '');			
	  </script>
	</div>		
</div>

<div class="framed l-col-1-4 l-col right" >
	<label for="stereo-cb" class="right">ULTRAWIDE</label>
	<input type="checkbox" name="CamULW" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
  </div>	

  <div class="framed l-col-1-4 l-col right" >
	<label for="stereo-cb" class="right">TELEPHOTO</label>
	<input type="checkbox" name="CamTEF" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
  </div>	

	<div class="l-col l-col-1-2 right">
	  <div class="framed clearfix p10">
		  <span class="label float-right" style="margin-left:45px ;">: ویدیو</span>
		  <div class="phonefinder-slider phonefinder-slider-video l-col-3-4 center-box">
			<span class="slider-value left" id="skipval-video-min" name="VideoMin"></span>
			<span class="slider-value right" id="skipval-video-max" name="VideoMax"></span>
		  </div>
		<script type="text/javascript">
			makeSlider(".phonefinder-slider-video", "#skipval-video-min", "#skipval-video-max", [
				["QVGA", 240], 
				["VGA", 480], 
				["720p", 720], 
				["1080p", 1080], 
				["4K", 2160], 
				["8K", 4320]
			]);
		</script>
		</div>
	</div>
	
	<div class="l-col l-col-1-2">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
		<label>: فلش</label>
	</span>
		<select name="CameraFlashes" multiple class="phonefinder-select" title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; فلش">
		  <option value="LED" style="float: right;padding-right: 0;">LED</option>
		  <option value="DUAL LED" style="float: right;padding-right: 0;">دوگانه LED</option>
		</select>
	</div>


  </div>


<!-- SELFIE CAMERA -->
<div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">دوربین سلفی</h3></span>
	
	<div class="l-col l-col-1-2 right">
	  <div class="framed clearfix p10">
		  <span class="label float-right" style="margin-left:23px ;">: رزولوشن</span>
		  <div class="phonefinder-slider phonefinder-slider-secondary l-col-3-4 center-box">
			<span class="slider-value left" id="skipval-secondary-min" name="CamSecMin"></span>
			<span class="slider-value right" id="skipval-secondary-max" name="CamSecMax"></span>
		  </div>

		 <script type="text/javascript">
			makeSlider(".phonefinder-slider-secondary", "#skipval-secondary-min", "#skipval-secondary-max", [
				 
				["1MP", 1], 
				["5MP", 5],
				["8MP", 8], 
				["12MP", 12],
				["16MP", 16], 
				["24MP", 24],
				["32MP", 32],
				["48MP", 48]
			]);

		  </script>
		</div>
	</div>

	<div class="framed l-col-1-4 l-col" >
		<label for="stereo-cb" class="right">دوربین دوگانه</label>
		<input type="checkbox" name="CamSecDual" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>	
	
	<div class="framed l-col-1-4 l-col mr10" >
		<label for="stereo-cb" class="right">OIS</label>
		<input type="checkbox" name="CamSecOIS" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>		
  </div>

  <div class="row">
<!--
	  <div class="framed l-col l-col-1-4">
	  <label for="frontflash-cb" class="p10 label label-normal">Front flash</label>
	  <input type="checkbox" name="chkFrontflash" class="float-right move-top" id="frontflash-cb" value="selected" />
	</div>
-->
	<div class="framed  l-col-1-4 l-col right" style="margin-right: 0;">
		<label for="stereo-cb" class="right">پاپ آپ</label>
		<input type="checkbox" name="CamSecPup" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
  </div>

	  
  <div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">صدا</h3></span>
	<div class="framed  l-col-1-4 l-col right" style="margin-right: 0;">
		<label for="stereo-cb" class="right">جک 3.5 میلیمتری</label>
		<input type="checkbox" name="chkj35" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
	  <div class="framed l-col-1-4 l-col right" style="margin-right: 10px;">
		<label for="stereo-cb" class="right">اسپیکر دوگانه</label>
		<input type="checkbox" name="chkStereoSpk" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
  </div>


  <!-- SENSORS -->
  <div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">سنسور ها</h3></span>
	<div class="framed l-col-1-4 l-col right" style="margin-right: 0;">
		<label for="stereo-cb" class="right">شتاب سنج</label>
		<input type="checkbox" name="accelerometer" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>

	  <div class="framed l-col-1-4 l-col right" >
		<label for="stereo-cb" class="right">ژیروسکوپ</label>
		<input type="checkbox" name="gyroscope" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>

	  <div class="framed l-col-1-4 l-col mr10" >
		<label for="stereo-cb" class="right">قطب نما</label>
		<input type="checkbox" name="compass" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
	
	<div class="framed l-col-1-4 l-col mr10" >
		<label for="stereo-cb" class="right">حسگر مجاورتی</label>
		<input type="checkbox" name="proximity" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
  </div>
  

  <div class="row">
	<div class="framed l-col-1-4 l-col mr10" >
		<label for="stereo-cb" class="right">فشار سنج</label>
		<input type="checkbox" name="barometer" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
	
	<div class="framed l-col-1-4 l-col mr10" >
		<label for="stereo-cb" class="right">شمارش ضربان قلب</label>
		<input type="checkbox" name="hrate" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>



	<div class="l-col l-col-1-2 right">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">: حسگر اثر انگشت</label>
	</span>
	  <select name="Fingerprints" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; حسگر اثر انگشت">
		<option value="ALL" data-any  style="float: right;padding-right:0 ;">بله (هر نوعی)</option>
		<option value="front" style="float: right;padding-right:0 ;">در جلو</option>
		<option value="back" style="float: right;padding-right:0 ;">در پشت</option>
		<option value="side" style="float: right;padding-right:0 ;">در کنار</option>
		<option value="under" style="float: right;padding-right:0 ;">زیر نمایشگر</option>
	  </select>
	</div>  
  </div>

		
	  
 <!-- CONNECT -->
 <div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">اتصالات</h3></span>
	<div class="l-col l-col-1-2 right">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
		<label>: WLAN (Wi-Fi)</label>
	</span>
		<select name="sWLANs" class="phonefinder-select" multiple title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WLAN (Wi-Fi)">
		  <option value="wifi-4"  style="float: right;padding-right:0 ;">Wi-Fi 4 (802.11n)</option>
		  <option value="wifi-5" style="float: right;padding-right:0 ;">Wi-Fi 5 (802.11ac)</option>
		  <option value="wifi-6" style="float: right;padding-right:0 ;">Wi-Fi 6 (802.11ax)</option>
		</select>
	</div>
	<div class="l-col l-col-1-2">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
		<label>: بلوتوث</label>
	</span>
		<select name="sBluetooths" multiple class="phonefinder-select" title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; بلوتوث">
		  <option value="All" style="float: right;padding-right:0 ;">هر ورژن</option>
		  <option value="4" style="float: right;padding-right:0 ;">Bluetooth 4.0</option>
		  <option value="4-1" style="float: right;padding-right:0 ;">Bluetooth 4.1</option>
		  <option value="4-2" style="float: right;padding-right:0 ;">Bluetooth 4.2</option>
		  <option value="5" style="float: right;padding-right:0 ;">Bluetooth 5.0</option>
		  <option value="5-1" style="float: right;padding-right:0 ;">Bluetooth 5.1</option>
		</select>
	</div>

	<div class="framed l-col-1-4 l-col right" style="margin-right: 0;">
		<label for="stereo-cb" class="right">(GPS) موقعیت یاب</label>
		<input type="checkbox" name="chkStereoSpk" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>

	  <div class="framed l-col-1-4 l-col right" >
		<label for="stereo-cb" class="right">NFC</label>
		<input type="checkbox" name="chkStereoSpk" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>

	  <div class="framed l-col-1-4 l-col mr10" >
		<label for="stereo-cb" class="right">مادون قرمز</label>
		<input type="checkbox" name="chkStereoSpk" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
	
	<div class="framed l-col-1-4 l-col mr10" >
		<label for="stereo-cb" class="right">رادیو</label>
		<input type="checkbox" name="chkStereoSpk" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
  </div>
  <div class="row">
	<div class="framed l-col-1-4 l-col right" >
		<label for="stereo-cb" class="right">USB TYPE-C</label>
		<input type="checkbox" name="chkStereoSpk" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
  </div>



<!-- BATTERY -->
<div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">باتری</h3></span>
<div class="l-col l-col-1-2 right">
	  <div class="framed clearfix p10">
		  <span class="label float-right" style="margin-left: 35px;">: ظرفیت</span>
		  <div class="phonefinder-slider phonefinder-slider-capacity l-col-3-4 center-box">
			<span class="slider-value left" id="skipval-capacity-min" name="nBatCapacityMin"></span>
			<span class="slider-value right" id="skipval-capacity-max" name="nBatCapacityMax"></span>
		  </div>
		  
	  
		<script type="text/javascript">
			
			makeSlider(".phonefinder-slider-capacity", "#skipval-capacity-min", "#skipval-capacity-max", 3000, 7000, 200, " mAh ");
			
		</script>
		</div>
	  </div>

	  <div class="l-col l-col-1-2 mr10">
		<div class="framed clearfix p10">
			<span class="label float-right" style="margin-left:20px ;">: توان شارژر</span>
			<div class="phonefinder-slider phonefinder-slider-charging l-col-3-4 center-box">
			  <span class="slider-value left" id="skipval-charging-min" name="nChargingMin" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-charging-max" name="nChargingMax" dir="rtl"></span>
			</div>
			
		   <script type="text/javascript">
			  makeSlider(".phonefinder-slider-charging", "#skipval-charging-min", "#skipval-charging-max", [
				  ["10 وات", "10"], 
				  ["15 وات", "15"], 
				  ["20 وات", "20"], 
				  ["25 وات", "25"], 
				  ["30 وات", "30"],
				  ["40 وات", "40"], 
				  ["50 وات", "50"], 
				  ["65 وات", "65"], 
				  ["100 وات", "100"]
			  ]);
  
			</script>
		  </div>
  </div>
	
	
	
	</div>

<div class="row">

	<div class="l-col l-col-1-2 right">
		<div class="framed clearfix p10">
			<span class="label float-right" style="margin-left: 22px;">: طول عمر</span>
			<div class="phonefinder-slider phonefinder-slider-capacity1 l-col-3-4 center-box" >
			  <span class="slider-value left" id="skipval-capacity-min1" name="nBatCapacityMin1" dir="rtl"></span>
			  <span class="slider-value right" id="skipval-capacity-max1" name="nBatCapacityMax1" dir="rtl"></span>
			</div>
			
		
		  <script type="text/javascript">
			  
			  makeSlider(".phonefinder-slider-capacity1", "#skipval-capacity-min1", "#skipval-capacity-max1", 60, 160, 1, " ساعت ");
			  
		  </script>
		  </div>
		</div>
<!--
	<div class="l-col l-col-1-4">
		<label for="">Removable:</label>
		<select name="idBatRemovable" class="phonefinder-select"  title="&nbsp;">
		  <option value="0"></option>
		  <option value="1">Removable</option>
		  <option value="2">Non-removable</option>
		</select>
	  </div>

	-->


	
	<div class="framed l-col-1-4 l-col right" style="margin-right: 10px;">
		<label for="stereo-cb" class="right">شارژ بی سیم</label>
		<input type="checkbox" name="chkStereoSpk" class=" " id="" value="selected" style="margin-top: 12px;padding-top: 5px;"/>
	  </div>
		

</div>


<div class="row">
	<span dir="rtl"><h3 class="phonefinder-title">مرتب سازی</h3></span>
	  <div class="l-col l-col-1-4 right">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">بر اساس</label>
	  </span>
	  <select name="nOrder" class="phonefinder-select"  title="&nbsp; :بر اساس">
	  <option value="popular" style="float: right;padding-right: 1;">محبوبیت</option>
	  <option value="price" style="float: right;padding-right: 1;">قیمت</option>
	  <option value="weight" style="float: right;padding-right: 1;">وزن</option>
	  <option value="lanch-date" style="float: right;padding-right: 1;">تاریخ عرضه</option>
	  <option value="camera-resultion" style="float: right;padding-right: 1;">رزولوشن دوربین</option>
	  <option value="battery-capacity" style="float: right;padding-right: 1;">طرفیت باتری</option>
	  <option value="Battery-life" style="float: right;padding-right: 1;">طول عمر باتری</option>
	  <option value="cpu-benchmark" style="float: right;padding-right: 1;">بنچ مارک پردازنده</option>
	  </select>
	  </div>

	  <div class="l-col l-col-1-4 right mr10">
		<span style="position: absolute;text-align: right;margin-right: 30px;right: 0;">
	  <label for="">ترتیب</label>
	  </span>
	  <select name="nOrder" class="phonefinder-select"  title="&nbsp; :بر اساس">
	  <option value="Ascending" style="float: right;padding-right: 1;">صعودی</option>
	  <option value="Descending" style="float: right;padding-right: 1;">نزولی</option>
	  
	  </select>
	  </div>
	</div>
		<div class="row" dir="rtl">
		<input type="submit">
		</div>
		






	  
	
	</form>
</div>
</div></div>



<!--  camera form 
<input type="checkbox"><svg width="100" height="200">
	<rect x="2" y="2" rx="20" ry="20" width="60" height="190" fill="white" stroke="black" stroke-width="3"
	  />
	  <circle cx="32" cy="32" r="15" stroke="black" stroke-width="2" fill="white" />
	<circle cx="32" cy="72" r="15" stroke="black" stroke-width="2" fill="white" />
	  <circle cx="32" cy="112" r="15" stroke="black" stroke-width="2" fill="white" />
	  <circle cx="32" cy="152" r="15" stroke="black" stroke-width="2" fill="white" />
	  <circle cx="77" cy="32" r="6" stroke="black" stroke-width="3" fill="white" />
	</svg>
	<br>
	<input type="checkbox"><svg width="110" height="110">
		<rect x="2" y="2" rx="20" ry="20" width="100" height="100" fill="white" stroke="black" stroke-width="3"
		  />
		  <circle cx="32" cy="32" r="15" stroke="black" stroke-width="2" fill="white" />
		<circle cx="32" cy="72" r="15" stroke="black" stroke-width="2" fill="white" />
		  <circle cx="72" cy="32" r="15" stroke="black" stroke-width="2" fill="white" />
		  <circle cx="72" cy="72" r="15" stroke="black" stroke-width="2" fill="white" />
		  <circle cx="52" cy="52" r="6" stroke="black" stroke-width="3" fill="white" />
		</svg>
		<br>
		<input type="checkbox"><svg width="80" height="120">
		<rect x="2" y="2" rx="20" ry="20" width="73" height="115" fill="white" stroke="black" stroke-width="3"
		  />
		  <circle cx="22" cy="32" r="10" stroke="black" stroke-width="2" fill="white" />
		<circle cx="22" cy="62" r="10" stroke="black" stroke-width="2" fill="white" />
		  <circle cx="52" cy="32" r="10" stroke="black" stroke-width="2" fill="white" />
		  <circle cx="22" cy="92" r="10" stroke="black" stroke-width="2" fill="white" />
		  <circle cx="52" cy="62" r="5" stroke="black" stroke-width="3" fill="white" />
		</svg>
		<input type="checkbox"><svg width="110" height="160">
			<rect x="2" y="2" rx="20" ry="20" width="100" height="150" fill="white" stroke="black" stroke-width="3"
			  />
			  <circle cx="32" cy="32" r="15" stroke="black" stroke-width="2" fill="white" />
			<circle cx="32" cy="72" r="15" stroke="black" stroke-width="2" fill="white" />
			  <circle cx="72" cy="112" r="15" stroke="black" stroke-width="2" fill="white" />
			  <circle cx="32" cy="112" r="15" stroke="black" stroke-width="2" fill="white" />
			  <circle cx="72" cy="72" r="6" stroke="black" stroke-width="3" fill="white" />
			  </svg>
			  <br>
			  <input type="checkbox"><svg width="200" height="160">
				<rect x="2" y="2" rx="20" ry="20" width="100" height="150" fill="white" stroke="black" stroke-width="3"
				  />
				  <circle cx="32" cy="32" r="15" stroke="black" stroke-width="2" fill="white" />
				<circle cx="32" cy="72" r="15" stroke="black" stroke-width="2" fill="white" />
				  <circle cx="72" cy="112" r="15" stroke="black" stroke-width="2" fill="white" />
				  <circle cx="32" cy="112" r="15" stroke="black" stroke-width="2" fill="white" />
				  <circle cx="72" cy="72" r="6" stroke="black" stroke-width="3" fill="white" />
				  </svg>

				  -->

</body>
</html>