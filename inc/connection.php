	<?php
		try{
			$db = new PDO("mysql::host=localhost;dbname=flyagnes;port=3306","root","");
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
		
		catch(exception $e){
			echo "unable to connect to the database";
			echo $e->getMessage();
			exit;
		}
		
		
	?>
