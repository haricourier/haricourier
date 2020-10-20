<!doctype html>
<html>
<head>
<title>Hari Courier</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hari Courier" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link id="SPCssRegistration2" rel="stylesheet" type="text/css" href="https://www.indiapost.gov.in/_layouts/15/DOP.Portal.UILayer/styles/bootstrap.min.css">
</head>
<body>

<div class="header">
	<h1>Hari Courier</h1>
</div>

 

<form action="http://www.haricourier.xyz/track" target="_blank" type="GET">

  <label>Enter AWB Number <input type="search" name="q"></label>
  <input type="submit" value="Go">


<?php
$dir = "track(/page/)";
if (is_dir($dir)) {
if ($dh = opendir($dir)) {
    while (($file = readdir($dh)) !== false) {
        if($file == $_POST['search']){
            echo('<a href="'.$dir . $file.'">'. $file .'</a>'."\n");
        }
    }
    closedir($dh);
}
}
?>
       </div>

	</form>
</div>
</body>
</html>