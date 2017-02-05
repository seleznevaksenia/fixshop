<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <a href="/admin/сategory/create/" class="btn btn-default"><i class="fa fa-plus">Добавить категорию</i></a>
    <h5>Список категорий</h5>
    <table class="table">
        <thead>
        <tr>

            <th>ID категории</th>
            <th>Название</th>
            <th>Порядковый номер</th>
            <th>Статус</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <?php foreach ($categorytList as $category): ?>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['name']; ?></td>
            <td><?php echo $category['sort_order']; ?></td>
            <td><?php echo $category['status']; ?></td>
            <td><a href="/admin/category/update/<?php echo $category['id']; ?>/" class="btn btn-default"><i
                            class="fa fa-edit"></i></a></td>
            <td><a href="/admin/category/delete/<?php echo $category['id']; ?>/" class="btn btn-default">x</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

