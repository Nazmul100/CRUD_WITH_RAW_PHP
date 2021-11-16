<?php require_once("./includes/header.php"); ?>
<div class="container">
    <h2 class="text-lg-start"> Add New Users</h2>
    <hr>
    <form>
        <div class="form-row">
            <div class="col mb-3">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control " id="validationServer01" placeholder="First name"  >
            </div>
            <div class="col mb-3">
                <div class="form-group">
                    <label for="exampleFormControlTextarea2">Biodata</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>
            </div>
            <div class="col mb-3">
                <label for="validationServer01">Skill</label>
                <select class="form-select" size="3" aria-label="size 3 select example">
                    <option value="1">C</option>
                    <option value="2">PHP</option>
                    <option value="3">JAVA</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col mb-3">
                <label for="validationServer03">Address</label>
                <input type="text" class="form-control " id="validationServer03" placeholder="address" >
            </div>
            <div class="col mb-3">
                <label for="validationServer04">Project</label>
                <input type="text" class="form-control" id="validationServer04" placeholder="current project" >
            </div>
            <div class="col mb-3">
                <label for="formFile" class="form-label">Images</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>
