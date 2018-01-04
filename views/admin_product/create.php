<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Admin panel</a></li>
                <li><a href="/admin/product">Product Management</a></li>
                <li class="active">Add Product</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Add New Product</h4>

            <form method="post" enctype="multipart/form-data">
                <p>Title</p>
                <input type="text" name="name" value=""/>
                </br></br>
                <p>Code</p>
                <input type="text" name="code" value=""/>
                </br></br>
                <p>Price,$</p>
                <input type="number" name="price" value=""/>
                </br></br>
                <p>Category</p>
                <select name="category_id">
                    <option value="" selected="selected"></option>
                    <?php foreach ($categoriesList as $item): ?>
                        <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                </br></br>
                <p>Brand</p>
                <input type="text" name="brand" value=""/>
                </br></br>
                <p>Image</p>

                <input type="file" name="image"/>
                </br></br>
                <p>Description</p>
                <textarea name="description"></textarea>
                </br></br>
                <p>Availability</p>
                <select name="availability">
                    <option value="1" selected="selected">Yes</option>
                    <option value="0">No</option>
                </select>
                </br></br>
                <p>New</p>
                <select name="is_new">
                    <option value="1" selected="selected">Yes</option>
                    <option value="0">No</option>
                </select>
                </br></br>
                <p>Recommended</p>
                <select name="is_recommended">
                    <option value="1" selected="selected">Yes</option>
                    <option value="0">No</option>
                </select>
                </br></br>
                <p>Status</p>
                <select name="status">
                    <option value="1" selected="selected">Show</option>
                    <option value="0">Hide</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Save"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

