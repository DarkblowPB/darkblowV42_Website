<div class="nk-gap-4"></div>
<!-- START: Footer -->
<footer class="nk-footer">
    <div class="nk-copyright">
        <div class="row vertical-gap mt-10 justify-content-center">
            <div class="container">
                <div class="nk-copyright-left">
                    Copyright &copy; <a href="<?= base_url('home') ?>">
                        <?= $this->darkblowsettings->load()->project_name ?>
                    </a> 2020 - <?= date('Y'); ?>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
</div>

<!-- Object Fit Polyfill -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- GSAP -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<!-- Popper -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sticky Kit -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<!-- imagesLoaded -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Flickity -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
<!-- Jquery Validation -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- Jquery Countdown + Moment -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
<!-- Hammer.js -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/hammerjs/hammer.min.js"></script>
<!-- NanoSroller -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>
<!-- Seiyria Bootstrap Slider -->
<script src="<?= base_url() ?>assets/goodgames/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<!-- GoodGames -->
<script src="<?= base_url() ?>assets/goodgames/assets/js/goodgames.min.js"></script>
<script src="<?= base_url() ?>assets/goodgames/assets/js/goodgames-init.js"></script>
<script src="<?= base_url() ?>assets/goodgames/assets/js/custom.js"></script>
<!-- dataTables -->
<script type="text/javascript" src="<?= base_url() ?>assets/goodgames/assets/vendors/datatables/datatables.min.js"></script>
<!-- END: Scripts -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
<?php if (!empty($this->session->userdata('uid'))) : ?>
    <script>
        function Logout() {
            $.ajax({
                url: '<?= base_url('logout/do_logout') ?>',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                },
                success: function(data) {
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);

                    if (Result.response == 'true') {
                        ShowToast(2000, 'success', Result.message);
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        ShowToast(2000, 'error', Result.message);
                        return;
                    }
                },
                error: function() {
                    ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_28') ?>');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    </script>
<?php endif ?>
<?php if ($this->session->userdata('uid') != '' && $this->session->userdata('access_level') >= 3 && $this->session->userdata('access_level') <= 7) : ?>
    <script>
        function AutomaticLogin() {
            $.ajax({
                url: '<?= base_url('api/admin/loginpanel') ?>',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                },
                success: function(data) {
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString)

                    if (Result.response == 'true') {
                        ShowToast(2000, 'success', Result.message);
                        setTimeout(() => {
                            window.location = '<?= base_url('adm/dashboard') ?>';
                        }, 2000);
                    } else {
                        ShowToast(2000, 'error', Result.message);
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                },
                erorr: function() {
                    ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_26') ?>');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    </script>
<?php endif ?>
</body>

</html>