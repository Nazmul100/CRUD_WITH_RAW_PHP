<?php

class database
{
    //declare access modifier property with database class
    private $servername = 'localhost';
    private $username = 'sdadmin';
    private $password = 'Benri@3754';
    private $dbname = 'crud';
    private $result = array();
    private $mysqli = '';
    //// Create database connection using construct method
    public function __construct()
    {
        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

//    public function insert($username,$photo,$bio,$skill,$project,$address)
//    {
//        $sql= "INSERT INTO user_details (nickname, user_photo, user_bio, user_skill, user_project, user_address)
//        VALUES ('$username','$photo','$bio','$skill','$project','$address')";
//        return $this->mysqli->query($sql);
//    }

     //this method data throw database table
    public function insert($username, $photo, $bio, $skill, $project, $address)
    {

        $allow = array('jpg', 'jpeg', 'png');
        $exntension = explode('.', $photo['name']);
        $fileActExt = strtolower(end($exntension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number
        $filePath = 'Images/' . $fileNew;

        if (in_array($fileActExt, $allow)) {
            if ($photo['size'] > 0 && $photo['error'] == 0) {
                if (move_uploaded_file($photo['tmp_name'], $filePath)) {
                    $sql = "INSERT INTO `user_details`(`nickname`, `user_photo`, `user_bio`, `user_skill`, `user_project`, `user_address`)
                                 VALUES ('$username','$fileNew','$bio','$skill','$project','$address')";
                    return $this->mysqli->query($sql);
                }
            }
        }
    }
     // this function get data from database table and show index page
    public function showAll()
    {
        $sql = "SELECT * FROM  user_details";
        return $this->mysqli->query($sql);
    }
    // this function  view information
    public function Display($id)
    {
        $sql = "SELECT * FROM user_details WHERE id = '$id'";
        return $this->mysqli->query($sql);
    }

    public function Edit($id)
    {
        $sql = "SELECT * FROM user_details WHERE id = '$id'";
        return $this->mysqli->query($sql);
    }

    public function Update($id, $username, $photo, $bio, $skill, $project, $address)
    {
        $allow = array('jpg', 'jpeg', 'png');
        $exntension = explode('.', $photo['name']);
        $fileActExt = strtolower(end($exntension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number
        $filePath = 'Images/' . $fileNew;

        if (in_array($fileActExt, $allow)) {
            if ($photo['size'] > 0 && $photo['error'] == 0) {
                if (move_uploaded_file($photo['tmp_name'], $filePath)) {
                    $sql = "UPDATE user_details 
             SET nickname = '$username', user_photo = '$fileNew', user_bio = '$bio', user_skill = '$skill', user_project = '$project', user_address = '$address' WHERE id = '$id'";
                    return $this->mysqli->query($sql);
                }
            }
        }


    }

    public function Delete($id)
    {
        $sql = "DELETE FROM user_details WHERE id= '$id' ";
        return $this->mysqli->query($sql);
    }


    public function __destruct()
    {
        $this->mysqli->close();
    }

}

?>
