<div class="nk-main">
    <div class="nk-gap-2">
        <div class="container">
            <div class="row vertical-gap">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php if ($state == 'success') : ?>
                        <div class="nk-info-box text-success">
                            <div class="nk-info-box-icon">
                                <i class="ion-checkmark-round"></i>
                            </div>
                            <h3>Success</h3>
                            <em>Successfully Activate Your Account. You'll Be Redirect In <p id="sec_counter">0</p></em>
                        </div>
                    <?php endif; ?>
                    <?php if ($state == 'error_failed') : ?>
                        <div class="nk-info-box text-danger">
                            <div class="nk-info-box-icon">
                                <i class="ion-close-round"></i>
                            </div>
                            <h3>Error</h3>
                            <em>Failed To Activate Your Account. You'll Be Redirect In <p id="sec_counter">0</p></em>
                        </div>
                    <?php endif; ?>
                    <?php if ($state == 'error_fatal') : ?>
                        <div class="nk-info-box text-danger">
                            <div class="nk-info-box-icon">
                                <i class="ion-close-round"></i>
                            </div>
                            <h3>Error</h3>
                            <em>Fatal Error. You'll Be Redirect In <p id="sec_counter">0</p></em>
                        </div>
                    <?php endif; ?>
                    <?php if ($state == 'error_invalid') : ?>
                        <div class="nk-info-box text-danger">
                            <div class="nk-info-box-icon">
                                <i class="ion-close-round"></i>
                            </div>
                            <h3>Error</h3>
                            <em>Your Account Is Already Activated / Link Expired. You'll Be Redirect In <p id="sec_counter">0</p></em>
                        </div>
                    <?php endif; ?>
                    <script>
                        var timeleft = 10;
                        var downloadTimer = setInterval(() => {
                            if (timeleft <= 0) {
                                clearInterval(downloadTimer);
                                document.getElementById("sec_counter").innerHTML = "0 seconds";
                                setTimeout(() => {
                                    window.location = '<?= base_url() ?>';
                                }, 500);
                            } else {
                                document.getElementById("sec_counter").innerHTML = timeleft + " seconds";
                            }
                            timeleft -= 1;
                        }, 1000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>