<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/admin/product">Управление заказами</a></li>
                <li class="active">Редактировать заказ</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Редактировать заказ</h4>

            <form method="post">
                <p>Имя клиента</p>
                <input type="text" name="user_name" value="<?php echo $order['user_name']; ?>"/>
                </br></br>
                <p>Телефон клиента</p>
                <input type="tel" name="user_phone" value="<?php echo $order['user_phone']; ?>"/>
                </br></br>
                <p>Комментарий клиента</p>
                <input type="text" name="user_comment" value="<?php echo $order['user_comment']; ?>"/>
                </br></br>
                <p>Дата оформления заказа</p>
                <input type="datetime" name="order_date" value="<?php echo $order['order_date']; ?>"/>
                </br></br>
                <p>Статус</p>
                <select name="status">
                    <option value="1" <?php if (1 == $order['status']) echo 'selected="selected"'; ?>>1</option>
                    <option value="2" <?php if (2 == $order['status']) echo 'selected="selected"'; ?>>2</option>
                    <option value="3" <?php if (3 == $order['status']) echo 'selected="selected"'; ?>>3</option>
                    <option value="4" <?php if (4 == $order['status']) echo 'selected="selected"'; ?>>4</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

