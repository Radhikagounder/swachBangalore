<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	

  
        <meta charset="utf-8"> 
        <title>Swachh Bangalore</title>         
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap"/> 
        <meta name="description" content="My new website"/> 
        <link rel="shortcut icon" href="ico/favicon.png"> 
        <!-- Core CSS -->         
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet"> 
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet"> 
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"> 
        <!-- Style Library -->         
        <link href="css/style-library-1.css" rel="stylesheet"> 
        <link href="css/plugins.css" rel="stylesheet"> 
        <link href="css/blocks.css" rel="stylesheet"> 
        <link href="css/custom.css" rel="stylesheet"> 
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->         
    </head>     
    <body data-spy="scroll" data-target="nav" style=" background-image:url('pal.jpg');"> 
        <header id="header-1" class="soft-scroll header-1"> 
            <!-- Navbar -->             
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned"> 
                <div class="container"> 
                    <!-- Brand and toggle -->                     
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>                         
                        <a href="#"> 
                            <img src="logo.jpeg" class="brand-img img-responsive"> 
                        </a>                         
                    </div>                     
                    <!-- Navigation -->                     
                    <div class="collapse navbar-collapse"> 
                        <ul class="nav navbar-nav navbar-right"> 
                            <li class="active nav-item"> 
                                <a href="home.html">Home</a> 
                            </li>                             
                            <li class="nav-item"> 
                                <a href="feature.html">Features</a> 
                            </li>                             
                            <li class="nav-item"> 
                                <a href="about.html">about</a> 
   
                            </li>                             
                            <li class="nav-item dropdown"> 
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">login <i class="fa fa-angle-down"></i></a> 
                                <ul class="dropdown-menu"> 
                                    <li> 
                                        <a href="login/admin.html">Admin</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="register.php">volunteer</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="login/initiator.html">initiator</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="login/sponsoror.html">sponsoror</a> 
                                    </li>                                     
                                </ul>                                 
                            </li>                             
                            <!--//dropdown-->                             
                            <li class="nav-item"> 
                                <a href="contact.html">Contact Us</a> 
                            </li>                             
                        </ul>                         
                        <!--//nav-->                         
                    </div>                     
                    <!--// End Navigation -->                     
                </div>                 
                <!--// End Container -->                 
            </nav>             
            <!--// End Navbar -->             
        </header>         
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="js/plugins.js"></script>         
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>         
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
       


	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>