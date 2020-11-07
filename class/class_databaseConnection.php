<?php

// class for database connection
class databaseConn {

    public $servername;
    public $username;
    public $password;
    public $dbname;
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
          //  echo 'connected';
        }
       // var_dump($_SERVER);
    }
    
    public function __destruct() {
        mysqli_close($this->conn);
    }
}