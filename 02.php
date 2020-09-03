<?php
  try {
    $conn = new PDO("mysql:host=localhost;dbname=world", "root", "");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';

    $sql = "SELECT Name FROM country WHERE Name like 'S%' LIMIT 5";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll();
    foreach($result as $row){
        echo $row['Name']."<br>";
    }
    
    // print "Employee Name:<br>";
    // foreach ($conn->query($sql) as $row) {
    //     print $row['name'] . "<br>";
    // }
    // $conn = null;

  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }
?>