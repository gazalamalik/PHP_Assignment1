<?php
    $username= "Gazala Malik";
   $myemail = "gazalamalik2@gmail.com";
   $mypass ="12345";

  if(isset($_POST['login'])){
  	$email = $_POST['email'];
  	$pass = $_POST['password'];
  	$name = $_POST['user'];
  	

  	if($email == $myemail and $pass == $mypass and $name == $username){
        if(isset($_POST['remember'])) {
        	setcookie('email', $email, time()+60*60*7);
        	setcookie('password', $pass, time()+60*60*7);
        	setcookie('user', $name, time()+60*60*7);

            
        }
        session_start();
        $_SESSION['user']=$name;
        header("location: welcome.php");

       

  	}  
  	else{
  		echo "Email or Password is Invalid .<br> click here  to <a href= 'login.php'>try again</a> ";
  	
  	}


   }else{
   	header("location:login.php");
   }
?>
