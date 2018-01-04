<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <a href="/admin/category/create" class="btn btn-default"><i class="fa fa-plus">Add category</i></a>
    <h5>Category List</h5>
    <table class="table">
        <thead>
        <tr>

            <th>ID category</th>
            <th>Name</th>
            <th>Number by order</th>
            <th>Status</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <?php foreach ($categoriesList as $category): ?>
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

<?php include ROOT . '/views/layouts/footer.php'; ?>

