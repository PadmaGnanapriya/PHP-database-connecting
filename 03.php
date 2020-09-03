<?php
	if(isset($_REQUEST['start']))
		$start=$_REQUEST['start'];
  try {
    $conn = new PDO("mysql:host=localhost;dbname=world", "root", "");

    
    echo 'Connected to the database.<br>';
	
	
	foreach(range('A','Z') as $letter){
		
		echo "&nbsp;<a href=03.php?start=".$letter.">".$letter."</a>&nbsp;";
	}
	echo"<br>";
	$val="Asia";
	
	
	if(isset($_REQUEST['start']))
		$sql="SELECT * FROM country WHERE name like '".$start."%'";
	else
		$sql="SELECT * FROM country";
	
	$stmt=$conn->prepare($sql);
	
	$stmt->execute();
	
	$result=$stmt->fetchAll();
	
	foreach($result as $row){
		
		echo $row['Name']."<br>";
		
	}
	
	
	
	
	
    $conn = null;

  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }




?>