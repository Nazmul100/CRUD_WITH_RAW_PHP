<?php require_once("./db/Connection.php"); ?>

<?php
$invalidInput = '';
$username = $bio = $project = $address = $skill = "";
if ($_POST['Submit'] == "submit") {

    $username = $_POST['name'];
    $bio = $_POST['bio'];
    $project = $_POST['project'];
    $address = $_POST['address'];
    $photo = $_FILES['photo'];
    $skill = $_POST['skill'];

    if ($username != "" && $bio != "" && $project != "" && $address != "" && $photo != "" && $skill != "") {

        $backEnd = new database();
        $add = $backEnd->insert($username, $photo, $bio, $skill, $project, $address);
        if ($add == 1) {
            header('location:index.php');

        }
    } else {
        $invalidInput = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> You should fill up all input fields below.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }

}

?>
<?php require_once("./includes/header.php"); ?>

<div class="container">


    <div>
        <?php echo $invalidInput; ?>
    </div>


    <h2 class="text-sm-center"> Add New Users</h2>

    <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
        <div class="form-group mt-3">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                   placeholder="Enter name">
        </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlBio">Bio</label>
            <textarea class="form-control" type="text" id="bio" name="bio" rows="3"></textarea>
        </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlSelect1">Skill</label>
            <select class="form-control" id="skill" name="skill">
                <option value="php">php</option>
                <option value="java">java</option>
                <option value="python">python</option>
                <option value="c++">c++</option>
                <option value="c">c</option>
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Project</label>
            <input type="text" class="form-control" id="project" name="project" aria-describedby="nameHelp"
                   placeholder="Enter project name">
        </div>

        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="nameHelp"
                   placeholder="Enter your address" required>
        </div>

        <div class="form-group mt-3">
            <label for="exampleInputPhoto">Photo</label>
            <input type="file" class="form-control" name="photo">

        </div>

        <button type="submit" name="Submit" value="submit" class="btn btn-primary mt-3">Submit</button>

    </form>


</div>

<?php require_once("./includes/footer.php"); ?>
