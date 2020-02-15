
<!DOCTYPE html>
	<head>
		<title>
			registration form
		</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/registration.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-7"   >	
				    <img src="images/new_user.svg">
				</div>
				<div class="col-md-5 ">
					<div class="row">
						<div class="col-md-12">
                            <br>
							<h3>Registration form</h3>
						</div>
					</div>
					<hr>
					<form name="myForm" class="form-container" action="index.php" method="pos"t id="userForm">
                        <div class="row">
                            <label class="label col-md-4 control-label">Name</label>
                            <div class="col-md-8">
                                <input type="name" class="form-control" name="myName"   placeholder="name">
                                </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-4 control-label">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="Email"   placeholder="Email" >   
                                </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-4 control-label">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password"  placeholder="password">
                            </div>
                        </div>

                        <div class="row" >
                            <label class="label col-md-4 control-label">Retype password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control"  name="confirm"  placeholder="password" />
                            </div>
                        </div>
                    
                        <br>
                        <center>
                            <input class="submit btn btn-primary"  name="reg_user" type="submit" >
                        </center>      
                    </form>  
                </div>
            </div>
        </div> 	
        <div id="result"></div>
    </body>
</html>
 <?php

    require('db.php');
// connect to the database

// REGISTER USER
if (isset($_REQUEST["reg_user"])) {
  // receive all input values from the form
  
  $username = htmlspecialchars($_REQUEST['myName']);
  $email =  htmlspecialchars($_REQUEST['Email']);
  $password_1 = htmlspecialchars($_REQUEST['password']);
  $password_2 = htmlspecialchars($_REQUEST['confirm']); 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user_details (name, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	$result = mysqli_query($con,$query);
    echo "success";
  
}

?>


   