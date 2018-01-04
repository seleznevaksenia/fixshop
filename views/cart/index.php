<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Catalog</h2>
                        <div class="panel-group category-products">
                            <?php foreach ($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                                <?php echo $categoryItem['name']; ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">

                    <h2 class="title text-center">Cart</h2>
                    <h5>You have chosen these goods</h5>
                    <table class="table">
                        <thead>
                        <tr>

                            <th>Product code</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php if ($productsInCarts): ?>
                                <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['code']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><?php echo $productsInCarts[$product['id']]; ?></td>
                            <td><a href="/cart/delete/<?php echo $product['id']; ?>/" class="btn btn-default">x</a></td>
                        </tr>
                                <?php endforeach; ?>
                                <td><?php echo $totalPrice; ?></td>
                            <?php else: ?>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            <?php endif; ?>

                        </tr>
                        </tbody>
                    </table>
                    <a href="/cart/checkout/" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Checkout</a>

                </div><!--features_items-->

            </div>
        </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>