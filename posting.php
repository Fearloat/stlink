<?php
include'ceksesion.php';
include'db.php';
if ($_POST) {
	$title = $_POST['title'];
	$posting = $_POST['posting'];
	mysql_query("INSERT INTO posting values (NULL, '$title', '$posting')");
	$errors = 'berhasil';
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

  	<body style="background: url(img/cubes.png);">

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar">
						 	
						 </span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="" class="brand">STlink</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="dashboard.php">Home</a>
								</li>
								<li>
									<a href="posting.php">Posting</a>
								</li>
								<li>
									<a href="url.php">Link</a>
								</li>
								<li>
									<a href="logout.php">Logout</a>
								</li>
								</ul>
								</div>
						
					</div>
				</div>
				
			</div>
			Tittle
			<?php //Kalau Error
		    			if ( !empty($errors) )
							echo '<div class="label label-success">sukses</div><br>';
						?>
			<form method="post" action="">
			<input type="text" name="title" maxlength="100">
			<br />
			Artikel
			<br />
			<textarea style="width: 800px; height: 500px;" name="posting"></textarea>
			<br/>
			<input type="submit" value="Publish" class="btn btn-primary">

				
			</form>
		</div>
	</div>
</div>
<script src="js/jquery-1.8.2.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    	</body>
</html>