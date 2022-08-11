<?php


//echo "<pre>";
//
////print_r(get_active_user());
////echo "<hr />";
////print_r(get_user_roles());
////echo "<hr />";
////echo isAllowedViewModule();
//
//echo "</pre>";

?>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ana Sayfa
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">




            <!-- new row -->
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Hizmetlerimiz</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="pieprogress text-primary" data-plugin="circleProgress" data-value=".<?=basamak_belirleme($productCount);?>" data-thickness="10" data-start-angle="0" data-empty-fill="rgba(24, 138, 226, .3)" data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">
                                    <strong>%<?= basamak_belirleme($productCount); ?></strong>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h3 class="m-b-xs text-right counter" data-plugin="counterUp"><?= $productCount; ?></h3>
                                <small class="text-muted">Adet Hizmet Eklenmiş</small>
                            </div>
                        </div>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Markalar</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="pieprogress text-success" data-plugin="circleProgress" data-value=".<?= basamak_belirleme($brandCount); ?>" data-thickness="10" data-start-angle="0" data-empty-fill="rgba(16, 196, 105,.3)" data-fill="{&quot;color&quot;: &quot;#10c469&quot;}">
                                    <strong>%<?= basamak_belirleme($brandCount); ?></strong>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h3 class="m-b-xs text-right counter" data-plugin="counterUp"><?= $brandCount ?></h3>
                                <small class="text-muted">Adet Marka Eklenmiş</small>
                            </div>
                        </div>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Kullanıcılar</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="pieprogress text-warning" data-plugin="circleProgress" data-value=".<?= basamak_belirleme($userCount); ?>" data-thickness="10" data-start-angle="0" data-empty-fill="rgba(249, 200, 81, .3)" data-fill="{&quot;color&quot;: &quot;#f9c851&quot;}">
                                    <strong>%<?= basamak_belirleme($userCount); ?></strong>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h3 class="m-b-xs text-right counter" data-plugin="counterUp"><?= $userCount; ?></h3>
                                <small class="text-muted">Adet Kullanıcı Eklenmiş</small>
                            </div>
                        </div>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Ziyaretci Notları</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="pieprogress text-danger" data-plugin="circleProgress" data-value=".<?= basamak_belirleme($testimonialCount); ?>" data-thickness="10" data-start-angle="0" data-empty-fill="rgba(255, 91, 91, .3)" data-fill="{&quot;color&quot;: &quot;#ff5b5b&quot;}">
                                    <strong>%<?= basamak_belirleme($testimonialCount); ?></strong>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h3 class="m-b-xs text-right counter" data-plugin="counterUp"><?= $testimonialCount; ?></h3>
                                <small class="text-muted">revenue today</small>
                            </div>
                        </div>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->




    </div><!-- END column -->
</div>
