<?php
require_once("./includes/header.php");
require_once("./db/Connection.php");
?>
<?php
$getData = new database();
$data = $getData->showAll();
?>
<div class="container">
    <div class="row mx-auto ">
        <div class="text-left col-sm-8">
            <h1>User List</h1>
        </div>
        <div class="col-sm-4 text-right  align-right">
            <a href="addnewuser.php">
                <button type="button" class="btn btn-success btn-lg  align-right  "><i class="fas fa-plus"></i> Add New
                    User
                </button>
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Skill</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr class="col-2">
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row['nickname'] ?></td>
                <td><?php echo $row['user_skill'] ?></td>
                <td><?php echo $row['user_address'] ?></td>

                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary a-btn-slide-text">
                        <span class="edit" aria-hidden="true"></span>
                        <i class="fas fa-user-edit"></i>
                    </a>
                    <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-success a-btn-slide-text">
                        <span class="open" aria-hidden="true"></span>
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger a-btn-slide-text">
                        <span class="remove" aria-hidden="true"></span>
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
    </table>
</div>


<!---->
<?php
//$id = $_GET['id'];
//$getData = new database();
//$data = $getData->Delete($id);
//
//?>
<!---->
<!---->
<!--<div>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>-->
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        $(document).on('click',"#del",function($data) {-->
<!--            $data.preventDefault();-->
<!--            var del = $(this).data('id');-->
<!---->
<!--            swal({-->
<!--                title: "Are you sure?",-->
<!--                text: "Once deleted, you will not be able to recover this imaginary file!",-->
<!--                icon: "warning",-->
<!--                buttons: true,-->
<!--                dangerMode: true,-->
<!--            })-->
<!--                .then((willDelete) => {-->
<!--                    if (willDelete) {-->
<!--                        $.ajax({-->
<!--                            url : "delete.php",-->
<!--                            type : "POST",-->
<!--                            data : {id:del},-->
<!--                            success : function() {-->
<!--                                swal({-->
<!--                                    title: "Sweet!",-->
<!--                                    text: "Delete data",-->
<!--                                    imageUrl: 'thumbs-up.jpg'-->
<!--                                });-->
<!--                            }-->
<!--                        });-->
<!--                        swal("Poof! Your imaginary file has been deleted!", {-->
<!--                            icon: "success",-->
<!--                        });-->
<!--                    } else {-->
<!--                        swal("Your imaginary file is safe!");-->
<!--                    }-->
<!--                });-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!--</div>-->


<?php
require_once("./includes/footer.php");
?>














