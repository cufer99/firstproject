<?php
class DisplayContent {
    private $db;
    public function __construct()
    {
        include 'class_databaseConnection.php';
        $this->db = new db("localhost", "firstproject", "7exrd72f", "firstproject");
        // var_dump($this->db);
    }
        
    public function get_description() {
        
        $sql = "SELECT * FROM languages";
        $result =$this->db->conn->query($sql);
        // var_dump($result);
        $display = array();

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                $display[$row['content_id']] = $row;
            }
            return $display;
        }
    }
}
