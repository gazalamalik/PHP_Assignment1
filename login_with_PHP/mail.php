<style type="text/css">

	th{
        text-align: right;
	}
	h3{
        text-align: center;
	}
	
</style>

<table cellpadding="5" cellspacing="10" align="center">
	<h2><center>Send Email.. </center> </h2>
	<form method="post" action= "validate.php">

		<tr><th>Name</th><td><input type="text" name="user"></td></tr>
		<tr><th>email</th><td><input type="text" name="email"></td></tr>
		<tr><th>Subject</th><td><input type="text" name="sub"></td></tr>

		<center><p>Message</p>
		<textarea id="body" rows="5" placeholder="type Message"></textarea></center>

	</form>

		
	    <form method="post" action= "login.php">
		
		<tr><td colspan="2" align="right"></th><td><input type="submit" value= "cancel"name="cancel"></td></tr>

		</form>
	

	</form>
	 <form method= "post" action="mail2.php">
		     <tr><td colspan="3" align="right"><input type="button" onclick=" sendEmail()" value= "Send an Email"name="Mail"></td></tr>
	    

	 </form>

	 <script src= "https://code.jquery.com/jquery-3.4.1.min.js"></script>
	 <script type="trxt/javaScript">
	 	function sendEmail(){
	 	   var name= $("#name");
	 	   var email = $("#email");
	 	   var subject = $("#subject");

	 	   var body = $("#body");

	 	if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body) ){

            $.ajax({


        })

	 }
	 }
	 	
	 </script>  

</table>


