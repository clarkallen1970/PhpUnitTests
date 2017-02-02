<?php
    include('open_db_connection.php');
    include('student.php');    
    
    $firstname = '';
    $lastname = '';  
    $credits = 0; 

    // Show all rows in the student table
    $sql = "SELECT id, firstname, lastname, credits FROM student ORDER BY lastname;";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //echo $row["id"] . " " . $row["firstname"]. " " . $row["lastname"] . " " . $row["credits"] ."<br>";
            
            $firstname =  $row["firstname"];
            $lastname =  $row["lastname"];
            $credits =  $row["credits"];            
            //echo $firstname.' '.$lastname.' '.$credits."<br>";
            
            $student = new Student($firstname,$lastname,$credits);
            //echo 'Debug 1'.'<br>';
            //echo "Class standing is a ".$student->classStanding($credits)."."."<br>";
            echo $student->getFirstName()." ".$student->getLastName()." is a ".$student->classStanding($credits)."."."<br>";            
            //echo "Class standing is a ".$student->classStanding($credits)."."."<br>";            
            
        }
    } else {
        echo "0 rows in the member table";
    } 
    
    $db->close();
    
?>     
    
<p><a href="index.php">Home</a></p>
