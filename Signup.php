<html>
<head>

</head>
<body>
	<div class = "modal-header">
		<div class="form-title">
			<h4 >Sign Up in </h4>
		</div>
		<div class="close-btn">
				<button type="button" class="btn close-btn" data-dismiss="modal" >&times;</button>			
		</div>
		<div class="clear-fix"></div>
	</div>
				<form class = "form-horizontal" action="signup_success.php">
                    <div class = "modal-body">                               
						
						<div class = "form-group">                                                                                     
							<div class = "col-lg-12">                                               
							<input type="text" class="form-control" id="first_name" name="first_name"  placeholder="First Name" required autofocus />                                             
							</div>
						</div>                                       
                        <div class = "form-group">                                           
							<div class = "col-lg-12">                                               
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required />                                              
							</div>                                           
                        </div>                                       
                        <div class = "form-group">                                                                                      
                            <div class = "col-lg-12">                                               
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>                                              
                            </div>                                           
                        </div> 
                        <div class = "form-group">                                                                                      
                            <div class = "col-lg-12">                                               
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>                                               
                            </div>                                           
                        </div>  
                        <div class = "form-group">                                                                                      
                            <div class = "col-lg-12">                                               
                            <input type="email" class="form-control"  id="email" name="email" placeholder="Email ID" required/>                                               
                            </div>                                           
                        </div>  						
                    </div>
                    <div class = "modal-footer">						
						<a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                        <input type="submit" class="btn btn-primary" id="submit" value="Submit" name="submit">
                    </div>
				</form>
</body>
</html>