<?php
include 'templates/header.php';
?>
<!-- end header -->

<!-- includes -->
<?php include 'includes/scripts/getSentMessages.php'; ?>

<!-- mainContentWrapper -->
<div id="mainContentWrapper">

	<!-- sidebar -->
	<?php
	include 'templates/sidebar.php';
	?>
	<!-- End sidebar -->



	<!-- mainContent --> 
	<div id="mainContent">
                
                <div id="inboxList">
			<ul>
			   <?php getSentMessages(); ?>
			</ul>
		</div><!-- End inboxList -->
               
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


