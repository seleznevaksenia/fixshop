<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="/admin">Admin panel</a></li>
            <li><a href="/admin/product">Product management</a></li>
            <li class="active">Delete Product</li>
        </ol>
    </div>
    </br>
    <h5>Delete product #<?php echo $id; ?></h5>
    </br>
    <h4>Are you really want to delete this product?</h4>
    <form action="#" method="post">
        <input type="submit" name="submit" class="btn btn-default" value="Delete"/>
    </form>
    </br>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

