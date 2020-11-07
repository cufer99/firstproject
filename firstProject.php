<!DOCTYPE html>
<html>
    <head>
        <title>First Project</title>
    </head>
<body>
<?php 
   // include 'class/class_databaseConnection.php'; // connection to database
   // $connect = new DatabaseConn;
   // $connect->connection('localhost', 'firstproject', '7exrd72f', 'firstproject');
    include 'class/class_functions.php'; 
    include 'functions.php';
    $test = new DisplayContent;
    $test->get_description();
   
    // debug(); // function to print_r
?>
</body>
</html>


