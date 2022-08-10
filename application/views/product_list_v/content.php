<section class="main-container dark-bg">
    <div class="container">
        <h1 class="page-title">Mesai</h1>
        <p>Sunduğumuz Hizmetlerde Kalite, Zaman ve Memnuniyet Önceliğimizdir</p>
        <div class="separator-2"></div>

        <div class="row">

            <?php foreach($products as $product) { ?>
                <div class="col-sm-4 justify-content-center">
                    <div class="image-box shadow text-center mb-20">
                        <div class="overlay-container justify-content-center">
                            <?php
                                $image = get_product_cover_image($product->id);
                                $image = ($image) ? base_url("panel/uploads/product_v/348x215/$image") : base_url("assets/images/portfolio-1.jpg");
                            ?>
                            <img src="<?php echo $image; ?>" alt="<?php echo $product->title; ?>">
                            <div class="overlay-top">
                                <div class="text"></div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="text">
                                    <a href="<?php echo base_url("mesai-detay/$product->url"); ?>">
                                        <h3><?php echo $product->title; ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>


        </div>
    </div>
</section>