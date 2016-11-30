
		<div class="wrapper">
			<?php
			include("inc/connection.php");
			include("inc/functions.php");
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					$name = trim(filter_input(INPUT_POST,"nam",FILTER_SANITIZE_STRING));
					$from = trim(filter_input(INPUT_POST,"from",FILTER_SANITIZE_STRING));
					$dest = trim(filter_input(INPUT_POST,"dest",FILTER_SANITIZE_STRING));
					$date = trim(filter_input(INPUT_POST,"date",FILTER_SANITIZE_STRING));
					$class = trim(filter_input(INPUT_POST,"class",FILTER_SANITIZE_STRING));
					$tickets = trim(filter_input(INPUT_POST,"tickets",FILTER_SANITIZE_STRING));
					
					if($name == "" || $from == "" || $dest == "" || $class == "" || $tickets == "" || $date == ""){
						echo "To book, enter all details please!";
						exit;
						}
					if(strlen($name)<2){
						echo "name cannot have less than 2 characters";
						exit;
					}	
					if($from == $dest){
						echo "Your Destination cannot be the same as your place of departure";
						exit;
					}
					
					/***** Fares from Cape Town to Bulawayo *****/
					if($from == "Cape Town" && $dest == "Bulawayo" && $class == "Economy"){
						$amount = 150 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Bulawayo" && $class == "Business"){
						$amount = 180 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Bulawayo" && $class == "First Class"){
						$amount = 200 * $tickets;
					}
					
					/***** Fares from Cape Town to Johannesburg *****/
					if($from == "Cape Town" && $dest == "Johannesburg" && $class == "Economy"){
						$amount = 85 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Johannesburg" && $class == "Business"){
						$amount = 100 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Johannesburg" && $class == "First Class"){
						$amount = 130 * $tickets;
					}
					
					/***** Fares from Cape Town to Harare *****/
					if($from == "Cape Town" && $dest == "Harare" && $class == "Economy"){
						$amount = 150 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Harare" && $class == "Business"){
						$amount = 180 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Harare" && $class == "First Class"){
						$amount = 200 * $tickets;
					}
					
					/***** Fares from Cape Town to Victoria Falls *****/
					if($from == "Cape Town" && $dest == "Victoria Falls" && $class == "Economy"){
						$amount = 150 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Victoria Falls" && $class == "Business"){
						$amount = 180 * $tickets;
					}
					if($from == "Cape Town" && $dest == "Victoria Falls" && $class == "First Class"){
						$amount = 200 * $tickets;
					}		
										
					/***** Fares from Bulawayo to Cape Town *****/
					if($from == "Bulawayo" && $dest == "Cape Town" && $class == "Economy"){
						$amount = 150 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Cape Town" && $class == "Business"){
						$amount = 180 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Cape Town" && $class == "First Class"){
						$amount = 200 * $tickets;
					}
					
					/***** Fares from Bulawayo to Johannesburg *****/
					if($from == "Bulawayo" && $dest == "Johannesburg" && $class == "Economy"){
						$amount = 100 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Johannesburg" && $class == "Business"){
						$amount = 120 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Johannesburg" && $class == "First Class"){
						$amount = 150 * $tickets;
					}
					
					/***** Fares from Bulawayo to Harare *****/
					if($from == "Bulawayo" && $dest == "Harare" && $class == "Economy"){
						$amount = 65 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Harare" && $class == "Business"){
						$amount = 85 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Harare" && $class == "First Class"){
						$amount = 100 * $tickets;
					}
					
					/***** Fares from Bulawayo to Victoria Falls *****/
					if($from == "Bulawayo" && $dest == "Victoria Falls" && $class == "Economy"){
						$amount = 45 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Victoria Falls" && $class == "Business"){
						$amount = 65 * $tickets;
					}
					if($from == "Bulawayo" && $dest == "Victoria Falls" && $class == "First Class"){
						$amount = 85 * $tickets;
					}		
					
					/***** Fares from Harare to Cape Town *****/
					if($from == "Harare" && $dest == "Cape Town" && $class == "Economy"){
						$amount = 150 * $tickets;
					}
					if($from == "Harare" && $dest == "Cape Town" && $class == "Business"){
						$amount = 180 * $tickets;
					}
					if($from == "Harare" && $dest == "Cape Town" && $class == "First Class"){
						$amount = 200 * $tickets;
					}
					
					/***** Fares from Harare to Johannesburg *****/
					if($from == "Harare" && $dest == "Johannesburg" && $class == "Economy"){
						$amount = 100 * $tickets;
					}
					if($from == "Harare" && $dest == "Johannesburg" && $class == "Business"){
						$amount = 120 * $tickets;
					}
					if($from == "Harare" && $dest == "Johannesburg" && $class == "First Class"){
						$amount = 150 * $tickets;
					}
					
					/***** Fares from Harare to Bulawayo *****/
					if($from == "Harare" && $dest == "Bulawayo" && $class == "Economy"){
						$amount = 65 * $tickets;
					}
					if($from == "Harare" && $dest == "Bulawayo" && $class == "Business"){
						$amount = 85 * $tickets;
					}
					if($from == "Harare" && $dest == "Bulawayo" && $class == "First Class"){
						$amount = 100 * $tickets;
					}
					
					/***** Fares from Harare to Victoria Falls *****/
					if($from == "Harare" && $dest == "Victoria Falls" && $class == "Economy"){
						$amount = 85 * $tickets;
					}
					if($from == "Harare" && $dest == "Victoria Falls" && $class == "Business"){
						$amount = 100 * $tickets;
					}
					if($from == "Harare" && $dest == "Victoria Falls" && $class == "First Class"){
						$amount = 120 * $tickets;
					}
					
					/***** Fares from Victoria Falls to Cape Town *****/
					if($from == "Victoria Falls" && $dest == "Cape Town" && $class == "Economy"){
						$amount = 150 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Cape Town" && $class == "Business"){
						$amount = 180 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Cape Town" && $class == "First Class"){
						$amount = 200 * $tickets;
					}
					
					/***** Fares from Victoria Falls to Johannesburg *****/
					if($from == "Victoria Falls" && $dest == "Johannesburg" && $class == "Economy"){
						$amount = 100 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Johannesburg" && $class == "Business"){
						$amount = 120 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Johannesburg" && $class == "First Class"){
						$amount = 150 * $tickets;
					}
					
					/***** Fares from Victoria Falls to Harare *****/
					if($from == "Victoria Falls" && $dest == "Harare" && $class == "Economy"){
						$amount = 85 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Harare" && $class == "Business"){
						$amount = 100 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Harare" && $class == "First Class"){
						$amount = 120 * $tickets;
					}
					
					/***** Fares from Victoria Falls to Bulawayo *****/
					if($from == "Victoria Falls" && $dest == "Bulawayo" && $class == "Economy"){
						$amount = 45 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Bulawayo" && $class == "Business"){
						$amount = 65 * $tickets;
					}
					if($from == "Victoria Falls" && $dest == "Bulawayo" && $class == "First Class"){
						$amount = 85 * $tickets;
					}				
					
					/***** Fares from Johannesburg to Cape Town *****/
					if($from == "Johannesburg" && $dest == "Cape Town" && $class == "Economy"){
						$amount = 85 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Cape Town" && $class == "Business"){
						$amount = 100 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Cape Town" && $class == "First Class"){
						$amount = 130 * $tickets;
					}
					
					/***** Fares from Johannesburg to Victoria Falls *****/
					if($from == "Johannesburg" && $dest == "Victoria Falls" && $class == "Economy"){
						$amount = 100 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Victoria Falls" && $class == "Business"){
						$amount = 120 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Victoria Falls" && $class == "First Class"){
						$amount = 150 * $tickets;
					}
					
					/***** Fares from Johannesburg to Harare *****/
					if($from == "Johannesburg" && $dest == "Harare" && $class == "Economy"){
						$amount = 100 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Harare" && $class == "Business"){
						$amount = 120 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Harare" && $class == "First Class"){
						$amount = 150 * $tickets;
					}
					
					/***** Fares from Johannesburg to Bulawayo *****/
					if($from == "Johannesburg" && $dest == "Bulawayo" && $class == "Economy"){
						$amount = 100 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Bulawayo" && $class == "Business"){
						$amount = 120 * $tickets;
					}
					if($from == "Johannesburg" && $dest == "Bulawayo" && $class == "First Class"){
						$amount = 150 * $tickets;
					}
					
				}
				
				if(isset($_POST['Submit'])){
					try{
						$stmt = $db->prepare("INSERT INTO booking(nam, depart_from, destination, date, class, tickets, amount)
										VALUES(:nam, :from, :dest, :date, :class, :tickets, $amount)");
							$stmt->bindParam(':nam', $name,PDO::PARAM_STR);
							$stmt->bindParam(':from', $from,PDO::PARAM_STR);
							$stmt->bindParam(':dest',$dest,PDO::PARAM_STR);
							$stmt->bindParam(':date', $date,PDO::PARAM_STR);
							$stmt->bindParam(':class',$class,PDO::PARAM_STR);
							$stmt->bindParam(':tickets',$tickets,PDO::PARAM_STR);
							
							$stmt->execute();
							message_goto("You have successfully booked for your trip. We promise you an adventure of a lifetime. Your trip costs $".$amount,"customer_home.php");
						}
		
					catch(Exception $e){
						echo "Error" . $e->getMessage();
						}
						
					$db = null;
				}
			?>
						<div id = "para">
							<p><em>"Spread your wings, explore the world."</em></p> 
							<p>Where would you like to visit? Book Now!!!</p>
							<img src="img/booking.jpg"/>
						</div>

					<form method="post" action="">
						<table>
							<tr>
								<th><label for="name">Name*</label></th>
								<td><input type="text" id="name" name="nam" value="" /></td>
							</tr>
							<tr>
								<th><label for="from">From</label></th>
								<td><select id="from" name="from">
									<option value="">Select Your Destination</option>
									<option value="Bulawayo">Bulawayo</option>
									<option value="Cape Town">Cape Town</option>
									<option value="Johannesburg">Johannesburg</option>
									<option value="Harare">Harare</option>
									<option value="Victoria Falls">Victoria Falls</option>
								</select></td>
							</tr>
							<tr>
								<th><label for="dest">Destination</label></th>
								<td><select id="dest" name="dest">
									<option value="">Select Your Destination</option>
									<option value="Bulawayo">Bulawayo</option>
									<option value="Cape Town">Cape Town</option>
									<option value="Johannesburg">Johannesburg</option>
									<option value="Harare">Harare</option>
									<option value="Victoria Falls">Victoria Falls</option>
								</select></td>
							</tr>
							<tr>
								<th><label for="date">Journey Date</label></th>
								<td><input type="date" id="date" name="date"/></td>
							</tr>
							<tr>
								<th><label for="class">Class</label></th>
								<td><select id="class" name="class">
									<option value="">Select Class</option>
									<option value="Economy">Economy</option>
									<option value="Business">Business</option>
									<option value="First Class">First Class</option>
								</select></td>
							</tr>
							<tr>
								<th><label for="name">Number of Tickets</label></th>
								<td><select id="tickets" name="tickets">
									<option value="">Select Number of Tickets to order</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
									<option value="4">Four</option>
									<option value="5">Five</option>
									<option value="6">Six</option>
									<option value="7">Seven</option>
									<option value="8">Eight</option>
									<option value="9">Nine</option>
									<option value="10">Ten</option>
								</select></td>
							</tr>
						</table>
						<input type="submit" name="Submit" value="Submit" />
					</form>
						
				</div>
			</div>
