<?php 
include_once "./../vistas/header.php";
?>
<div class="ContForm">

    <form action="./../insert/insertBanner.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <h1>Pagina de Banner</h1>
            <label for="bienvenida">Banner</label> 
            <input id="bienvenida" name="banner" type="file" class="form-control">
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>    
<?php include_once "./../vistas/footer.php"; ?>