<!--   Core JS Files   -->
<script src="<?= base_url('assets/js/admin/core/jquery.3.2.1.min.js');?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/admin/core/popper.min.js');?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/admin/core/bootstrap.min.js');?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= base_url('assets/js/admin/plugins/bootstrap-switch.js');?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?= base_url('assets/js/admin/plugins/chartist.min.js');?>"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url('assets/js/admin/plugins/bootstrap-notify.js');?>"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?= base_url('assets/js/admin/light-bootstrap-dashboard.js?v=2.0.0');?>" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url('assets/js/admin/demo.js');?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/admin/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
