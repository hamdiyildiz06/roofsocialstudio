<?php $settings = get_settings(); ?>

<div class="header-top dark">
    <div class="container">
        <div class="row">
            <div class="col-2 col-md-5">
                <!-- header-top-first start -->
                <!-- ================ -->
                <div class="header-top-first clearfix">
                    <ul class="social-links circle small clearfix hidden-sm-down">
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
                    <div class="social-links hidden-md-up circle small">
                        <div class="btn-group dropdown">
                            <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                            <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
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
                        </div>
                    </div>
                </div>
                <!-- header-top-first end -->
            </div>
            <div class="col-10 col-md-7">

                <!-- header-top-second start -->
                <!-- ================ -->
                <div id="header-top-second"  class="clearfix text-right">
                    <ul class="list-inline">
                        <?php if(!empty($settings->phone_1)){ ?>
                            <li class="list-inline-item"><a href="tel:<?= ilk_karakter_phone($settings->phone_1); ?>"><i class="text-default fa fa-phone pl-10 pr-1"></i> <?php echo $settings->phone_1; ?></a></li>
                        <?php } ?>
                        <?php if(!empty($settings->email)){ ?>
                            <li class="list-inline-item"><a style="color: #c7ac56 !important;" href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-1"></i> <?php echo $settings->email; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- header-top-second end -->

            </div>
        </div>
    </div>
</div>