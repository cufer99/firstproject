<!DOCTYPE html>
<html lang = en>
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
    echo '<style>';
    include 'css/style.css';
    echo '</style>';
    $test = new DisplayContent;
  //  $test->get_description();
    foreach ($test->get_description() as  $value) { // for each news array value adds html

        echo '<div>';
        echo '<h1>';
        echo $value['title'];
        echo '<br>';
        echo '</h1>';

        echo '<p>';
        echo  $value['description'] . " ";
        echo '<br>';
        echo '</p>';
    }
    
      //debug($_SERVER["REQUEST_METHOD"]); // function to print_r
      $test->formInsert();

?>
<div>
<form method="post">
<p>Name : <input type="text" name="name"><br/></p>
<p>Lastname : <input type="text" name="lname"><br/></p>
<p>E-mail : <input type="text" name="email"><br/></p>
<p>age : <input type="int" name="age"><br/></p>
<p><input type="submit" value = "Submit"></p>
</form>
</div>
</body>
</html>


