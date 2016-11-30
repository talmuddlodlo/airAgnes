
<?php
	session_start();
	$pageTitle = "Log In";
	include("inc/header.php");
	include("inc/functions.php");
	include("inc/connection.php");
	
	if(isset($_POST['Submit'])){
		$errMsg = "";
		$email = trim($_POST['email']);
		$pass = trim($_POST['pass']);	
			if($email == ""){
				$errMsg = 'You must enter email<br>';
			} 
			if($pass == ""){
				$errMsg = 'Enter your password<br>';
			}
			if($errMsg ==''){
						$stmt = $db->prepare("SELECT * FROM customers WHERE email = :email AND pass = :pass");
								
								$stmt->bindParam(':email', $email, PDO::PARAM_STR);	
								$stmt->bindParam(':pass', $pass, PDO::PARAM_STR);	
								
								$stmt->execute();
								$results = $stmt->fetch(PDO::FETCH_ASSOC);
																									 
								if(count($results)>0){
									$_SESSION['name'] = $results['nam'];
									$_SESSION['sname'] = $results['sname'];
									$_SESSION['email'] = $results['email'];
									$_SESSION['addr'] = $results['address'];									
									$_SESSION['city'] = $results['city'];
									$_SESSION['prov'] = $results['province'];
									$_SESSION['zip'] = $results['zip'];
									$_SESSION['phone'] = $results['phone'];							
									
									header("location:customer_home.php");
									exit;
								}
								else{
									$errMsg =='Email and password are not found';
								}
			}
	}
					

	?> 
	
		<form method="post" action="">
		<p id="para">Sign in to book a flight</p>
			<table>
				<tr>
					<td><input type="email" name="email"  placeholder="Email" /></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Password" /></td>
				</tr>
			</table>
			<input type="submit" name="Submit" value="Log In" /><p><a href="reg.php">Not Yet Registered? Sign Up</a></p>
		</form>
			
<?php
include("inc/footer.php");
?>