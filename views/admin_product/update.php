<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/admin/product">Управление товарами</a></li>
                <li class="active">Редактировать товар</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Редактировать товар</h4>

            <form method="post">
                <p>Название товара</p>
                <input type="text" name="name" value="<?php echo $product['name']; ?>"/>
                </br></br>
                <p>Артикул</p>
                <input type="text" name="code" value="<?php echo $product['code']; ?>"/>
                </br></br>
                <p>Цена,$</p>
                <input type="number" name="price" value="<?php echo $product['price']; ?>"/>
                </br></br>
                <p>Категория</p>
                <select name="category_id">
                    <?php foreach ($categoriesList as $item): ?>
                        <option value="<?php echo $item['id']; ?>" <?php if ($item['id'] == $product['category_id']) echo 'selected="selected"'; ?>><?php echo $item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                </br></br>
                <p>Производитель</p>
                <input type="text" name="brand" value="<?php echo $product['brand']; ?>"/>
                </br></br>
                <p>Изображение товара</p>
                <input type="file" name="image"/>
                </br></br>
                <p>Детальное описание</p>
                <textarea name="description"><?php echo $product['brand']; ?></textarea>
                </br></br>
                <p>Наличие на складе</p>
                <select name="availability">
                    <option value="1" <?php if ($product['availability'] == 1) echo 'selected="selected"'; ?>>Да
                    </option>
                    <option value="0" <?php if ($product['availability'] == 0) echo 'selected="selected"'; ?>>Нет
                    </option>
                </select>
                </br></br>
                <p>Новинка</p>
                <select name="is_new">
                    <option value="1" <?php if ($product['is_new'] == 1) echo 'selected="selected"'; ?>>Да</option>
                    <option value="0" <?php if ($product['is_new'] == 0) echo 'selected="selected"'; ?>>Нет</option>
                </select>
                </br></br>
                <p>Рекомендуемые</p>
                <select name="is_recommended">
                    <option value="1" <?php if ($product['is_recommended'] == 1) echo 'selected="selected"'; ?>>Да
                    </option>
                    <option value="0" <?php if ($product['is_recommended'] == 0) echo 'selected="selected"'; ?>>Нет
                    </option>
                </select>
                </br></br>
                <p>Статус</p>
                <select name="status">
                    <option value="1" <?php if ($product['status'] == 1) echo 'selected="selected"'; ?>>Отображается
                    </option>
                    <option value="0" <?php if ($product['status'] == 0) echo 'selected="selected"'; ?>>Скрыт</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

