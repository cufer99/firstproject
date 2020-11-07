<?php

class db {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    public $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname );

        if(!$this->conn) {
            $this->error('connection failed');
        } else {
         //   echo 'connected';
        }
         //var_dump($this->conn);
    }
    public function __destruct()
    {
        $this->conn->close();

    }
}
/*
// class for database connection
class DatabaseConn {

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
         //   echo 'connected';
        }
      //   var_dump($_SERVER);
    }
    
    public function __destruct() {
         mysqli_close($this->conn);
      
    }
}*/