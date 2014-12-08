<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width initial-scale=1"  charset="UTF-8"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" ></link>
	<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href="social-icon-footer.css" rel="stylesheet" text="text/css"></link>
	<link id="theme-style" href="style.css" rel="stylesheet" text="text/css"></link>
	<link href="modal_style.css" rel="stylesheet" text="text/css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body class="container">
	<header class="page-header" >
	<img src="../images/D2D_white.png" height="300px" id="header-img"></img>
	<input class="chg-thm" type="radio" name="chg-thm" id="thm-dark" value="dark" title="Dark Theme" >
	<br>
	<input class="chg-thm" type="radio" name="chg-thm" id="thm-light" value="light" title="Light Theme">
	</header>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<div class="collapse navbar-collapse" id="myNavbar">	  
			<ul class="nav navbar-nav" >
				<li class="active"><a href="Home.php">Home</a><li>	
				<li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown">Link2
					<span class="caret"><span></a>
						<ul class="dropdown-menu navbar-inverse navbar-nav">
							<li><a href="#">SubLink1</a></li>
							<li><a href="#">SubLink2</a></li>
						</ul>
				</li>
				<li><a>Link3</a></li>
				<li><a>Link4</a></li>
				<li><a>Link5</a></li>
			</ul>
				<ul id="navbar-right" class="nav  navbar-nav navbar-right" >
					<li><a href="Signup.php" data-toggle="modal" data-target="#Signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php" data-toggle="modal" data-target="#login" class="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="contact.php" data-toggle="modal" data-target="#contact"><span class="glyphicon glyphicon-earphone"></span></a></li>
				</ul>
			</div>	
		</div>
	</nav>				  
  
<!-- Modal -->  
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">  
    <div class="modal-dialog">  
        <div class="modal-content"></div>  
    </div>  
</div> 

<div class="modal fade" id="Signup" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">  
    <div class="modal-dialog">  
        <div class="modal-content"></div>  
    </div>  
</div>  

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">  
    <div class="modal-dialog">  
        <div class="modal-content"></div>  
    </div>  
</div>  