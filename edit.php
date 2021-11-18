<?php
require_once("./includes/header.php");
require_once("./db/Connection.php");
?>
<?php
$getData = new database();
$id = $_GET['id'];
$user = $getData->Edit($id);
$userInfo = mysqli_fetch_assoc($user);
?>

<?php
$username = $bio = $project = $address = $skill = "" ;
if($_POST['Submit'] == "update") {
    $username = $_POST['name'];
    $bio = $_POST['bio'];
    $project = $_POST['project'];
    $address = $_POST['address'];
    $photo = $_FILES['photo'];
    $skill = $_POST['skill'];
//    var_dump($photo);
    $UpdateData= $getData->Update($id,$username,$photo,$bio,$skill,$project,$address);
//    var_dump($UpdateData);

    if ($UpdateData==1){
        header('location:index.php');
    }
}

?>
<div class="container">
    <h2 class="text-sm-center"> Edit My Profile</h2>
        <form action="" method="post" enctype="multipart/form-data">


            <div class="form-group mt-3">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" value=<?php echo $userInfo['nickname'] ?> id="name" name="name"  >
            </div>



            <div class="form-group mt-3">
                <label for="exampleFormControlBio">Bio</label>
                <textarea class="form-control" type="text" id="bio"   name="bio" rows="3"><?php echo $userInfo['user_bio'] ?></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="exampleFormControlSelect1">Skill</label>
                <select class="form-control" id="skill"   name="skill"  >
                    <option value="php" <?=$userInfo['user_skill'] == 'php' ? ' selected="selected"' : '';?> >php</option>
                    <option value="java" <?=$userInfo['user_skill'] == 'java' ? ' selected="selected"' : '';?> >java</option>
                    <option value="python" <?=$userInfo['user_skill'] == 'python' ? ' selected="selected"' : '';?> >python</option>
                    <option value="c++" <?=$userInfo['user_skill'] == 'c++' ? ' selected="selected"' : '';?> >c++</option>
                    <option value="c" <?=$userInfo['user_skill'] == 'c' ? ' selected="selected"' : '';?> >c</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Project</label>
                <input type="text" class="form-control" id="project" value=<?php echo $userInfo['user_project'] ?> name="project" aria-describedby="nameHelp" placeholder="Enter project name">
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" id="address" value=<?php echo $userInfo['user_address'] ?> name="address" aria-describedby="nameHelp" placeholder="Enter your address">
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputPhoto">Photo</label>
                <input type="file" class="form-control" name="photo" required="">

            </div>

            <button type="submit" name="Submit" value="update"  class="btn btn-primary mt-3">Submit</button>
        </form>
</div>




<?php
require_once("./includes/footer.php");
?>
