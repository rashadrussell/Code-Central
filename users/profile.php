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
		<div class="topInfo">
                    <h3><?php print $userInfo['firstname'] . ' ' . $userInfo['lastname']; ?></h3>
                
                    <img class="profileImage" src="img/avatar.png" />
                    <p><h3>Country</h3> <?php echo $userInfo['country']; ?> </p>
                    <p><h3>Website</h3> <a href="http://<?php echo $userInfo['website']; ?>/"><?php echo $userInfo['website']; ?></a> </p>
                </div>
                
                <div class='bio'>
                    <h3>Bio</h3>
		    <p><?php echo $userInfo['bio']; ?></p>
                </div>
                
              <!--
                <div class="checkboxList">
                    <p>Resume:</p>
                    <form>
                        <p>HTML: <input type="checkbox" name="html" /></p>
                        <p>CSS: <input type="checkbox" name="html" /></p>
                        <p>Javascript: <input type="checkbox" name="html" /></p>
                        <p>HTML5: <input type="checkbox" name="html" /></p>
                        <p>CSS3: <input type="checkbox" name="html" /></p>
                        <p>PHP: <input type="checkbox" name="html" /></p>
                        <p>Python: <input type="checkbox" name="html" /></p>
                        <p>Ruby: <input type="checkbox" name="html" /></p>
                        <p>J Query: <input type="checkbox" name="html" /></p>
                        <p>Django: <input type="checkbox" name="html" /></p>
                        <p>Wordpress: <input type="checkbox" name="html" /></p>
                        <p>Joomla: <input type="checkbox" name="html" /></p>
                        <p>Drupal: <input type="checkbox" name="html" /></p>
                        <p>CodeIgniter: <input type="checkbox" name="html" /></p>
                        <p>ZendPHP: <input type="checkbox" name="html" /></p>
                        <p>CakePHP: <input type="checkbox" name="html" /></p>
                        <p>Rails: <input type="checkbox" name="html" /></p>
                        <p>Ajax: <input type="checkbox" name="html" /></p>
                        <p>MySQL: <input type="checkbox" name="html" /></p>
                        <p>PostgreSQL: <input type="checkbox" name="html" /></p>
                        <p>Photoshop: <input type="checkbox" name="html" /></p>
                        <p>Illustrator: <input type="checkbox" name="html" /></p>
                        <p>Flash: <input type="checkbox" name="html" /></p>
                        <input type="submit" value="edit"/></p>
                    </form>
                </div>
                -->
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


