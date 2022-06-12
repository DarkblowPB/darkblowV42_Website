<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">
                    SET NEW
                </span>
                PASSWORD
            </span></h3>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?= form_open(base_url('forgotpassword/verifyid/' . $secret_token), 'id="setnewpassword_form" autocomplete="off"') ?>
                <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
                <div class="form-group">
                    <label class="col-form-labeel">New Password</label>
                    <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter Your New Password" autofocus>
                </div>
                <div class="form-group">
                    <label class="col-form-labeel">Confirm New Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Enter Your Confirm New Password">
                </div>
                <div class="form-group text-center">
                    <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Submit">
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>