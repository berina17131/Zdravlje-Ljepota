<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width">
<TITLE>Zdravlje&amp;Ljepota</TITLE>
<link rel="stylesheet" type="text/css" href="prijava.css">
</HEAD>
<BODY> 
<br>
<?php
          session_start();
		  
		  
		  
		  
		  
          if (isset($_SESSION['username']))
              $username = $_SESSION['username'];
		  else if (isset($_REQUEST['username'])) {
                    if ($_REQUEST['username'] === "admin" && $_REQUEST['password'] === "tajna")
                    $username = $_REQUEST['username'];
		  }
          else
	               print “Greska!”;

        $_SESSION['username'] = $username;











?>







<div class = "four" id = "prijava_forma">
        <form class ="prijava_form" id = "formaPrijava" action="prijava.php" method="post">
		<table>
				<tr>
					<td> <label> Username: </label></td>
					<td> <input type="text" name="username" id = "Username" ></td>
				</tr>
				
				<tr>
				    <td></td>
					<td><div id = "usernameGreska"></div></td>
				</tr>
				
				<tr>
					<td> <label> Password:  </label></td>
					<td> <input type="text" name="password" id = "Password"><td>
				</tr>
				
				<tr>
				    <td></td>
					<td><div id = "passwordGreska"></div></td>
				</tr>
				
				<tr>
					<td> <br> <input type="button" value="Registruj se" class="dugme" id = "dugme" href = "registracija.php"></td>
					<td> <br> <input type="submit" value="Prijavi se" class="dugme" id = "dugme"> </td>
				</tr>
			</table>
		</form>
</div>







</BODY> 
</HTML>