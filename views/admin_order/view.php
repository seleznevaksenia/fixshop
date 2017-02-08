<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <br class="row">
    </br>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="/admin">Админпанель</a></li>
            <li><a href="/admin/product">Управление заказами</a></li>
            <li class="active">Просмотр заказа</li>
        </ol>
    </div>
    <h5>Просмотр заказа #<?php echo $order['id']; ?></h5>
    <table class="table-admin-small table-bordered table-striped table">

        <tr>
            <td>Номер заказа</td>
            <td><?php echo $order['id']; ?></td>
        </tr>
        <tr>
            <td>Имя клиента</td>
            <td><?php echo $order['user_name']; ?></td>
        </tr>
        <tr>
            <td>Телефон клиента</td>
            <td><?php echo $order['user_phone']; ?></td>
        </tr>
        <tr>
            <td>Комментарий клиента</td>
            <td><?php echo $order['user_comment']; ?></td>
        </tr>
        <tr>
            <td>Статус заказа</td>
            <td><?php echo Order::getStatusText($order['status']); ?></td>
        </tr>
        <tr>
            <td>Дата заказа</td>
            <td><?php echo $order['order_date']; ?></td>
        </tr>
        <tr>
    </table>
    <h5>Товары в заказе</h5>
    <table class="table-admin-medium table-bordered table-striped table ">
        <tr>
            <th>ID товара</th>
            <th>Артикул товара</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Количество</th>
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

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

