<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="/admin">Админпанель</a></li>
            <li><a href="/admin/product">Управление товарами</a></li>
            <li class="active">Удалить товар</li>
        </ol>
    </div>
    </br>
    <h5>Удалить товар #<?php echo $id; ?></h5>
    </br>
    <h4>Вы действительно хотите удалить этот товар?</h4>
    <form action="#" method="post">
        <input type="submit" name="submit" class="btn btn-default" value="Удалить"/>
    </form>
    </br>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

