<?php
include 'templates/header.php';
?>
<!-- end header -->

<!-- mainContentWrapper -->
<div id="mainContentWrapper">

	<!-- sidebar -->
	<?php
	include 'templates/sidebar.php';
	?>
	<!-- End sidebar -->



	<!-- mainContent --> 
	<div id="mainContent">
		Welcome to Code Central. The one stop shop for all the How-To's in web programming.
		<?php
	        getBody();
		?>
	</div>
	<!-- End mainContent --> 



	<!-- sidebar2 -->
	<?php
	include 'templates/sidebar2.php';
	?>
	<!-- End sidebar2 -->

</div><!-- end mainContentWrapper -->

	<!-- footer -->
	<?php
	include 'templates/footer.php';
	?>
	<!-- end footer -->



