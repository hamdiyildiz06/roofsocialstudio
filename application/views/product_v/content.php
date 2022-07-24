<div class="main-container dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- banner start -->
                <!-- ================ -->
                <div class="pv-40 banner">
                    <div class="container clearfix">

                        <!-- slideshow start -->
                        <!-- ================ -->
                        <div class="slideshow">

                            <!-- slider revolution start -->
                            <!-- ================ -->
                            <div class="slider-revolution-5-container">

                                <!-- bootsrap 4.0 slider start -->
                                <!-- ================ -->
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php $i =  0; foreach($product_images as $image) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>" class="<?= $image->isCover ? "active" : null;  ?>"></li>
                                        <?php $i++; } ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php foreach($product_images as $image) { ?>
                                            <div class="carousel-item <?= $image->isCover ? "active" : null;  ?>">
                                                <img class="d-block w-100" src="<?php echo base_url("panel/uploads/product_v/800x400/$image->img_url");?>" alt="<?php echo $product->title; ?>">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- bootsrap 4.0 slider  end -->

                            </div>
                            <!-- slider revolution end -->

                        </div>
                        <!-- slideshow end -->

                    </div>
                </div>
                <!-- banner end -->
                <!-- main-container start -->
                <!-- ================ -->
                <section class="main-container padding-ver-clear">
                    <div class="container pv-40">
                        <div class="row">

                            <!-- main start -->
                            <!-- ================ -->
                            <div class="main col-md-12">
                                <h1 class="title"><?php echo $product->title; ?></h1>
                                <div class="separator-2"></div>
                                <p><?php echo $product->description; ?></p>
                            </div>
                            <!-- main end -->
                        </div>
                    </div>
                </section>
                <!-- main-container end -->

                <!-- section start -->
                <!-- ================ -->
                <section class="section pv-40 clearfix">
                    <div class="container">
                        <h3>Diğer <strong>Ürünler</strong></h3>
                        <div class="row grid-space-10">
                            <?php foreach($other_products as $product) { ?>

                                <div class="col-sm-4">
                                    <div class="image-box style-2 mb-20 bordered light-gray-bg">
                                        <div class="overlay-container overlay-visible">

                                            <?php
                                            $image = get_product_cover_image($product->id);
                                            $image = ($image) ? base_url("panel/uploads/product_v/348x215/$image") : base_url("assets/images/portfolio-1.jpg");
                                            ?>

                                            <img src="<?php echo $image; ?>" alt="">
                                            <div class="overlay-bottom text-left">
                                                <p class="lead margin-clear"><?php echo $product->title; ?></p>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <p><?php echo character_limiter(strip_tags($product->description), 30); ?></p>
                                            <a href="<?php echo base_url("urun-detay/$product->url"); ?>" class="btn btn-default btn-sm btn-hvr hvr-sweep-to-right margin-clear">Görüntüle<i class="fa fa-arrow-right pl-10"></i></a>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </section>
                <!-- section end -->
            </div>
        </div>
    </div>
</div>