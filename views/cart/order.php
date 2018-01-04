<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-3 padding-right">
                    <h2 class="title text-center">Cart</h2>

                    <?php if ($result): ?>
                        <p>Order issued! We will call you back!</p>
                    <?php else: ?>
                        <p>Selected items: qty:<?php echo $totalQuontity; ?>, sum:<?php echo $totalPrice; ?>
                            USD</p>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="signup-form"><!--sign up form-->
                            <h2>Ordering</h2>
                            <form action="#" method="post">
                                <label>Name</label>
                                <?php if (User::isGuest()): ?>
                                    <input type="text" name="name" placeholder="Name" value=""/>
                                <?php else: ?>
                                    <input type="text" name="name" placeholder="Name" value="<?php echo $userName; ?>"/>
                                <?php endif; ?>
                                <label>Phone</label>
                                <input type="tel" name="phoneNumber" placeholder="Phone"
                                       value="<?php echo $phoneNumber; ?>"/>
                                <label>Comments</label>
                                <input type="text" name="comment" placeholder="Comments"
                                       value="<?php echo $comment; ?>"/>
                                <input type="submit" name="submit" class="btn btn-default" value="Checkout"/>
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