<div class="nk-gap-4"></div>
<!-- START: Footer -->
<footer class="nk-footer">
    <div class="nk-copyright">
        <div class="row vertical-gap mt-10 justify-content-center">
            <div class="container">
                <div class="nk-copyright-left">
                    Copyright &copy; <a href="<?php echo base_url('home') ?>">DarkblowPB </a><?php echo date('Y'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
</div>
<!-- START: Scripts -->

<script type="text/javascript" src="<?php echo base_url() ?>assets/goodgames/assets/vendors/datatables/datatables.min.js"></script>
<!-- Object Fit Polyfill -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- GSAP -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<!-- Popper -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sticky Kit -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<!-- Jarallax -->
<!-- imagesLoaded -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Flickity -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
<!-- Jquery Validation -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- Jquery Countdown + Moment -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
<!-- Hammer.js -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/hammerjs/hammer.min.js"></script>
<!-- NanoSroller -->
<!-- Seiyria Bootstrap Slider -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<!-- GoodGames -->
<script src="<?php echo base_url() ?>assets/goodgames/assets/js/goodgames.min.js"></script>
<script src="<?php echo base_url() ?>assets/goodgames/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->
<script type="text/javascript">
    $(document).ready( function () 
    {
        $('#table_id').DataTable();
    } );
</script>
<script>
    function ShowToast(timer, type, title){
        Swal.fire({
            toast: true,
            timer: timer,
            position: 'top',
            timerProgressBar: true,
            icon: type,
            title: title,
            showConfirmButton: false
        })
    }
</script>
</body>
</html>