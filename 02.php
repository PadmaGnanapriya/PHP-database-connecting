<?php
  try {
    $conn = new PDO("mysql:host=localhost;dbname=world", "root", "");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br><br>';


    // $x= 'A'; 
    // for($i=0; $i<26; $i++) { echo $x++. "  ";};
    // echo "<br>";


    $x= 'A'; 
    for($i=0; $i<26; $i++) { echo "<a href=#>".$x++."</a>" ;};
    echo "<br>";

    $letter="j";

    $sql = "SELECT Name FROM country  WHERE Name like '$letter%'";


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll();
    foreach($result as $row){
        echo $row['Name']."<br>";
    }

   


    // foreach(range('A','Z') as $letter){
    //     echo "&nbsp; $letter &nbsp";
    // }


    // $sql = "SELECT Name FROM country WHERE continent='Asia'";

    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $result=$stmt->fetchAll();
    // foreach($result as $row){
    //     echo $row['Name']."<br>";
    // }
    
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