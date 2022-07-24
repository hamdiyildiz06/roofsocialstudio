<section class="clearfix pv-40">
    <div class="container">
        <div class="row justify-content-lg-center">

            <h2 class="mt-4"><strong>Diğer Ürünlerimiz</strong></h2>
            <div class="separator-2"></div>
            <div class="row grid-space-10">

<!--                <div class="clearfix visible-md-down"></div>-->
                <?php foreach($products as $product) { ?>
                    <div class="col-md-6 col-lg-3">
                    <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                        <div class="overlay-container">
                            <img
                                    src="<?php echo get_picture("product_v", get_product_cover_image($product->id), "348x215"); ?>"
                                    alt="<?php echo $product->title; ?>">
                        </div>
                        <div class="body">
                            <h3 style="font-size: 15px;"><?php echo $product->title; ?></h3>
                            <div class="separator"></div>
                            <p>
                                <?php echo character_limiter(strip_tags($product->description), 200); ?>
                            </p>
                            <a href="<?php echo base_url("portfolyo-detay/$product->url"); ?>" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Görüntüle<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>