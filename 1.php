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