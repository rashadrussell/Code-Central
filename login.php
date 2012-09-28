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
		
		<h3>Login</h3>
		
		<form class="loginForm" action="includes/scripts/loginScript.php" method="post">
			E-mail: <input type="text" name="email" />
			Password:<input type="password" name="password" />
			
			<input class="submit" type="submit" />
		</form>
				
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