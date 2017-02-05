<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="/admin">Админпанель</a></li>
            <li><a href="/admin/category">Управление категориями</a></li>
            <li class="active">Удалить категорию</li>
        </ol>
    </div>
    </br>
    <h5>Удалить категорию#<?php echo $id; ?></h5>
    </br>
    <h4>Вы действительно хотите удалить эту категорию?</h4>
    <form action="#" method="post">
        <input type="submit" name="submit" class="btn btn-default" value="Удалить"/>
    </form>
    </br>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

