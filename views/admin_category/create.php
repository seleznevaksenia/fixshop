<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Admin panel</a></li>
                <li><a href="/admin/category">Category Management</a></li>
                <li class="active">Add Category</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Add new Category</h4>

            <form method="post">
                <p>Name</p>
                <input type="text" name="name" value=""/>
                </br></br>
                <p>Number by order</p>
                <input type="text" name="sort_order" value=""/>
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

