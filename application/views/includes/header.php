<?php $settings = get_settings(); ?>
<style>
    .z-index {
        position: relative;
        z-index: 9;
    }
</style>
<div class="header-container z-index">
    <!-- header-top start -->
    <!-- classes:  -->
    <!-- "dark": dark version of header top e.g. class="header-top dark" -->
    <!-- "colored": colored version of header top e.g. class="header-top colored" -->
    <!-- ================ -->
<!--    --><?php //$this->load->view("includes/top_header"); ?>
    <!-- header-top end -->

    <!-- header start -->
    <!-- classes:  -->
    <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
    <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
    <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
    <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
    <!-- "centered": mandatory class for the centered logo layout -->
    <!-- ================ -->
    <!--    <header class="gradient-background-header transparent-header front-page">-->
    <header class="header dark fixed fixed-all clearfix">
        <!--    <header class="header dark transparent-header-on clearfix">-->
        <!--    <header class="header fixed fixed-desktop clearfix">-->
        <div class="container">
            <div class="row">
                <div class="col-md-auto hidden-md-down pl-3">
                    <!-- header-first start -->
                    <!-- ================ -->
                    <div class="header-first clearfix">

                        <!-- logo -->
                        <div id="logo" class="logo">
                            <a href="<?php echo base_url(); ?>">
                                <img width="300" height="70" id="logo_img" class="responsive"
                                     src="<?= base_url() ?>/panel/uploads/settings_v/150x35/Roof-Logo-o-05.png"
                                     <?php // echo get_picture("settings_v", $settings->logo, "150x35"); ?>

                                     alt="<?php echo $settings->company_name; ?>">
                            </a>
                        </div>

                        <!-- name-and-slogan -->
                        <div class="site-slogan mb-1">
                            <?php echo $settings->slogan; ?>
                        </div>

                    </div>
                    <!-- header-first end -->

                </div>
                <div class="col-lg-8 ml-lg-auto">

                    <!-- header-second start -->
                    <!-- ================ -->
                    <div class="header-second clearfix">

                        <!-- main-navigation start -->
                        <!-- classes: -->
                        <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                        <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                        <!-- ================ -->
                        <div class="main-navigation main-navigation--mega-menu  animated">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                                <div class="navbar-brand clearfix hidden-lg-up">

                                    <!-- logo -->
                                    <div id="logo-mobile" class="logo">
                                        <a href="<?php echo base_url(); ?>">

                                        <?php //$this->agent->is_mobile() ?>

                                            <img id="logo-img-mobile" src="<?php echo base_url() ?>/panel/uploads/settings_v/150x35/Roof-Logo-o-05.png"
                                                 alt="<?php echo $settings->company_name; ?>">

                                        </a>
                                    </div>

                                    <!-- name-and-slogan -->
                                    <div class="site-slogan">
                                        <?php echo $settings->slogan; ?>
                                    </div>

                                </div>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <!-- main-menu -->

                                    <ul class="navbar-nav ml-xl-auto">

                                        <li class="nav-item ">
                                            <a href="<?php echo base_url(); ?>" class="nav-link">Anasayfa</a>
                                        </li>

                                        <li class="nav-item ">
                                            <a href="<?php echo base_url("roof-Social-kim"); ?>" class="nav-link">Roof Social Kim ?</a>
                                        </li>

                                        <li class="nav-item ">
                                            <a href="<?php echo base_url("mesai"); ?>" class="nav-link">Mesai</a>
                                        </li>

                                        <li class="nav-item ">
                                            <a href="<?php echo base_url("markalar"); ?>" class="nav-link">Markalar</a>
                                        </li>

                                    </ul>
                                    <!-- main-menu end -->
                                </div>
                            </nav>
                        </div>
                        <!-- main-navigation end -->
                    </div>
                    <!-- header-second end -->

                </div>
                <div class="col-auto hidden-md-down pl-0 pl-md-1">
                    <!-- header dropdown buttons -->
                    <div class="header-dropdown-buttons">
                        <a href="<?php echo base_url("iletisim"); ?>" class="btn btn-sm btn-default">İletişim <i class="fa fa-envelope-o pl-1"></i></a>
                    </div>
                    <!-- header dropdown buttons end-->
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
</div>

