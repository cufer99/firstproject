<?php
class DisplayContent {
    private $db;
    public $name;
    public $lname;
    public $mail;
    public $age;
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
    public function form() {
        $sql = "INSERT INTO form (fname, lname, email, age) VALUES ('Dani', 'Cufer', 'dani.cufer@gmail.com', 58)";
        $result = $this->db->conn->query($sql);

        if($result) {
            echo 'data inserted';
        } else {
            echo 'nothing happened';
        }
    }
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function formInsert(){
        //$this->name = $_POST["name"];
        //$this->lname = $_POST["lname"];
        //$this->mail = $_POST["email"];

       // $testInput = test_input();
        if($_SERVER["REQUEST_METHOD"] === 'POST') {
            if(empty($_POST["name"])){
                echo '<p>';
                echo 'Name required!';
                echo '</p>';
            } else {
                $this->name = $_POST['name'];
               // return $name;
            }
            if(empty($_POST["lname"])){
                echo '<p>';
                echo 'Last name required!';
                echo '</p>';
            } else {
                $this->lname = $_POST['lname'];
               // return $lname;
            }
            if(empty($_POST["email"])){
                echo '<p>';
                echo 'E-mail required!';
                echo '</p>';
            } else {
                $this->mail = $_POST['email'];
              //  return $mail;
            }
            if(empty($_POST["age"])){
                echo '<p>';
                echo 'age required!';
                echo '</p>';
            } else {
                $this->age = $_POST['age'];
              //  return $mail;
            }
            
            
        $sql = "INSERT INTO form (fname, lname, email, age) VALUES('$this->name', '$this->lname', '$this->mail', 7)";
        $result = $this->db->conn->query($sql);

        if($result) {
            echo 'inserted';
        }else {
            echo 'nothing happened';
        }
        }
    }
}

