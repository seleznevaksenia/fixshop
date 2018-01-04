<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br>
        <h5>Order List</h5>
        <table class="table">
            <thead>
            <tr>
                <th>ID order</th>
                <th>Custom name</th>
                <th>Custom phone</th>
                <th>Date</th>
                <th>Status</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <?php foreach ($orderList as $order): ?>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['user_name']; ?></td>
                <td><?php echo $order['user_phone']; ?></td>
                <td><?php echo $order['date']; ?></td>
                <td><?php echo $order['status']; ?></td>
                `
                <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Смотреть"><i
                                class="fa fa-eye"></i></a></td>
                <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать"><i
                                class="fa fa-pencil-square-o"></i></a></td>
                <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i
                                class="fa fa-times"></i></a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

