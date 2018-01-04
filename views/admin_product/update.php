<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Admin panel</a></li>
                <li><a href="/admin/product">Product Management</a></li>
                <li class="active">Edit Product</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Edit Product</h4>

            <form method="post">
                <p>Title</p>
                <input type="text" name="name" value="<?php echo $product['name']; ?>"/>
                </br></br>
                <p>Code</p>
                <input type="text" name="code" value="<?php echo $product['code']; ?>"/>
                </br></br>
                <p>Price,$</p>
                <input type="number" name="price" value="<?php echo $product['price']; ?>"/>
                </br></br>
                <p>Category</p>
                <select name="category_id">
                    <?php foreach ($categoriesList as $item): ?>
                        <option value="<?php echo $item['id']; ?>" <?php if ($item['id'] == $product['category_id']) echo 'selected="selected"'; ?>><?php echo $item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                </br></br>
                <p>Brand</p>
                <input type="text" name="brand" value="<?php echo $product['brand']; ?>"/>
                </br></br>
                <p>Image</p>
                <img src="<?php echo Product::getImage($product['id']) ?>" width="200" alt="">
                <input type="file" name="image"/>
                </br></br>
                <p>Description</p>
                <textarea name="description"><?php echo $product['brand']; ?></textarea>
                </br></br>
                <p>Availability</p>
                <select name="availability">
                    <option value="1" <?php if ($product['availability'] == 1) echo 'selected="selected"'; ?>>Yes
                    </option>
                    <option value="0" <?php if ($product['availability'] == 0) echo 'selected="selected"'; ?>>No
                    </option>
                </select>
                </br></br>
                <p>New</p>
                <select name="is_new">
                    <option value="1" <?php if ($product['is_new'] == 1) echo 'selected="selected"'; ?>>Yes</option>
                    <option value="0" <?php if ($product['is_new'] == 0) echo 'selected="selected"'; ?>>No</option>
                </select>
                </br></br>
                <p>Recommended</p>
                <select name="is_recommended">
                    <option value="1" <?php if ($product['is_recommended'] == 1) echo 'selected="selected"'; ?>>Yes
                    </option>
                    <option value="0" <?php if ($product['is_recommended'] == 0) echo 'selected="selected"'; ?>>No
                    </option>
                </select>
                </br></br>
                <p>Status</p>
                <select name="status">
                    <option value="1" <?php if ($product['status'] == 1) echo 'selected="selected"'; ?>>Show
                    </option>
                    <option value="0" <?php if ($product['status'] == 0) echo 'selected="selected"'; ?>>Hide</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Save"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

