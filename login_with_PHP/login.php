<style type="text/css">

	th{
        text-align: right;
	}
	h3{
        text-align: center;
	}
	
</style>

<table cellpadding="5" cellspacing="10" align="center">
	<h2><center>login form using session and coockies with static values </center> </h2>
	<form method="post" action= "validate.php">
		<tr><th>UserName</th><td><input type="text" name="user"></td></tr>
		<tr><th>email</th><td><input type="text" name="email"></td></tr>
		<tr><th>Password</th><td><input type="Password" name="password"></td></tr>
		<tr><td colspan="1" align="center"></th><td><input type="checkbox" name="remember">Remember Me</td></tr>
		<tr><td colspan="2" align="right"></th><td><input type="submit" value= "Login"name="login"></td></tr>
        
	</form>
	 <form method= "post" action="mail.php">
		     <tr><td colspan="3" align="right"><input type="submit" value= "Send_Mail"name="Mail"></td></tr>
	    

	 </form>
</table>


