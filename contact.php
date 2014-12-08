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
				<form class = "form-horizontal">
                    <div class = "modal-body">                               
						<div class="row">
							<div class = "col-lg-12">   
						<div class = "form-group">                                                                                     							                                            
							<input type = "text" class = "form-control" id = "contact-name" placeholder = "Full Name">                                               
						</div>                                       
                        <div class = "form-group">                                                                                        
							<input type = "email" class = "form-control" id = "contact-email" placeholder = "you@example.com">                                                                                        
                        </div>                                       
                        <div class = "form-group">                                                                                                                                    
                            <textarea class = "form-control" rows = "8" placeholder="Your Message"></textarea>                                                                                      
                        </div>                                   
                    </div>
					</div>
                    <div class = "modal-footer">						
						<a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                        <button class = "btn btn-primary" type = "submit">Send</button>
                    </div>
				</form>
</body>
</html>