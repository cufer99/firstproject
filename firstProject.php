<!DOCTYPE html>
<html>
    <head>
        <title>First Project</title>
    </head>
<body>
<?php 
    include 'class/class_databaseConnection.php'; // connection to database
    $connect = new databaseConn();
    $connect->connection('localhost', 'firstproject', '7exrd72f', 'firstproject');
?>
</body>
</html>


