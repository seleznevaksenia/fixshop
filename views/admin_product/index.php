<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <a href="/admin/product/create/" class="btn btn-default"><i class="fa fa-plus">Add product</i></a>
    <h5>Product List</h5>
    <table class="table">
        <thead>
        <tr>

            <th>ID product</th>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <?php foreach ($productList as $product): ?>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['code']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><a href="/admin/product/update/<?php echo $product['id']; ?>/" class="btn btn-default"><i
                            class="fa fa-edit"></i></a></td>
            <td><a href="/admin/product/delete/<?php echo $product['id']; ?>/" class="btn btn-default">x</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

