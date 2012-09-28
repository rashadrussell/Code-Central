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
                    <form method="post" action="includes/scripts/profileInfoUpdate.php">
			<p>First Name: <input type="text" name="firstname" value="<?php echo $userInfo['firstname']; ?>" /></p>
			<p>Last Name: <input type="text" name="lastname" value="<?php echo $userInfo['lastname']; ?>" /></p>
			<p>Country: <input type="text" name="country" value="<?php echo $userInfo['country']; ?>" /></p>
			<p>Website: <input type="text" name="website" value="<?php echo $userInfo['website']; ?>" /></p>
                        <p>Bio: <textarea class="bio" cols="60" rows="8" name="bio"><?php echo $userInfo['bio']; ?></textarea></p>
			
                        <input class="submit" type="submit" value="Edit" />
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


