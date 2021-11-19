<?php
require_once("./includes/header.php");
require_once("./db/Connection.php");
$id = $_GET['id'];
$getData = new database();
$data = $getData->Delete($id);

if ($data == 1) {
    header('location:index.php');
}

?>


<?php
require_once("./includes/footer.php");
?>

