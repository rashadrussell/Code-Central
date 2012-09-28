<?php
include 'templates/header.php';
?>
<!-- end header -->

<!-- includes -->

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
                    <form method="post" action="includes/scripts/sendMessage.php">
			<p>To: <input type="text" name="toWhom" /></p>
			<p>Subject: <input type="text" name="subject" /></p>
                        <p>Message: <textarea class="bio" cols="60" rows="8" name="message"></textarea></p>
			
                        <input class="submit" type="submit" value="Send" />
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


