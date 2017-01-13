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
<div class="main_wrapper">
<div id="header">
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div id="header-left">
				<a href="<?=PUBLIC_ROOT?>" class="link_style"><span class="glyphicon glyphicon-home earth_color"></span>&nbspEuromed2016</a>
			</div>
			<div id="header-right">
      	<div id="logged-out-menu" style="display:none">
					<a href="#" class="link_style" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in earth_color"></span>&nbspLog-in</a> | 
					<a class="link_style" href="#" data-toggle="modal" data-target="#registerModal" style="text-decoration:none;"></span>Sign up</a>
        </div>
        <div id="logged-in-menu" style="display:none">
        	<a href="#" class="link_style">My Profile</a>
        </div>
			</div>
		</div>
	</nav>
</div>
<div class="container">
	<div class="row">
  	<div class="col-md-7">
	  	<a href="<?=PUBLIC_ROOT?>" class="logo">
	  		<img src="<?=PUBLIC_ROOT?>/assets/img/logo.png" class="img-responsive" alt="Euromed Logo">
	  	</a>
  	</div>
  	<div class="col-md-1"></div>
  	<div class="col-md-4">
            <form action="<?=PUBLIC_ROOT?>/base/search">
  		<div class="input-group">
      	<input type="text" name="keywords" class="form-control search" placeholder="Search for..." data-provide="typeahead">
      	<span class="input-group-btn">
        	<button class="btn btn-primary">&nbsp<i class="fa fa-search" aria-hidden="true"></i></button>
      	</span>
    	        </div>
            </form>
    	<div class="social_box pull-right">
    		<ul class="list-inline">
    			<li>
    				<a href="https://www.facebook.com/666633476791951" target="_blank"><span class="fa fa-facebook"></span></span></a>
    			</li>
    			<li>
    				<a href="https://twitter.com/EuroMed2016" target="_blank"><span class="fa fa-twitter"></span></span></a>
    			</li>
          <li>
            <a href="<?=PUBLIC_ROOT?>/base/contact" class="contact-link">Contact</a>
          </li>
    		</ul>
    	</div>
    </div>
	</div>
</div>
<?php require 'menu.php'; require 'account.php'; ?>
