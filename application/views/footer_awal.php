
	<!-- SCRIPTS -->
	<script src="<?php echo base_url('assets/umum/js/html5shiv.js') ?>"></script>
	<script src="<?php echo base_url('assets/umum/js/jquery-1.10.2.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/umum/js/jquery-migrate-1.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/umum/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/umum/js/jquery.easing.1.3.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/umum/fancybox/jquery.fancybox.pack-v=2.1.5.js') ?>"></script>
	<script src="<?php echo base_url('assets/umum/js/script.js') ?>"></script>
	
	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	</script>

</html>