<html>
<head>
    <title>Login</title>
</head>
<style>
#mainContent form{
    width: 400px;
    height: 200px;
    padding: 10px;
    margin: 0px auto;
    margin-top: 200px;
    border: solid 1px #e3e3e3;
    border-radius: 10px;
    -web-kit-border-radius: 10px;
    -moz-border-radius: 10px;
    -o-border-radius: 10px;
}

</style>

<body>
<!-- end header -->

<!-- mainContentWrapper -->
<div id="mainContentWrapper">

	<!-- sidebar -->
	
	<!-- End sidebar -->



	<!-- mainContent --> 
	<div id="mainContent">
		
		<form action="includes/scripts/loginScript.php" method="post">
                    <h3>Login</h3>
		    <p>E-mail: <input type="text" name="email" /></p>
		    <p>Password:<input type="password" name="password" /></p>
			
		    <input class="submit" type="submit" />
		</form>
		
	</div>
	<!-- End mainContent --> 



	<!-- sidebar2 -->
	
	<!-- End sidebar2 -->

</div><!-- end mainContentWrapper -->

	<!-- footer -->
	
	<!-- end footer -->
</body>
</html>