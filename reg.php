	<?php 
	include("inc/header.php");
	include("inc/connection.php"); 
	include("inc/functions.php");
		$pageTitle = "register";
		$section = NULL;
	?>


		<div class="section catalog random">

			<div class="wrapper">
				<?php
							if($_SERVER["REQUEST_METHOD"]=="POST"){
					$name = trim(filter_input(INPUT_POST,"nam",FILTER_SANITIZE_STRING));
					$sname = trim(filter_input(INPUT_POST,"snam",FILTER_SANITIZE_STRING));
					$addr = trim(filter_input(INPUT_POST,"addr",FILTER_SANITIZE_STRING));
					$city = trim(filter_input(INPUT_POST,"city",FILTER_SANITIZE_STRING));
					$prov = trim(filter_input(INPUT_POST,"prov",FILTER_SANITIZE_STRING));
					$zip = trim(filter_input(INPUT_POST,"zip",FILTER_SANITIZE_STRING));
					$phone = trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_STRING));
					$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));					
					$pass = trim(filter_input(INPUT_POST,"pass",FILTER_SANITIZE_STRING));
					$cpass = trim(filter_input(INPUT_POST,"cpass",FILTER_SANITIZE_STRING));
					if($name == "" || $sname == "" || $phone == "" || $email == "" || $addr == "" || $city == "" || $prov == "" || $pass == "" || $cpass == "" ){
						echo "enter all details please!";
						exit;
					}
					
									if(strlen($name)<2){
										echo "name cannot have less than 2 characters";
										exit;
									}
									if(is_numeric($name)){
										echo "name cannot be numbers";
										exit;
									}
									if(strlen($sname)<2){
										echo "Surname cannot have less than 2 characters";
										exit;
									}
									if(is_numeric($sname)){
										echo "Surname cannot be numbers";
										exit;
									}
									if(strlen($pass)<7){
										echo "Password must be 6 or more characters";
										exit;
									}
									if($pass != $cpass){
										echo "password does not match";
										exit;
									}
					
		}
		
		if(isset($_POST['Submit'])){
		try{
			$stmt = $db->prepare("INSERT INTO customers(nam, sname, address, city, province, zip, phone, email, pass)
							VALUES(:nam, :sname, :addr, :city, :prov, :zip, :phone, :email, :pass)");
				$stmt->bindParam(':nam', $name,PDO::PARAM_STR);
				$stmt->bindParam(':sname',$sname,PDO::PARAM_STR);
				$stmt->bindParam(':addr',$addr,PDO::PARAM_STR);
				$stmt->bindParam(':city',$city,PDO::PARAM_STR);
				$stmt->bindParam(':prov',$prov,PDO::PARAM_STR);
				$stmt->bindParam(':zip',$zip,PDO::PARAM_STR);
				$stmt->bindParam(':phone',$phone,PDO::PARAM_INT);
				$stmt->bindParam(':email',$email,PDO::PARAM_STR);				
				$stmt->bindParam(':pass',$pass,PDO::PARAM_STR);
				
				$stmt->execute();
				message_goto("Your details have been uploaded. You are now registered, Sign in and book a flight","index.php");
		}
		
		catch(Exception $e){
			echo "Error" . $e->getMessage();
		}
		$db = null;
		}
				?>
				

				<p id="para">We at flyAgnes offer special services at affordable services?<br/>Register now to be part of our community</p>
						
					<form method="post" action="">
						<table>
							<tr>
								<th><label for="name">Name*</label></th>
								<td><input type="text" id="name" name="nam" value="" /></td>
							</tr>
							<tr>
								<th><label for="name">Surname*</label></th>
								<td><input type="text" id="sname" name="snam" value="" /></td>
							</tr>
							<tr>
								<th><label for="address">Home Address*</label></th>
								<td><input type="text" id="addr" name="addr" value="" /></td>
							</tr>
							<tr>
								<th><label for="city">City*</label></th>
								<td><input type="text" id="city" name="city" value="" /></td>
							</tr>
							<tr>
								<th><label for="city">State</label></th>
								<td><input type="text" id="prov" name="prov" value="" /></td>
							</tr>
							<tr>
								<th><label for="city">Zip Code</label></th>
								<td><input type="text" id="zip" name="zip" placeholder="eg +27" /></td>
							</tr>
							<tr>
								<th><label for="name">Phone Number*</label></th>
								<td><input type="text" id="phone" name="phone" placeholder="777094656" /></td>
							</tr>
							<tr>
								<th><label for="email">Email*</label></th>
								<td><input type="email" id="email" name="email" placeholder="enter E-mail" /></td>
							</tr>
							<tr>
							<th><label for="email">Password*</label></th>
							<td><input type="password" id="pass" name="pass" placeholder="enter your password" /></td>
						</tr>
						<tr>
							<th><label for="email">Confirm Password*</label></th>
							<td><input type="password" id="cpass" name="cpass" value="" /></td>
						</tr>							 
							
						</table>
						<input type="submit" name="Submit" value="Send" />
					</form>
					<p>To help you make the most out of your Executive Club membership, we will be in touch with you regarding special offers and other news from flyAgnes and the flyAgnes group. 
					This will include giving you opportunities to increase the Avios you can earn, enabling you to enjoy a reward flight faster.</p>
						
				</div>
			</div>

	<?php include("inc/footer.php"); ?>