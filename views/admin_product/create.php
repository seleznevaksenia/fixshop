<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/admin/product">Управление товарами</a></li>
                <li class="active">Добавить товар</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Добавить новый товар</h4>

            <form method="post" enctype="multipart/form-data">
                <p>Название товара</p>
                <input type="text" name="name" value=""/>
                </br></br>
                <p>Артикул</p>
                <input type="text" name="code" value=""/>
                </br></br>
                <p>Цена,$</p>
                <input type="number" name="price" value=""/>
                </br></br>
                <p>Категория</p>
                <select name="category_id">
                    <option value="" selected="selected"></option>
                    <?php foreach ($categoriesList as $item): ?>
                        <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                </br></br>
                <p>Производитель</p>
                <input type="text" name="brand" value=""/>
                </br></br>
                <p>Изображение товара</p>

                <input type="file" name="image"/>
                </br></br>
                <p>Детальное описание</p>
                <textarea name="description"></textarea>
                </br></br>
                <p>Наличие на складе</p>
                <select name="availability">
                    <option value="1" selected="selected">Да</option>
                    <option value="0">Нет</option>
                </select>
                </br></br>
                <p>Новинка</p>
                <select name="is_new">
                    <option value="1" selected="selected">Да</option>
                    <option value="0">Нет</option>
                </select>
                </br></br>
                <p>Рекомендуемые</p>
                <select name="is_recommended">
                    <option value="1" selected="selected">Да</option>
                    <option value="0">Нет</option>
                </select>
                </br></br>
                <p>Статус</p>
                <select name="status">
                    <option value="1" selected="selected">Отображается</option>
                    <option value="0">Скрыт</option>
                </select>
                </br></br>
                <input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>
            </form>
            </br>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

