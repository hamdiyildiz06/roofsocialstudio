<?php $user = get_active_user(); ?>

<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)">
                        <img class="img-responsive"
                             src="<?php echo base_url("assets"); ?>/assets/images/221.jpg"
                             alt="<?php echo convertToSEO($user->full_name); ?>"/>
                    </a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username"><?php echo $user->full_name; ?></a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>İşlemler</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color" href="<?php echo base_url(); ?>">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Anasayfa</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("users/update_form/$user->id"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                        <span>Profilim</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("logout"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                        <span>Çıkış</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">


                <?php if (isAllowedViewModule("dashboard")){ ?>
                     <li>
                        <a href="<?php echo base_url("dashboard"); ?>">
                            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                            <span class="menu-text">Anasayfa</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if (isAllowedViewModule("settings")){ ?>
                    <li>
                        <a href="<?php echo base_url("settings"); ?>">
                            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                            <span class="menu-text">Site Ayarları</span>
                        </a>
                    </li>
                <?php } ?>

<!--                <?php /*if (isAllowedViewModule("emailsettings")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("emailsettings"); */?>">
                            <i class="menu-icon zmdi zmdi-email zmdi-hc-lg"></i>
                            <span class="menu-text">E-posta Ayarları</span>
                        </a>
                    </li>
                --><?php /*} */?>

<!--                <?php /*if (isAllowedViewModule("galleries")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("galleries"); */?>">
                            <i class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i>
                            <span class="menu-text">Galeri İşlemleri</span>
                        </a>
                    </li>
                --><?php /*} */?>

<!--                <?php /*if (isAllowedViewModule("slides")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("slides"); */?>">
                            <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
                            <span class="menu-text">Slider</span>
                        </a>
                    </li>
                --><?php /*} */?>

                <?php if (isAllowedViewModule("product")){ ?>
                    <li>
                        <a href="<?php echo base_url("product"); ?>">
                            <i class="menu-icon fa fa-cubes"></i>
                            <span class="menu-text">Hizmetlerimiz</span>
                        </a>
                    </li>
                <?php } ?>

<!--                <?php /*if (isAllowedViewModule("services")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("services"); */?>">
                            <i class="menu-icon fa fa-cutlery"></i>
                            <span class="menu-text">Hizmetlerimiz</span>
                        </a>
                    </li>
                --><?php /*} */?>

<!--                <?php /*if (isAllowedViewModule("portfolio_categories") || isAllowedViewModule("portfolio")){ */?>
                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon fa fa-asterisk"></i>
                            <span class="menu-text">Portfolyo İşlemleri</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php /*echo base_url("portfolio_categories"); */?>">
                                    <span class="menu-text">Portfolyo Kategorileri</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php /*echo base_url("portfolio"); */?>">
                                    <span class="menu-text">Portfolyo</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                --><?php /*} */?>

<!--                <?php /*if (isAllowedViewModule("news")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("news"); */?>">
                            <i class="menu-icon fa fa-newspaper-o"></i>
                            <span class="menu-text">Haberler</span>
                        </a>
                    </li>
                --><?php /*} */?>

<!--                <?php /*if (isAllowedViewModule("courses")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("courses"); */?>">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">Eğitimler</span>
                        </a>
                    </li>
                --><?php /*} */?>

<!--                <?php /*if (isAllowedViewModule("references")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("references"); */?>">
                            <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                            <span class="menu-text">Referanslar</span>
                        </a>
                    </li>
                --><?php /*} */?>

                <?php if (isAllowedViewModule("brands")){ ?>
                    <li>
                        <a href="<?php echo base_url("brands"); ?>">
                            <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
                            <span class="menu-text">Markalar</span>
                        </a>
                    </li>
                <?php } ?>

<!--                <?php /*if (isAllowedViewModule("user_roles")){ */?>
                    <li>
                        <a href="<?php /*echo base_url("user_roles"); */?>">
                            <i class="menu-icon fa fa-user-times"></i>
                            <span class="menu-text">Kullanıcı Rolü</span>
                        </a>
                    </li>
                --><?php /*} */?>

                <?php if (isAllowedViewModule("users")){ ?>
                    <li>
                        <a href="<?php echo base_url("users"); ?>">
                            <i class="menu-icon fa fa-user-secret"></i>
                            <span class="menu-text">Kullanıcılar</span>
                        </a>
                    </li>
                <?php } ?>

<!--                <?php /*if (isAllowedViewModule("dashboard")){ */?>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text">Aboneler</span>
                        </a>
                    </li>
                --><?php /*} */?>

                <?php if (isAllowedViewModule("testimonials")){ ?>
                    <li>
                        <a href="<?php echo base_url("testimonials"); ?>">
                            <i class="menu-icon fa fa-comments"></i>
                            <span class="menu-text">Ziyaretçi Notları</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if (isAllowedViewModule("popups")){ ?>
                    <li>
                        <a href="<?php echo base_url("popups"); ?>">
                            <i class="menu-icon zmdi zmdi-lamp zmdi-hc-lg"></i>
                            <span class="menu-text">Popup Hizmeti</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if (isAllowedViewModule("dashboard")){ ?>
                    <li>
                        <a href="documentation.html">
                            <i class="menu-icon zmdi zmdi-view-web zmdi-hc-lg"></i>
                            <span class="menu-text">Ana Sayfa</span>
                        </a>
                    </li>
                <?php } ?>
            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>