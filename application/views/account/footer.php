</div>
<!-- /page content -->

<!-- footer content -->
<footer>
	<div class="pull-right">
		Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?=base_url()?>assets/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?=base_url()?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?=base_url()?>assets/vendors/bernii/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?=base_url()?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>assets/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?=base_url()?>assets/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?=base_url()?>assets/js/flot/jquery.flot.orderBars.js"></script>
<script src="<?=base_url()?>assets/js/flot/date.js"></script>
<script src="<?=base_url()?>assets/js/flot/jquery.flot.spline.js"></script>
<script src="<?=base_url()?>assets/js/flot/curvedLines.js"></script>
<!-- jVectorMap -->
<script src="<?=base_url()?>assets/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?=base_url()?>assets/js/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/js/datepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?=base_url()?>assets/js/custom.js"></script>

<!-- Skycons -->
<script>
	$(document).ready(function() {
		var icons = new Skycons({
				"color": "#73879C"
			}),
			list = [
				"clear-day", "clear-night", "partly-cloudy-day",
				"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
				"fog"
			],
			i;

		for (i = list.length; i--;)
			icons.set(list[i], list[i]);

		icons.play();
	});
</script>
<!-- /Skycons -->
</body>
</html>