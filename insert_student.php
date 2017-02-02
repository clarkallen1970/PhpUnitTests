<?php
    include('open_db_connection.php');

    $firstname = "'".trim($_POST['firstname'])."'";
    $lastname = "'".trim($_POST['lastname'])."'"; 
    $credits = trim($_POST['credits']);        
    
    $sql = "insert into student (firstname, lastname, credits) values ($firstname, $lastname, $credits);";    

    if ($db->query($sql) === TRUE) {
        echo "Row inserted into the student table";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $db->close();
?> 

<p><a href="index.php">Home</a></p>