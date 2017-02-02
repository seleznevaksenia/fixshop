<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-3 padding-right">
                    <h2 class="title text-center"> Корзина</h2>

                    <?php if ($result): ?>
                        <p>Заказ формлен!Мы Вам перезвоним!</p>
                    <?php else: ?>
                        <p>Выбрано товаров: <?php echo $totalQuontity; ?>ед., на сумму:<?php echo $totalPrice; ?>
                            грн.</p>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="signup-form"><!--sign up form-->
                            <h2>Оформление заказа</h2>
                            <form action="#" method="post">
                                <label>Имя</label>
                                <?php if (User::isGuest()): ?>
                                    <input type="text" name="name" placeholder="Имя" value=""/>
                                <?php else: ?>
                                    <input type="text" name="name" placeholder="Имя" value="<?php echo $userName; ?>"/>
                                <?php endif; ?>
                                <label>Номер телефона</label>
                                <input type="tel" name="phoneNumber" placeholder="Телефон"
                                       value="<?php echo $phoneNumber; ?>"/>
                                <label>Комментарий к заказу</label>
                                <input type="text" name="comment" placeholder="Комментарий"
                                       value="<?php echo $comment; ?>"/>
                                <input type="submit" name="submit" class="btn btn-default" value="Оформить"/>
                            </form>
                        </div><!--/sign up form-->

                    <?php endif; ?>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>