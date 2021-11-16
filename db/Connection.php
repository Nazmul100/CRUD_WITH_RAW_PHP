<?php

class database
{
    //public $que;
    private $servername = 'localhost';
    private $username = 'sdadmin';
    private $password = 'Benri@3754';
    private $dbname = 'crud';
    private $result = array();
    private $mysqli = '';

    public function __construct()
    {
        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function insert()
    {
        $sql = "INSERT INTO `user_details` ( `nickname`, `user_photo`, `user_bio`, `user_skill`, `user_project`, `user_address`) 
                VALUES ( 'pain', 'my photo', 'my name is nazmul', 'php', 'crud operation', 'bashundura');";
        $result = $this->mysqli->query($sql);
    }
}

$user = new database();
$user->insert();
?>
