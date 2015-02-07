<?php

include'db.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT url.url, posting.title, posting.konten FROM url Inner Join posting on url.id_posting = posting.id where url.id = '$id'";
	$hasil=@mysql_query($query);
	$url=@mysql_result($hasil,0,0);
	$title=@mysql_result($hasil,0,1);
	$konten=@mysql_result($hasil, 0,2);

}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <title>Stlink</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Le styles -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <style>
	    	body {
	    		padding-top: 20px; /* 60px to make the container go all the way to the bottom of the topbar */

	      	}
	    </style>
	    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	    <link href="css/font-awesome.css" rel="stylesheet">
	   	<link href="css/custom.css" rel="stylesheet">
	    <link href="css/animate.min.css" rel="stylesheet">
	    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

    	<!-- Le fav and touch icons -->
    	<link rel="shortcut icon" href="ico/favicon.ico" /> 
  	</head>


 	<body style="background: #fff;">
 	<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span>
						 <span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="st.inezshop.com" class="brand">STlink</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							
						</div>
						
					</div>
				</div>
				
			</div>
	 <div  align="center">
	    <div class="container-fluid" style="background: url(img/cubes.png); width: 800px; text-align: center;">
	<div class="row-fluid">
		<div class="span6">
		<br>
		<center>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- dddd -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-3963187962572012"
     data-ad-slot="5031773689"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		</center>
		<br>
		</div>
		<div class="span6">
		<br>
		<center>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- dibawah posting -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-3963187962572012"
     data-ad-slot="2908166081"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		</center>
		<br>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
		<a class="btn btn-success" href="<?php
		echo $url;
		?>">Direct Link</a>
		<br>
		<br>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
		<center>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- banner listanime.com -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3963187962572012"
     data-ad-slot="1248132883"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		</center>
		</div>
	</div>
	
	<div class="row-fluid" style="text-align: left;">
		<div class="span12">

		<?php
		echo "<br>";
		echo "<h1>".$title."</h1>";
		echo "<br>";
		echo $konten;
		?>
		<hr>
		You are about to be redirected to another page. We are not responisible for the content of that page or the consequences it may have on you.
		
		</div>
	</div>
</div>
</div>

	    <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="js/jquery-1.8.2.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
  	</body>
</html>