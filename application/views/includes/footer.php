<?php $settings = get_settings(); ?>

<footer id="footer" class="clearfix dark">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-content text-center">
                            <ul class="social-links circle margin-clear animated-effect-1">

                                <?php if(!empty($settings->facebook)){ ?>
                                    <li class="facebook"><a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->twitter)){ ?>
                                    <li class="tiktok"><a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fa-brands fa-tiktok"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->instagram)){ ?>
                                    <li class="instagram"><a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->linkedin)){ ?>
                                    <li class="linkedin"><a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                                <?php } ?>
                            </ul>

                            <ul class="list-inline">
                                <?php if(!empty($settings->address)){ ?>
                                    <li class="list-inline-item" style="color: #c7ac56 !important;"><i class="text-default fa fa-map-marker pr-1"></i> <?php echo $settings->address; ?></li>
                                <?php } ?>
                                <?php if(!empty($settings->phone_1)){ ?>
                                    <li class="list-inline-item"><a href="tel:<?= ilk_karakter_phone($settings->phone_1); ?>"><i class="text-default fa fa-phone pl-10 pr-1"></i> <?php echo $settings->phone_1; ?></li></a>
                                <?php } ?>
                                <?php if(!empty($settings->email)){ ?>
                                    <li class="list-inline-item"><a style="color: #c7ac56 !important;" href="mailto:<?php echo $settings->email; ?>" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-1"></i> <?php echo $settings->email; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->




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