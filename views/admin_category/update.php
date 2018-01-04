<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Admin panel</a></li>
                <li><a href="/admin/category">Category Management</a></li>
                <li class="active">Edit category</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Edit product</h4>

            <form method="post">
                <p>Name</p>
                <input type="text" name="name" value="<?php echo $category['name']; ?>"/>
                </br></br>
                <p>Number</p>
                <input type="text" name="sort_order" value="<?php echo $category['sort_order']; ?>"/>
                </br></br>
                <p>Satus</p>
                <select name="status">
                    <option value="1" <?php if ($category['status'] == 1) echo 'selected="selected"'; ?>>Show
                    </option>
                    <option value="0" <?php if ($category['status'] == 0) echo 'selected="selected"'; ?>>Hide</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Save"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

