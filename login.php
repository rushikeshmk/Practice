<html>
<head>
<link href="modal_style.css" rel="stylesheet">
</head>
<body>
	<div class = "modal-header">
		<div class="form-title">
			<h4 >Log in </h4>
		</div>
		<div class="close-btn">
				<button type="button" class="btn close-btn" data-dismiss="modal" >&times;</button>			
		</div>
		<div class="clear-fix"></div>
	</div>
<FORM action="index.php" method="POST" role="form" class="form-horizontal">
<div class="modal-body">
	<div class="form-group" >
		<input type="text" class="form-control" name="username" placeholder="Username" required autofocus />
	</div>
	<div class="form-group" >
		<input type="password" class="form-control" name="password" placeholder="Password" required />
	</div>
<div class="modal-footer">
<a class = "btn btn-default" data-dismiss = "modal">Close</a> 
<input type="submit" class="btn btn-primary" value="Log In" name="submit" ><a href="Signup.php" class="btn btn-primary">Sign Up</a>  
</div>
</FORM>				
</body>
</html>