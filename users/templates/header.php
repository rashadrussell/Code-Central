<?php
session_start();
?>
<?php
$_SESSION['pageId'] = $_GET['pid'];
?>

<?php
include_once ('includes/cdeC_functions.php');
?>

<html>
<head>
<title>Code Central <?php "| " . getTitle(); ?></title>

<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

<div id="header">
	
	<!-- headerContainer -->
	<div id="headerContainer">
		<!-- topContent -->
		<div id="topContent">
			<h2 class="logo"><a href="../">Code Central</a></h2>	
			<ul>
				<li><a href="includes/scripts/logout.php">logout</aali>
				<li>|</li>
				<li><a href="../profile.php"><?php echo $_SESSION['name']; ?></a></li>
			</ul>
		</div>
		<!-- end topContent -->
		
		<!-- nav -->
		<div id="nav">
			<ul>
				<?php
				quickNav();
				
				?>
				<li><a href="#">more...</a></li>
			</ul>
		</div>
		<!-- end nav -->
		
		<div id="friendInfo">
			<ul>
				<li><a href="#" title="inbox">2 Messages</a></li>
				<li><a href="#">10 Friends Online</a></li>
				
			</ul>
		</div>
		<!-- end friendInfo -->
		
	</div>
	<!-- end headerContainer -->
	
</div>
