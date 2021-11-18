<?php
require_once("./includes/header.php");
require_once("./db/Connection.php");
?>
<?php
    $getData = new database();
    $id = $_GET['id'];
    $data = $getData->Display($id);
    $user = mysqli_fetch_assoc($data);

?>
<div class="container">
    <div class="card mb-3">


        <img src="./Images/<?php echo $user['user_photo'] ?>"  class="rounded mx-auto d-block rounded-circle mt-3"  alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">Name:<?php echo $user['nickname'] ?></h5>
            <p class="card-text text-center">skill: <?php echo $user['user_skill']?></p>
            <p class="card-text text-center" ><small class="text-muted"> <?php echo $user['user_bio'] ?></small></p>
            <p class="card-text text-center">
                <b> Project : </b> <?php echo $user ['user_project'] ?>
            </p>
            <p class="card-text text-center ">
                <i> Address :</i> <?php echo $user ['user_address'] ?>
            </p>


        </div>
    </div>
</div>



<?php
require_once("./includes/footer.php");
?>
