<!-- ================ -->
<section class="main-container dark-bg-black">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title" style="color: darkgrey">Marka Listesi</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Çalıştığımız markaların listesini aşağıda görebilirsiniz</p>

                <div class="row">

                    <?php foreach ($brands as $brand) { ?>

                        <div class="col-sm-4 justify-content-center">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container justify-content-center">
                                    <img src="<?php echo get_picture("brands_v", $brand->img_url, "350x216"); ?>" alt="<?php echo $brand->title; ?>">
                                    <div class="overlay-top">
                                        <div class="text"></div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="text">
                                            <h3><?php echo $brand->title; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            <!-- main end -->

        </div>
    </div>
</section>
<!-- main-container end -->
