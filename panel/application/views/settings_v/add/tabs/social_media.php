<div role="tabpanel" class="tab-pane fade" id="tab-5">
    <div class="row">

        <div class="form-group col-md-8">
            <label>E-posta Adresiniz</label>
            <input class="form-control" placeholder="Şirketinize ait e-posta adresi"
                   name="email"
                   value="<?php echo isset($form_error) ? set_value("email") : ""; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
            <?php } ?>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label>Facebook</label>
            <input class="form-control" placeholder="Facebook Adresiniz"
                   name="facebook">
        </div>

        <div class="form-group col-md-4">
            <label>Tiktok</label>
            <input class="form-control" placeholder="Tiktok Adresiniz"
                   name="twitter">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label>Instagram</label>
            <input class="form-control" placeholder="Instagram Adresiniz"
                   name="instagram">
        </div>

        <div class="form-group col-md-4">
            <label>Linkedin</label>
            <input class="form-control" placeholder="Linkedin Adresiniz"
                   name="linkedin">
        </div>

    </div>



</div><!-- .tab-pane  -->