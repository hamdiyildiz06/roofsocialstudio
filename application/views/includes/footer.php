<?php $settings = get_settings(); ?>

<footer id="footer" class="clearfix dark">

    <!-- .footer start -->
    <!-- ================ -->
   <!-- <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-content">
                            <div class="logo-footer"><img id="logo-footer" src="images/logo_blue.png" alt=""></div>
                            <p>
                                <?php /*echo $settings->mission ; */?>
                            </p>
                            <ul class="list-inline mb-20">
                                <li class="list-inline-item"><i class="text-default fa fa-map-marker pr-1"></i> <?php /*echo $settings->address; */?></li>
                                <li class="list-inline-item"><i class="text-default fa fa-phone pl-10 pr-1"></i> <?php /*echo $settings->phone_1; */?></li>
                                <li class="list-inline-item"><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-1"></i> <?php /*echo $settings->email; */?></a></li>
                            </ul>
                            <div class="separator-2"></div>
                            <ul class="social-links circle margin-clear animated-effect-1">

                                <?php /*if(!empty($settings->facebook)){ */?>
                                    <li class="facebook"><a target="_blank" href="<?php /*echo $settings->facebook; */?>"><i class="fa fa-facebook"></i></a></li>
                                <?php /*} */?>
                                <?php /*if(!empty($settings->twitter)){ */?>
                                    <li class="twitter"><a target="_blank" href="<?php /*echo $settings->twitter; */?>"><i class="fa fa-twitter"></i></a></li>
                                <?php /*} */?>
                                <?php /*if(!empty($settings->instagram)){ */?>
                                    <li class="instagram"><a target="_blank" href="<?php /*echo $settings->instagram; */?>"><i class="fa fa-instagram"></i></a></li>
                                <?php /*} */?>
                                <?php /*if(!empty($settings->linkedin)){ */?>
                                    <li class="linkedin"><a target="_blank" href="<?php /*echo $settings->linkedin; */?>"><i class="fa fa-linkedin"></i></a></li>
                                <?php /*} */?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-content">
                            <div id="map-canvas"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- .footer end -->



    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix ">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-content">
                                <div class="logo-footer"><img id="logo-footer" src="<?= base_url() ?>/images/logo_light_blue.png" alt=""></div>
                                <p>
                                    <?php echo character_limiter(strip_tags($settings->mission), 120); ?>
                                </p>
                                <div class="separator-2"></div>
                                <nav>
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Anasayfa</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url("roof-Social-kim"); ?>">Roof Social kim ?</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url("hizmetlerimiz"); ?>">Hizmetlerimiz</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url("markalar"); ?>">Markalar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url("iletisim"); ?>">İletişim</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="footer-content">
                                <h2 class="title">Hizmetlerimiz</h2>
                                <div class="separator-2"></div>

                                <?php foreach($products_four as $product) { ?>
                                    <div class="media margin-clear">
                                        <div class="d-flex pr-2">
                                            <div class="overlay-container">
                                                <img class="media-object"
                                                     src="<?php echo get_picture("product_v", get_product_cover_image($product->id), "348x215"); ?>"
                                                     alt="<?php echo $product->title; ?>">
                                                <a href="<?= base_url("hizmetlerimiz-detay/$product->url") ?>" class="overlay-link small"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="<?= base_url("hizmetlerimiz-detay/$product->url") ?>"><?php echo $product->title; ?></a></h6>
                                            <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i><?php echo get_readable_date($product->createdAt); ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                <?php } ?>
                                <div class="text-right space-top">
                                    <a href="<?= base_url("hizmetlerimiz"); ?>" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>Tümü</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-content">
                                <h2 class="title">Resim Galerisi</h2>
                                <div class="separator-2"></div>
                                <div class="row grid-space-10">
                                    <?php foreach($galleries_six as $galleryy) { ?>
                                        <div class="col-4 col-lg-6">
                                            <div class="overlay-container mb-10">
                                                <img
                                                        src="<?php echo get_picture("galleries_v/images/$galleryy->folder_name",get_gallery_cover_image($galleryy->folder_name), "350x216"); ?>"
                                                        alt="<?php echo $galleryy->title; ?>">
                                                <a href="<?php echo base_url("fotograf-galerisi/$galleryy->url"); ?>" class="overlay-link small">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <hr>
                                <div class="text-right space-top">
                                    <a href="<?= base_url("fotograf-galerisi"); ?>" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>Tümü</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-content">
                                <h2 class="title">İletişim</h2>
                                <div class="separator-2"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>
                                <ul class="social-links circle animated-effect-1">
                                    <?php if(!empty($settings->facebook)){ ?>
                                        <li class="facebook"><a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <?php } ?>
                                    <?php if(!empty($settings->twitter)){ ?>
                                        <li class="twitter"><a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                                    <?php } ?>
                                    <?php if(!empty($settings->instagram)){ ?>
                                        <li class="instagram"><a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                                    <?php } ?>
                                    <?php if(!empty($settings->linkedin)){ ?>
                                        <li class="linkedin"><a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <?php } ?>
                                </ul>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li><i class="fa fa-map-marker pr-2 text-default"></i> One infinity loop, 54100</li>
                                    <li><i class="fa fa-phone pr-2 text-default"></i> +00 1234567890</li>
                                    <li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-2"></i>info@theproject.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->

    </footer>
    <!-- footer end -->




    <!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Tüm Hakları Saklıdır © <?php echo date("Y"); ?> CMS by <a target="_blank" href="https://www.yildizturk.net">YildizTurk</a>. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .subfooter end -->

</footer>
<!-- footer end -->