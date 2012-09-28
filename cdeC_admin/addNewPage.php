<?php
include 'templates/header.php';
?>
<!-- end header -->

<!-- includes -->
<?php include 'includes/scripts/getUserInfo.php'; ?>

<!-- mainContentWrapper -->
<div id="mainContentWrapper">

	<!-- sidebar -->
	<?php
	include 'templates/sidebar.php';
	?>
	<!-- End sidebar -->



	<!-- mainContent --> 
	<div id="mainContent">
                
                <div>
                    <form method="post" action="includes/scripts/addNewPageScript.php">
			<p>Title: <input type="text" name="title" /></p>
                        <p>Link Title: <input type="text" name="linkTitle" /></p>
                        <p>Body: <textarea class="bio" cols="60" rows="8" name="body"></textarea></p>
			
                        <input class="submit" type="submit" value="Add" />
                    </form>
                </div>
               
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


