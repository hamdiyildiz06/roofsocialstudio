<?php $settings = get_settings(); ?>

<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?php echo base_url("assets/images");?>/background-img-3.jpg'); background-position: 50% 30%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 pv-20">
                <h1 class="page-title text-center">Bize Ulaşın</h1>
                <div class="separator"></div>
                <p class="lead text-center">
                    Bize ulaşmak için aşağıdaki kanallardan herhangi birini kullanabilirsiniz
                </p>

                <div class="row">
                    <div class="col-md-6 mt-5">
                        <?= $settings->mission; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form id="" class="margin-clear" role="form" method="post" action="<?php echo base_url("mesaj-gonder"); ?>">
                                <div class="form-group has-feedback">
                                    <label for="name">Ad*</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">E-posta*</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="subject">Konu*</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                                    <i class="fa fa-navicon form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Mesajınız*</label>
                                    <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <?php echo $captcha["image"]; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Doğrulama kodu..">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <button type="submit" class="submit-button btn btn-default">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<div class="clearfix"></div>