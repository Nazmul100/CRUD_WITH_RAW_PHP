<?php require_once("./includes/header.php"); ?>
<div class="container">
    <div class="row mx-auto ">
        <div class="text-left col-sm-8">
            <h1>User List</h1>
        </div>
        <div class="col-sm-4 text-right  align-right">
            <a href="addnewuser.php">
                <button type="button" class="btn btn-success btn-lg  align-right  "><i class="fas fa-plus"></i> Add New User</button>
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover ">
        <thead>
        <tr class="col-2">
            <th>ID</th>
            <th>Name</th>
            <th>Skill</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr class="col-2">
            <th scope="row">1</th>
            <td>Nazmul</td>
            <td>php</td>
            <td>Bashundura</td>
            <td >
                <a href="edit.php" class="btn btn-primary a-btn-slide-text">
                    <span class="edit" aria-hidden="true"></span>
                    <i class="fas fa-user-edit"></i>
                </a>
                <a href="view.php" class="btn btn-success a-btn-slide-text">
                    <span class="open" aria-hidden="true"></span>
                    <i class="fas fa-eye"></i>
                </a>
                <a href="delete.php" class="btn btn-danger a-btn-slide-text">
                    <span class="remove" aria-hidden="true"></span>
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Nazmul</td>
            <td>php</td>
            <td>Bashundura</td>
            <td>
                <a href="edit.php" class="btn btn-primary a-btn-slide-text">
                    <span class="edit" aria-hidden="true"></span>
                    <i class="fas fa-user-edit"></i>
                </a>
                <a href="view.php" class="btn btn-success a-btn-slide-text">
                    <span class="open" aria-hidden="true"></span>
                    <i class="fas fa-eye"></i>
                </a>
                <a href="delete.php" class="btn btn-danger a-btn-slide-text">
                    <span class="remove" aria-hidden="true"></span>
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>

        </tbody>
    </table>
</div>
</body>
</html>

















<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="./js/bootstrap.bundle.min.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="./js/popper.min.js"> </script>
<script src="./js/bootstrap.min.js" ></script>

</body>
</html>