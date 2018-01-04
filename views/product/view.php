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
                    <div class="product-details"><!--product-details-->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="<?php echo $product['image']; ?>" alt=""/>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/product-details/new.jpg" class="newarrival" alt=""/>
                                    <?php endif; ?>
                                    <h2><?php echo $product['name']; ?></h2>
                                    <p>Product code: <?php echo $product['code']; ?></p>
                                    <span>
                                    <span>US $<?php echo $product['price']; ?></span>
                                    <label>QTY:</label>
                                    <input type="number" value="1">
                                    <button type="button" data-id="<?php echo $product['id']; ?>"
                                            class="btn btn-default cart add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add To Cart
                                    </button>
                                </span>
                                    <p><b>Availability:</b>
                                        <?php if ($product['availability']): ?>
                                            in stock
                                        <?php else: ($product['availability']) ?>
                                            not in stock
                                        <?php endif; ?>
                                    </p>
                                    <p><b>UPC:</b><?php echo $product['upc']; ?></p>
                                </div><!--/product-information-->
                            </div>
                        </div>
                    </div><!--/product-details-->

                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>