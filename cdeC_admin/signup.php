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
		
		<h3>Signup</h3>
		
		<form class="signupForm" action="includes/scripts/signupScript.php" method="post">
			First Name: <input type="text" name="firstname" />
			Last Name: <input type="text" name="lastname" />
			E-mail: <input type="text" name="email" />
			Confirm E-mail: <input type="text" name="confirmEmail" />
			Password:<input type="password" name="password" />
			Confirm Password:<input type="password" name="confirmPassword" />
                        Country: <select name="country">
                                    <option>United States</option>
                                    <option>-------------</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <option>Japan</option>
                                 </select>
			Personal Website: <input type="text" name="website" />
                        
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
