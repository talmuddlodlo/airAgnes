	
	<?php
		$pageTitle = "tutor";
		$section = NULL;
		include("inc/header.php");
		include("inc/connection.php"); 
	?>
	<div class="section catalog random">

			<div class="wrapper">
						
			<?php 						
							if($_SERVER["REQUEST_METHOD"]=="POST"){
									$sex = trim(filter_input(INPUT_POST,"sex",FILTER_SANITIZE_STRING));
									$addr = trim(filter_input(INPUT_POST,"addr",FILTER_SANITIZE_STRING));
									$city = trim(filter_input(INPUT_POST,"city",FILTER_SANITIZE_STRING));
									$prov = trim(filter_input(INPUT_POST,"prov",FILTER_SANITIZE_STRING));
									$subj = trim(filter_input(INPUT_POST,"subj",FILTER_SANITIZE_STRING));
									
									if($sex == "" || $addr == "" || $city == "" || $prov == "" || $subj == "" ){
										echo "enter all details please!";
										exit;
									}
									
						}
						
						if(isset($_POST['Submit'])){
						try{
							$stmt = $db->prepare("INSERT INTO tutors(sex, address, city, province, subject)
											VALUES(:sex, :addr, :city, :prov, :subj)");
								$stmt->bindParam(':sex',$sex,PDO::PARAM_STR);
								$stmt->bindParam(':addr',$addr,PDO::PARAM_STR);
								$stmt->bindParam(':city',$city,PDO::PARAM_STR);
								$stmt->bindParam(':prov',$prov,PDO::PARAM_STR);
								$stmt->bindParam(':subj',$subj,PDO::PARAM_STR);
								
								$stmt->execute();
								echo "New record created successfully";
						}
						
						catch(Exception $e){
							echo "Error" . $e->getMessage();
						}
						$db = null;
						}
					?>

					<h2>Experienced in teaching? Apply to be a tutor</h2>
					<div id = "para">
						<p>Are you passionate about teaching. Turn your passion to a source of income and earn extra money in your free time while you make a social impact in your community.</p> 
						<p>Get Started for free</p>
					</div>

				<form method="post" action="tutor_reg1.php">
					<table>
						 <tr>
							<th><label for="address">Home Address*</label></th>
							<td><input type="text" name="addr" value="" /></td>
						</tr>
						 <tr>
							<th><label for="city">City*</label></th>
							<td><input type="text" id="city" name="city" value="" /></td>
						</tr>
						 <tr>
							<th><label for="province">Province*</label></th>
							<td><select id="province" name="prov">
								<option value="">Select One</option>
								<option value="Harare">Harare</option>
								<option value="Bulawayo">Bulawayo</option>
								<option value="Midlands">Midlands</option>
								<option value="Masvingo">Masvingo</option>
								<option value="Manicaland">Manicaland</option>
								<option value="Matebeleland North">Matebeleland North</option>
								<option value="Matebeleland South">Matebeleland South</option>
								<option value="Mashonaland Central">Mashonaland Central</option>
								<option value="Mashonaland West">Mashonaland West</option>
								<option value="Mashonaland East">Mashonaland East</option>
							</select></td>
						</tr>
						<tr>
							<th><label for="category">Level of Education*</label></th>
							<td><select id="category" name="level">
								<option value="">Select One</option>
								<option value="Alevel">A'level</option>
								<option value="Certificate">Certificate</option>
								<option value="Diploma">Diploma</option>
								<option value="Bachelors">Bachelors</option>
								<option value="Hounors">Honours</option>
								<option value="Masters">Masters</option>
								<option value="Doctorate">Doctorate</option>
								<option value="Professor">Professor</option>
							</select></td>
						</tr>
						<tr>
							<th><label for="sex">Sex*</label></th>
							<td><select id="sex" name="sex">
								<option value="">Select One</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select></td>
						</tr>
						<tr>
							<th>
								<label for="subject">Subject</label>
							</th>
							<td>
								<select name="subj" id="subject">
									<option value="">Select One</option>
									<optgroup label="Sciences">
										<option value="Mathematics">Mathematics</option>
										<option value="Physics">Physics</option>
										<option value="Coding">Computer Coding</option>
										<option value="Repair">Computer Repair</option>
										<option value="Cisco">Cisco</option>
										<option value="Oracle">Oracle</option>
										<option value="Biology">Biology</option>
										<option value="Chemistry">Chemistry</option>                     
									</optgroup>
									<optgroup label="Arts and Social Sciences">
										<option value="History">History</option>
										<option value="Psychology">Psychology</option>
										<option value="Shona">Shona</option>
										<option value="Sociology">Sociology</option>
										<option value="Divinity">Divinity</option>
										<option value="Animation">Animation</option>
										<option value="Graphics">Graphics</option>
										<option value="Fitness Trainer">Fitness Trainer</option>
									</optgroup>
									<optgroup label="Music">
										<option value="Guitar">Guitar</option>
										<option value="Harp">Harp</option>
										<option value="Cello">Cello</option>
										<option value="Violin">Violin</option>
										<option value="Piano">Piano</option>
										<option value="Flute">Flute</option>
										<option value="Clarinet">Clarinet</option>
										<option value="Voice Lessons">Voice lessons</option>
										<option value="Trombone">Trombone</option>
										<option value="Trumpet">Trumpet</option>
										<option value="French Horn">French horn</option>
										<option value="Guitar">Guitar</option>
									</optgroup>
								</select>
							</td>
						</tr> 
					</table>
					<input type="submit" name="Submit" value="Send" />
				</form>
					
			</div>			
		</div>

<?php include("inc/footer.php"); ?>