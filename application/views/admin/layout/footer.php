<div class="text-center">
  <script type='text/javascript' src='https://cdn.trakteer.id/js/embed/trbtn.min.js'></script>
  <script type='text/javascript'>
    (function() {
      var trbtnId = trbtn.init('Support Me On Trakteer', '#be1e2d', 'https://trakteer.id/eyetracker/tip', 'https://cdn.trakteer.id/images/embed/trbtn-icon.png', '25');
      trbtn.draw(trbtnId);
    })();
  </script>
</div>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; <a href="<?= base_url('home') ?>"><?= $this->darkblowsettings->load()->project_name ?></a>
    2020 - <?= date('Y') ?>.
  </strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 4.0.0
  </div>
</footer>
</div>

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- dataTables -->
<script src="<?= base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin/dist/js/adminlte.js"></script>
<!-- Custom Script -->
<script src="<?= base_url() ?>assets/goodgames/assets/js/custom.js"></script>
<script>
  $(document).ready(function() {
    $('.knob').knob({
      draw: function() {
        if (this.$.data('skin') == 'tron') {
          var a = this.angle(this.cv),
            sa = this.startAngle,
            sat = this.startAngle,
            ea, eat = sat + a,
            r = true
          this.g.lineWidth = this.lineWidth
          this.o.cursor && (sat = eat - 0.3) && (eat = eat + 0.3)
          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor && (sa = ea - 0.3) && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }
          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()
          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()
          return false
        }
      }
    });
  })
</script>
</body>

</html>