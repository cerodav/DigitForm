<?php
class submission
{
	private function connect()
	{
		$username = "adminyBh3lc7";
		$password = "HLsSUbuh1h-x";

		try {
 		   $dbh = new PDO('mysql:host=OPENSHIFT_MYSQL_DB_HOST;dbname=digitalindia', $username, $password);
		} catch (PDOException $e) {
    		print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}

		return $dbh;
	}

	

	public function send($name,$category,$insti_details, $email, $mobile, $event1,$event2,$event3,$event4,$event5,$event6,$event7)
	{
		$dbh=$this->connect();
		//$message=$this->verify($email,$name,$category,$insti_details);

			try{
				
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);   
					$stmt = $dbh->prepare("INSERT INTO entries (name,category,institution_details,mobile_no,email_id,event1,event2,event3,event4,event5,event6,event7) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
					$stmt->bindParam(1, $name);
					$stmt->bindParam(2, $category);
					$stmt->bindParam(3, $insti_details);
					$stmt->bindParam(4, $mobile);
					$stmt->bindParam(5, $email);
					$stmt->bindParam(6, $event1);
					$stmt->bindParam(7, $event2);
					$stmt->bindParam(8, $event3);
					$stmt->bindParam(9, $event4);
					$stmt->bindParam(10, $event5);
					$stmt->bindParam(11, $event6);
					$stmt->bindParam(12, $event7);

					$stmt->execute();
				}

			catch(Exception $e)
			{
				var_dump($e->getMessage());
				die();
			}

			return "okay";

	
		
	}
}
?>
