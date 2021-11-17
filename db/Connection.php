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

    public function insert($username,$photo,$bio,$skill,$project,$address)
    {
        $sql= "INSERT INTO user_details (nickname, user_photo, user_bio, user_skill, user_project, user_address)
        VALUES ('$username','$photo','$bio','$skill','$project','$address')";
        return $this->mysqli->query($sql);
    }
    public function showAll()
    {
        $sql= "SELECT * FROM  user_details";
        return $this->mysqli->query($sql);
    }

    public function Display($id){
        $sql = "SELECT * FROM user_details WHERE id = '$id'";
        return $this->mysqli->query($sql);
    }

    public function Edit($id){
        $sql = "SELECT * FROM user_details WHERE id = '$id'";
        return $this->mysqli->query($sql);
    }

    public function Update($id, $username,$photo,$bio,$skill,$project,$address)
    {
        $sql= "UPDATE user_details 
        SET nickname = '$username', user_photo = '$photo', user_bio = '$bio', user_skill = '$skill', user_project = '$project', user_address = '$address' WHERE id = '$id'";
        return $this->mysqli->query($sql);
    }

    public function Delete($id){
        $sql="DELETE FROM user_details WHERE id= '$id' ";
        return $this->mysqli->query($sql);
    }



    public function __destruct(){
        $this->mysqli->close();
    }

}
?>
