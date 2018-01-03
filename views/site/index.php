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
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <h2 class="title text-center">Latest products</h2>
                <div class="features_items"><!--features_items-->

                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-4">
                            <a href="/product/<?php echo $product['id'];?>">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo $product['image'];?>" alt="" />
                                            <h2><?php echo $product['price'];?>$</h2>
                                            <p>
                                                <a href="/product/<?php echo $product['id'];?>">
                                                    <?php echo $product['name'];?>
                                                </a>
                                            </p>
                                            <a href="#" data-id="<?php echo $product['id']; ?>"
                                               class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>


                </div><!--features_items-->
            </div>
        </div>
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Recommended products</h2>
                </div><!--/recommended_items-->


    </div>
</section>

    <section style="height: 700px;">

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 700px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container">
                        <div class="carousel-caption car_heith">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">2345</div>
                                    <div class="col-md-4">456</div>
                                    <div class="col-md-4">678</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->

    </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>