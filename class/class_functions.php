<?php
class DisplayContent {
    private $db;
    public function __construct()
    {
        include 'class_databaseConnection.php';
        $this->db = new db("localhost", "firstproject", "7exrd72f", "firstproject");
       // var_dump($this->db);
    }
        
    function get_description() {
        
        $sql = "SELECT * FROM languages";
        $result =$connect->query($sql);
        $display = array();

        if(mysqli_num_rows($result) > 0) {
            $display = mysqli_fetch_assoc($result);
            return $display;
        }else {
            echo 'empty';
        }
    }
}