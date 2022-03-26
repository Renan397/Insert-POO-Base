<?php
class DBConn {
    private $host = "";
    private $user = "";
    private $pass = "";
    private $db = "";
    private $conn = null;
    
    function __construct() {
    $this->setHost("localhost");
    $this->setUser("root");
    $this->setPass("");
    $this->setDB("ldi4");
    
    $this->setConn( mysqli_connect($this->host, $this->user, $this->pass, $this->db) );
    
    if (!$this->conn) {
        die("<center><div class='alert alert-danger' style='width: 50%;' role='alert'>Não foi possível conectar o banco de dados.</div></center>" . mysqli_connect_error());
    }else {
    }
   }    

   public function query($sqlCommand) {
       $resultSet = $this->conn->query($sqlCommand);
       return ($resultSet);
   }
   
    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
        return $this;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
        return $this;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($pass){
        $this->pass = $pass;
        return $this;
    }

    public function getDB(){
        return $this->db;
    }

    public function setDB($db){
        $this->db = $db;
        return $this;
    }

    public function getConn(){
        return $this->conn;
    }

    public function setConn($conn){
        $this->conn = $conn;
        return $this;
    }

}
?>