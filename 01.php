<?php

    // echo "PHP";
    $num= array(5,6,7,8,9,10);
    $number[0]=5;
    $number[1]=6;
    $number[2]=7;
    $number[3]=3;
    $number[4]=1;

    foreach($number as $x){
        echo "Value is $x <br>";
    }
    $user = "root"; 
    $password = ""; 
    $host = "localhost"; 
    
    $connection= mysql_connect ($host, $user, $password);
    if (!$connection)
    {
    die ('Could not connect:' . mysql_error());
    }
    
    
    
    $showtables= mysql_query("SHOW TABLES FROM database_name");
    
    while($table = mysql_fetch_array($showtables)) { // go through each row that was returned in $result
        echo($table[0] . "<br>");    // print the table that was returned on that row.
    }
}

?>