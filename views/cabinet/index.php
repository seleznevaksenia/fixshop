<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">


                <h1>Кабинет пользователя</h1>
                    <h3>Hello,<?php echo $user['user_name'];?></h3>
                <ul>
                    <a href="/cabinet/edit"><li>Редактировать данные</li></a>
                    <a href="/cart/">
                        <li>Список покупок</li>
                    </a>
                    <a href="/admin/">
                        <li>Вход в панель администратора</li>
                    </a>
                </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>