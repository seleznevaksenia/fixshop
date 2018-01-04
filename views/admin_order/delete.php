<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="/admin">Admin panel</a></li>
            <li><a href="/admin/product">Order Management</a></li>
            <li class="active">Delete Order</li>
        </ol>
    </div>
    </br>
    <h5>Delete Order #<?php echo $id; ?></h5>
    </br>
    <h4>Are you really want to delete this order?</h4>
    <form action="#" method="post">
        <input type="submit" name="submit" class="btn btn-default" value="Delete"/>
    </form>
    </br>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

