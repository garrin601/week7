<html>
<body>

<?php 

$con = 'mysql:host=sql1.njit.edu;dbname=gcs23';
$name = 'gcs23';
$pass = 'trinidad6';




//Create PDO object
try
{
	$db = new PDO($con, $name, $pass);
		echo "<p>connected</p>";
}
		catch (PDOException $e)
		{
			$e_message = $e->getMessage();
				echo "<p>Could not connect: $e_message </p>";
		}

$q1 = "SELECT * FROM accounts WHERE id<6";
$q2 = $db->prepare($q1);
$q2->execute();
$resp = $q2->fetchAll();

 

tags::form();

foreach($resp as $r1)



{
	echo "<tr>";




	tags::data($r1['id']);
	tags::data($r1['email']);
	tags::data($r1['fname']);
	tags::data($r1['lname']);
	tags::data($r1['phone']);
	tags::data($r1['birthday']);
	tags::data($r1['gender']);
	tags::data($r1['password']);
	
	
	
	

}



class tags

{

	static public function form()

	{
		echo "<table>";
	}


	static public function data($text)
	
	{
		echo '<td>' . $text. '</td>';

	}








}


?>
</body>

</html>


