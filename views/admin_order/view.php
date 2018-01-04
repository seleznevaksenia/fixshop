<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="/admin">Admin panel</a></li>
            <li><a href="/admin/product">Order Management</a></li>
            <li class="active">Show Order</li>
        </ol>
    </div>
    <h5>Show Order #<?php echo $order['id']; ?></h5>
    <table class="table-admin-small table-bordered table-striped table">

        <tr>
            <td>Order number</td>
            <td><?php echo $order['id']; ?></td>
        </tr>
        <tr>
            <td>Client name</td>
            <td><?php echo $order['user_name']; ?></td>
        </tr>
        <tr>
            <td>Client phone</td>
            <td><?php echo $order['user_phone']; ?></td>
        </tr>
        <tr>
            <td>Client comment</td>
            <td><?php echo $order['user_comment']; ?></td>
        </tr>
        <tr>
            <td>Order status</td>
            <td><?php echo Order::getStatusText($order['status']); ?></td>
        </tr>
        <tr>
            <td>Order date</td>
            <td><?php echo $order['date']; ?></td>
        </tr>
        <tr>
    </table>
    <h5>Products in order</h5>
    <table class="table-admin-medium table-bordered table-striped table ">
        <tr>
            <th>ID product</th>
            <th>Product code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Amount</th>
        </tr>
        <tr>
            <?php foreach ($products as $product): ?>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['code']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            `
            <td><?php echo $productsQuantity[$product['id']]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

