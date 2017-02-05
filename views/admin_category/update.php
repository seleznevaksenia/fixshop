<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/admin/category">Управление категориями</a></li>
                <li class="active">Редактировать категорию</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Редактировать товар</h4>

            <form method="post">
                <p>Название</p>
                <input type="text" name="name" value="<?php echo $category['name']; ?>"/>
                </br></br>
                <p>Порядковый номер</p>
                <input type="text" name="sort_order" value="<?php echo $category['sort_order']; ?>"/>
                </br></br>
                <p>Статус</p>
                <select name="status">
                    <option value="1" <?php if ($category['status'] == 1) echo 'selected="selected"'; ?>>Отображается
                    </option>
                    <option value="0" <?php if ($category['status'] == 0) echo 'selected="selected"'; ?>>Скрыт</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

