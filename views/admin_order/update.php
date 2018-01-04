<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Admin panel</a></li>
                <li><a href="/admin/product">Order Management</a></li>
                <li class="active">Edit Order</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Edit Order</h4>

            <form method="post">
                <p>Client name</p>
                <input type="text" name="user_name" value="<?php echo $order['user_name']; ?>"/>
                </br></br>
                <p>Client phone</p>
                <input type="tel" name="user_phone" value="<?php echo $order['user_phone']; ?>"/>
                </br></br>
                <p>Client Comment</p>
                <input type="text" name="user_comment" value="<?php echo $order['user_comment']; ?>"/>
                </br></br>
                <p>Date</p>
                <input type="datetime" name="order_date" value="<?php echo $order['date']; ?>"/>
                </br></br>
                <p>Status</p>
                <select name="status">
                    <option value="1" <?php if (1 == $order['status']) echo 'selected="selected"'; ?>>1</option>
                    <option value="2" <?php if (2 == $order['status']) echo 'selected="selected"'; ?>>2</option>
                    <option value="3" <?php if (3 == $order['status']) echo 'selected="selected"'; ?>>3</option>
                    <option value="4" <?php if (4 == $order['status']) echo 'selected="selected"'; ?>>4</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Save"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

