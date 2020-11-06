<?php

// class for database connection
class databaseConn {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    public $conn;

    public function connection($servername, $username, $password, $dbname) {
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->dbname = $dbname;

        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        $this->conn = $conn;

        if(!$conn) {
            $this->error('connection failed');
        } else {
            echo 'connected';
        }
        var_dump($this->conn);
    }
    
    public function __destruct() {
        mysqli_close($this->conn);
    }
}