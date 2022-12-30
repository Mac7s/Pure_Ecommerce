<?php

namespace Winter\SourceEcommerce\database;

class DBController
{
//    Database Connection Properties
    protected $host=\Consts::HOST;
    protected $user_name=\Consts::USER_NAME;
    protected $password=\Consts::PASSWORD;
    protected $db_name=\Consts::DB_NAME;


//   Connection property
    public $conn = null;
    public function __construct()
    {
        $this->conn = mysqli_connect($this->host,$this->user_name,$this->password,$this->db_name);
        if($this->conn->connect_error){
            die('you have error when connecting to database'.$this->conn->connect_error);
        }
    }

    public function __destruct()
    {
        $this->closeMysqliConnection();
    }

    protected function closeMysqliConnection(){
        if($this->conn != null){
            $this->conn->close();
        }
    }
}