<html>
<head>
<link rel="icon" href="<?=PUBLIC_ROOT?>/assets/img/favicon.ico" type="image/x-icon" />
<title>Index Page</title>

<!-- BOOTSTRAP CSS -->
<link href="<?=PUBLIC_ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=PUBLIC_ROOT?>/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- MAIN CSS -->
<link href="<?=PUBLIC_ROOT?>/assets/css/styles.css" rel="stylesheet">
<link href="<?=PUBLIC_ROOT?>/assets/css/menu.css" rel="stylesheet">
<link href="<?=PUBLIC_ROOT?>/assets/css/header.css" rel="stylesheet">
</head>
<body>
<div id="header">
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div id="header-left">
				<a href="<?=PUBLIC_ROOT?>"><span class="glyphicon glyphicon-home"> Euromed2016</span></a>
			</div>
			<div id="header-right">
				<a href="<?=PUBLIC_ROOT?>"><span class="glyphicon glyphicon-log-in"> Log-in | </span></a>
				<a class="font_style" href="#" data-toggle="modal" data-target="#registerModal" style="text-decoration:none;"> Register</span></a>
			</div>
		</div>
	</nav>
</div>
<div class="container">
	<div class="row">
  	<div class="col-md-2">
	  	<a href="<?=PUBLIC_ROOT?>">
	  		<img src="<?=PUBLIC_ROOT?>/assets/img/logotrans.png" class="img-responsive logo" alt="Euromed Logo">
	  	</a>
  	</div>
  	<div class="col-md-6"></div>
  	<div class="col-md-4">
  		<div class="input-group">
      	<input type="text" class="form-control" placeholder="Search for...">
      	<span class="input-group-btn">
        	<button class="btn btn-primary" type="button">&nbsp<i class="fa fa-search" aria-hidden="true"></i></button>
      	</span>
    	</div>
    	<div class="social_box">
    		<ul class="list-inline">
    			<li>
    				<a href="https://www.facebook.com/666633476791951"><span class="fa fa-facebook"></span></span></a>
    			</li>
    			<li>
    				<a href="https://twitter.com/EuroMed2016"><span class="fa fa-twitter"></span></span></a>
    			</li>
    		</ul>
    	</div>
    </div>
	</div>
</div>
<?php require 'menu.php'; require 'account.php'; ?>