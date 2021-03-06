<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- Mobile viewport optimized: h5bp.com/viewport -->
   <meta name="viewport" content="width=device-width">

   <title>Hotels</title>

   <meta name="robots" content="index, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface." />
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html" />
   <meta name="author" content="AozoraLabs by Marcello Palmitessa"/>
   <link rel="author" href="https://plus.google.com/117689250782136016574/about">

   <!-- remove or comment this line if you want to use the local fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">

   <!--  these two css are to use only for documentation -->
   <link rel="stylesheet" type="text/css" href="assets/css/site.css">

   <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  
   <!-- All JavaScript at the bottom, except for Modernizr and Respond.
      Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
      For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
   <script src="assets/js/modernizr-2.6.2.min.js"></script>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3182578-6']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
   </script>
</head>

<body>
   <!--[if lt IE 7]>
   <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
   <![endif]-->

   <!-- Header
   ================================================== -->
   <header id="nav-bar" class="container">
      <div class="row">
         <div class="span12">
            <div id="header-container">
               <a id="backbutton" class="win-backbutton" href="./index.html"></a>
               <!--<h5>Hotels</h5>-->
               <a class="header-dropdown accent-color" href="#" >
                
               </a>
            </div>
         </div>
      </div>
   </header>
   
   <div class="container">
      <div class="row">
         <div class="span12">
   
            <h1>HOTELS <small></small></h1>
			
			
			
			<div align="center" style="opacity:0.7;border-radius:30px;border:10px solid #ffffff;background-color:#ffffff;width=800px">
     
     
<br><br>


<?php 
include 'connection.php';
session_start();
$s=$_SESSION['state'];
echo "User selected State is= ".$s;

//echo $pt=$_REQUEST['myInputName'];

//$sql=mysql_query("INSERT INTO prefer(myInputName) VALUES ('$s')") ;
 echo "<br>";

 //var_dump($s);
$data=mysql_query("SELECT DISTINCT City FROM tourguide WHERE STATE='$s'");
	 echo "Your Correspondence Hotels are given below<br>"; 
	//$info=mysql_fetch_array($data))
?>

<html>
<head>

<head>

  <script type="text/javascript">

function disp(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("district").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("district").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","tour.php?q="+str,true);
xmlhttp.send();
}

  </script>

  <script>


function disp1(str)
{
 // var v=<?php echo $s;?>
var xmlhttp;    
if (str=="")
  {
  document.getElementById("type").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("type").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","agency.php?q="+str,true);
xmlhttp.send();
}
</script>








 <script>


function disp3(str)
{
 // var v=<?php echo $s;?>
var xmlhttp;    
if (str=="")
  {
  document.getElementById("hotel").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("hotel").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","process3.php?q="+str,true);
xmlhttp.send();
}
</script>








</head>
<body>
<form action="process2.php" method="POST">
<?php
	echo "<select name=\"District\" onchange=\"disp(this.value)\">"; // Open your drop down box
      //  echo $a=$_REQUEST['hotelname'];
// Loop through the query results, outputing the options one by one
    echo "<option value=>Select District</option>";
while( $row = mysql_fetch_array( $data )) 
{
   echo "<option value='".$row['City']."'>".$row['City']."</option>";
}

echo "</select>";// Close your drop down box

		
echo "<br>";
	//echo "The total hotels on your selected State are=$i";

?>

</form>
<div id="district"></div>

</body>
</html>



<!--<html>
<body>
<form action="process2.php" method="post">
<button type="submit">submit</button>
</form>

</body>
</html>-->



</p>
<br>
</div>
			
			
			
			
			
			
			
            <!--<p class="lead">
               Early in 2012, when Microsoft released the first beta of Windows 8 I finally had the opportunity to try the "Metro UI" (now renamed to... Windows 8 App Store style).
               At that time the UI guidelines was almost done, and also the "direction" set by microsoft was clear. I looked for other references of Metro style around the web, and there was nothing or little info apart the official one.
               <br/>
               So I had the idea "why not recreate in pure HTML5/CSS3 the win 8 style ?". I was already working with the beautiful Twitter Bootstrap framework and I thought that it was relatively simple to customize it to recreate a metro style.
               So... I started it.
               <br/>
               At the same time I found the project MetroUI-CSS, by Sergey Pimenov, that evidently have had the same idea, but with some missing things from the original Metro guidelines, but his development was already ahead of mine.
               So, that's the story that started all about BootMetro!
            </p>-->
   
            <!--<h2>Author</h2>
            <p class="lead">
               I'm <a href="http://www.marcellop.com/">Marcello Palmitessa</a>, an italian developer, curious designer, and tech geek.
            </p>
   
            <h2>Contributors <small></small></h2>
            <p class="lead">
               I wish to thank Alexander Finger &amp; David Smith for their support and all the githubbers who keep me on the road to improve the project.
            </p>-->
   
         </div>
      </div>
   </div>
   <div id="charms" class="win-ui-dark slide">
   
      <div id="theme-charms-section" class="charms-section">
         <div class="charms-header">
            <a href="#" class="close-charms win-backbutton"></a>
            <h2>Settings</h2>
         </div>
   
         <div class="row-fluid">
            <div class="span12">
   
               <form class="">
                  <label for="win-theme-select">Change theme:</label>
                  <select id="win-theme-select" class="">
                     <option value="metro-ui-light">Light</option>
                     <option value="metro-ui-dark">Dark</option>
                  </select>
               </form>
   
            </div>
         </div>
      </div>
   
   </div>

   <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script>window.jQuery || document.write("<script src='assets/js/jquery-1.8.3.min.js'>\x3C/script>")</script>

   <!--[if IE 7]>
   <script type="text/javascript" src="assets/js/bootmetro-icons-ie7.js">
   <![endif]-->

   <script type="text/javascript" src="assets/js/google-code-prettify/prettify.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="assets/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="assets/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/js/demo.js"></script>
   <script type="text/javascript" src="assets/js/holder.js"></script>
   <script type="text/javascript">
      $('.panorama').panorama({
         nicescroll: true,
         showscrollbuttons: true,
         keyboard: true
      });

      $('#pivot').pivot();
   </script>
</body>
</html>
