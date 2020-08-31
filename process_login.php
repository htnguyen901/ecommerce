<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page

include "db.php";

if(isset($_POST['login'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$get_admin = "select * from adminaccount where username= '$username'";
	
	$run_admin=mysqli_query($con,$get_admin);
	
	if(mysqli_num_rows($run_admin)>0)
	{
		$log_admin = "select * from adminaccount where username= 
                '$username' and password='$password'"; 
				
        $logged_admin = mysqli_query($con, $log_admin); 
		
		if(mysqli_num_rows($logged_admin)==1)
		{
			header("location:admin/admin_index.php");
			}
		else
		{
			echo 'Username or Password incorrect';
			header("location: login_form.php");
			}
		
	}
	else{
          
          
        $log_in = "select * from useraccount where user_name= 
                '$username' and pass_word='$password'"; 
				
        $logged_in = mysqli_query($con, $log_in); 
   
        // entered username exists 
			if (mysqli_num_rows($logged_in) == 1) { 
				  
				// Storing username in session variable 
				$_SESSION['username'] = $username; 
				
				  
				// Log in success -> head to index page
				header('location: index.php'); 
			} 
			else { 
				  
				// If the username and password doesn't match 
				echo "Username or password incorrect"; 
				header('location: login_form.php');
			} 
	}
    }
?>