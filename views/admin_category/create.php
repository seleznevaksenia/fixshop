<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        </br></br>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/admin/category">Управление категориями</a></li>
                <li class="active">Добавить категорию</li>
            </ol>
        </div>

        <div class="col-sm-4  padding-right">
            <h4>Добавить новый товар</h4>

            <form method="post">
                <p>Название</p>
                <input type="text" name="name" value=""/>
                </br></br>
                <p>Порядковый номер</p>
                <input type="text" name="sort_order" value=""/>
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

