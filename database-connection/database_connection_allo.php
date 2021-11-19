<?php
  require __DIR__."/database_credentials.php";



  class Database{

    //properties
    public $db = null;
    public $results = null;

    //Create Connection
    public function connect{
      $this = new mysqli(servername,username,password,dbname);

      if(mysqli_connect_errno()) {
        return false;
      } else {
        return true;
      }

    }

    //runs queries
    public function run($query){
      if(!this->connect()){
        return false;
      } elseif($this->db==null) {
        return false;
      }

      //run query
      $this->results = mysqli_query($this->db, $query);
      if ($this->results == false) {
        return false;
      } else {
        return true;
      }
    }

    function fetch(){

      if($this->result == null){
        return false;
      } elseif($this->result == false){
        return false;
      }

      return mysqli_fetch_assoc($this->results);
    }


}

 ?>
