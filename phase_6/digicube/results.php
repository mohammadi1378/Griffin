<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
table {
  border-spacing: 40px 20px;
}
td{
    max-width: 160px;
    text-align: center;
}
td:hover {
    background-color: #EF233C;
}
a{
    text-decoration:none;
    color:black;
}
a:hover{
    color:white;
}
</style>
<body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://fdn.gsmarena.com/vv/assets12/js/jquery.nouislider.min.js"></script>




<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "database"; //it must be exist
$charset = "utf8";
$dsn ="mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
$pdoObj = new PDO($dsn, $username, $password, $opt);

$SPQ=null;
$SPQF=false;

$STQ=null;
$STQF=false;

$flag=true;


if(isset($_GET['Makers'])){
    $makers=str_replace(",","','",$_GET['Makers']);
    $SPQ="company in "."('".$makers."')";
    $SPQF=true;
}

if(isset($_GET['YearMin'])){            
    if(!isset($_GET['YearMax'])){
        $tmp="year >= ". $_GET['YearMin'];
    }
    else if($_GET['YearMin']==$_GET['YearMax']){
        $tmp="year = ". $_GET['YearMin'];
        $flag=false;
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['YearMax']) && $flag){
    $tmp="year <= ". $_GET['YearMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

$flag=true;

if(isset($_GET['Availabilities'])){
    $tmp="available in "."(".$_GET['Availabilities'].")";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['PriceMin'])){           //price
    if(!isset($_GET['PriceMax'])){
        $tmp="inPrice >= ". $_GET['PriceMin'];
    }
    else if($_GET['PriceMin']==$_GET['PriceMax']){
        $tmp="maxPrice = ". $_GET['PriceMin'];
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['PriceMax'])){
    $tmp="minPrice <= ". $_GET['PriceMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['5G'])){             //5G
    $tmp="technology LIKE '%5G%'";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['4G'])){            
    $tmp="technology LIKE '%LTE%'";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['3G'])){             
    $tmp="technology LIKE '%HSPA%'";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['2G'])){             
    $tmp="technology LIKE '%GSM%'";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['NumberSIMs'])){
    $tmp="simNum in "."(".$_GET['NumberSIMs'].")";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['SIMTypes'])){
    $simType=null;
    $tmp=explode(",",$_GET['SIMTypes']);
    foreach($tmp as $i){
        $simType= $simType."sim LIKE '%".$i."%'"." OR ";
    }
    $simType=trim($simType," OR ");
    $simType=str_replace(",","%','%",$simType);
    $simType="(".$simType.")";
    if($SPQ==null){
        $SPQ=$simType;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$simType;
        
}

if(isset($_GET['BodyFrames'])){
    $frame=str_replace(",","','",$_GET['BodyFrames']);
    $tmp="frame in "."('".$frame."')";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['BodyBacks'])){
    $back=str_replace(",","','",$_GET['BodyBacks']);
    $tmp="backBuild in "."('".$back."')";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['HeightMin'])){
    $tmp="height >= ". $_GET['HeightMin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['HeightMax'])){
    $tmp="height <= ". $_GET['HeightMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['WidthMin'])){
    $tmp="width >= ". $_GET['WidthMin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['WidthMax'])){
    $tmp="width <= ". $_GET['WidthMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['ThicknessMin'])){
    $tmp="thickness >= ". $_GET['ThicknessMin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['ThicknessMax'])){
    $tmp="thickness <= ". $_GET['ThicknessMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['WeightMin'])){
    $tmp="_weight >= ". $_GET['WeightMin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['WeightMax'])){
    $tmp="_weight <= ". $_GET['WeightMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['OSes'])){     
    $os=null;
    $tmp=explode(",",$_GET['OSes']);
    foreach($tmp as $i){
        $os= $os."os LIKE '%".$i."%'"." OR ";
    }
    $os=trim($os," OR ");  
    $os=str_replace(",","%','%",$os);
    $os="(".$os.")";            
    if($SPQ==null){
        $SPQ=$os;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$os;
}


if(isset($_GET['Chipset'])){
    $chipset=null;
    foreach($_GET['Chipset'] as $i){
        $chipset= $chipset."'".$i."'".",";
    }
    $chipset=trim($back,",");
    $tmp="chipset in "."(".$chipset.")";
    if($SPQ==null)
        $SPQ=$tmp;
    else
        $SPQ=$SPQ." AND ".$tmp;
}


if(isset($_GET['ANTUTUmin'])){
    $tmp="antutu >= ". $_GET['ANTUTUmin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['ANTUTUmax'])){
    $tmp="antutu <= ". $_GET['ANTUTUmax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['GeekbenchMin'])){
    $tmp="geekbench >= ". $_GET['GeekbenchMin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['GeekbenchMax'])){
    $tmp="geekbench <= ". $_GET['GeekbenchMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['RamMin'])){
    if(!isset($_GET['RamMax'])){
        $tmp="ram >= ". $_GET['RamMin'];
    }
    else if($_GET['RamMin']==$_GET['RamMax']){
        $tmp="ram = ". $_GET['RamMin'];
        $flag=false;
    }
    else{
        $tmp="ram >= ". $_GET['RamMin'];
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['RamMax']) && $flag){
    $tmp="ram <= ". $_GET['RamMax'];
    if($STQ==null)
        $STQ=$tmp;
    else
        $STQ=$STQ." AND ".$tmp;
}
$flag=true;
if(isset($_GET['IntMemMin'])){
    if(!isset($_GET['IntMemMax'])){
        $tmp="memory >= ". $_GET['IntMemMin'];
    }
    else if($_GET['IntMemMin']==$_GET['IntMemMax']){
        $tmp="memory = ". $_GET['IntMemMin'];
        $flag=false;
    }
    else{
        $tmp="memory >= ". $_GET['IntMemMin'];
    }
    if($STQ==null)
        $STQ=$tmp;
    else
        $STQ=$STQ." AND ".$tmp;
}

if(isset($_GET['IntMemMax']) && $flag){
    $tmp="memory <= ". $_GET['IntMemMax'];
    if($STQ==null)
        $STQ=$tmp;
    else
        $STQ=$STQ." AND ".$tmp;
}
$flag=true;
if(isset($_GET['Cardslot'])){
    $tmp="cardslot = ". $_GET['Cardslot'];
    if($SPQ==null)
        $SPQ=$tmp;
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['DisplayTechs'])){
    $type=str_replace(",","','",$_GET['DisplayTechs']);
    $tmp="displayType in "."('".$type."')";
    if($STQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['DisplayNotch'])){
    if($_GET['DisplayNotch']!=2){
        $tmp="notch = ". $_GET['DisplayNotch'];
    }
    else{
        $tmp="notch IN (2,3)";
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['DisplayInchesMin'])){
    if(!isset($_GET['DisplayInchesMax'])){
        $tmp="displaySize >= ". $_GET['DisplayInchesMin'];
    }
    else if($_GET['DisplayInchesMax']==$_GET['DisplayInchesMin']){
        $tmp="displaySize = ". $_GET['DisplayInchesMin'];
        $flag=false;
    }
    else{
        $tmp="displaySize >= ". $_GET['DisplayInchesMin'];
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['DisplayInchesMax']) && $flag){
    $tmp="displaySize <= ". $_GET['DisplayInchesMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}
$flag=true;
/*
if(isset($_GET['DisplayResMin'])){
    $tmp="displayResolutionX >= ". $_GET['DisplayResMin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['DisplayResMax'])){
    $tmp="displayResolutionX <= ". $_GET['DisplayResMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}
*/

if(isset($_GET['DisplayDensityMin'])){

    if(!isset($_GET['DisplayDensityMax'])){
        $tmp="density >= ". $_GET['DisplayDensityMin'];
    }
    else if($_GET['DisplayDensityMax']==$_GET['DisplayDensityMin']){
        $tmp="density = ". $_GET['DisplayDensityMin'];
        $flag=false;
    }
    else{
        $tmp="density >= ". $_GET['DisplayDensityMin'];
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['DisplayDensityMax']) && $flag){
    $tmp="density <= ". $_GET['DisplayDensityMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}
$flag=true;
if(isset($_GET['DisplayR'])){
    $tmp="refreshRate in "."(".$_GET['DisplayR'].")";
    if($STQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['DisplayEdge'])){
    $tmp="edge = ". $_GET['DisplayEdge'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamPrimMin'])){
    if(!isset($_GET['CamPrimMax'])){
        $tmp="mainCameraResolution >= ". $_GET['CamPrimMin'];
    }
    else if($_GET['CamPrimMin']==$_GET['CamPrimMax']){
        $tmp="mainCameraResolution = ". $_GET['CamPrimMin'];
        $flag=false;
    }
    else{
        $tmp="mainCameraResolution >= ". $_GET['CamPrimMin'];
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamPrimMax']) && $flag){
    $tmp="mainCameraResolution <= ". $_GET['CamPrimMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}
$flag=true;
if(isset($_GET['NumberCameras'])){
    $tmp="cameraNum in "."(".$numOfCameras.")";
    if($STQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamPrimOIS'])){
    $tmp="mainCameraOis = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['fCameraFMin'])){
    if(!isset($_GET['fCameraFMax'])){
        $tmp="diafragm >= ". $_GET['fCameraFMin'];
    }
    else if($_GET['fCameraFMax']==$_GET['fCameraFMin']){
        $tmp="diafragm = ". $_GET['fCameraFMin'];
        $flag=false;
    }
    else{
        $tmp="diafragm >= ". $_GET['fCameraFMin'];
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['fCameraFMax']) && $flag){
    $tmp="diafragm <= ". $_GET['fCameraFMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}
$flag=true;
if(isset($_GET['CamULW'])){
    $tmp="ultrawide = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamTEF'])){
    $tmp="telephoto = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['VideoMin'])){
    $tmp="video >= ". $_GET['VideoMin'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['VideoMax'])){
    $tmp="video <= ". $_GET['VideoMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CameraFlashes'])){
    $flash=str_replace(",","','",$_GET['CameraFlashes']);
    $tmp="flash in "."('".$flash."')";
    if($STQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamSecMin'])){
    if(!isset($_GET['CamSecMax'])){
        $tmp="silfieResolution >= ". $_GET['CamSecMin'];
    }
    else if($_GET['CamSecMax']==$_GET['CamSecMin']){
        $tmp="silfieResolution = ". $_GET['CamSecMin'];
        $flag=false;
    }
    else{
        $tmp="silfieResolution >= ". $_GET['CamSecMin'];
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamSecMax']) && $flag){
    $tmp="silfieResolution <= ". $_GET['CamSecMax'];
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}
$flag=true;
if(isset($_GET['CamSecOIS'])){
    $tmp="silfieCameraOis = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamSecDual'])){
    $tmp="dualSilfieCamera = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['CamSecPup'])){
    $tmp="popupSilfie = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['chkj35'])){
    $tmp="jac = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['chkStereoSpk'])){
    $tmp="dualSpeaker = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['accelerometer'])){
    $tmp="accelerometer = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['gyroscope'])){
    $tmp="gyroscope = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['proximity'])){
    $tmp="proximity = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['barometer'])){
    $tmp="barometer = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['compass'])){
    $tmp="compass = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['hrate'])){
    $tmp="heartRate = 1";
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}

if(isset($_GET['Fingerprints'])){
    if($_GET['Fingerprints']=="All"){
        $tmp="fingerPrintType IS NOT NULL";
    }
    else{
        $fpt=str_replace(",","','",$_GET['Fingerprints']);
        $tmp="fingerPrintType IN ('".$fpt."')";
    }
    if($SPQ==null){
        $SPQ=$tmp;
        $SPQF=true;
    }
    else
        $SPQ=$SPQ." AND ".$tmp;
}







$strsp="SELECT DISTINCT specifications.id,img_title FROM specifications,images,storage WHERE specifications.id=images.id AND specifications.id=storage.id";
if($SPQF)
$strsp=$strsp." AND $SPQ";
$strst="SELECT id FROM storage WHERE $STQ";
if($STQF){
    $strsp=$strsp." AND specifications.id IN (".$strst.")";
}

$st = $pdoObj->query("$strsp");

$num=$st->rowCount();

$records = $st->fetchAll(PDO::FETCH_BOTH);
$flag=null;
echo "<table>";
for($i=0;$i<$num;$i++){
    if($i%5==0){
        echo "<tr>";
    }
    $tp=$records[$i][1];
    $t=$records[$i][0];
    
    echo "<td>";
    $id = urlencode($t);
    echo "<a href=kham.php?id=$id>";
    echo "<img src='$tp'>";
    echo "<br>";
    echo "<br>";
    echo $t;
    echo "</a>";
    echo "</td>";
    
    if($i%5==4){
        echo "</tr>";
    }

}
echo "</table>";


?>




</body>
</html>