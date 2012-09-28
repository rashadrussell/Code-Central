<?php
include 'templates/header.php';
?>
<!-- end header -->

<!-- includes -->
<?php
require_once('includes/cdeC_functions.php');
?>

<!-- mainContentWrapper -->
<div id="mainContentWrapper">

	<!-- sidebar -->
	<?php
	include 'templates/sidebar.php';
	?>
	<!-- End sidebar -->



	<!-- mainContent --> 
	<div id="mainContent">
            <ul>
                <li><a href="addNewPage.php">Add New </a></li>
		<?php
	        getPages();
		?>
            </ul>
	</div>
	<!-- End mainContent --> 



	<!-- sidebar2 -->
	
	<!-- End sidebar2 -->

</div><!-- end mainContentWrapper -->

	<!-- footer -->
	<?php
	include 'templates/footer.php';
	?>
	<!-- end footer -->



