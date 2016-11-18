
<?php 
	$pgTitle = "Profile";	
	include ("inc/header.php");
	
	if (!empty($_GET["id"])){
		$person_id = $_GET["id"];
	}
	
	try{
		$results = $db->query('SELECT * FROM familyMembers WHERE id = '.$person_id);	
	} catch(Exception $e){
		echo $e->getMessage();
		die();
	}
	
	$person = $results->fetchAll(PDO::FETCH_ASSOC);
	
?>

	<section class="jumbotron">
		<?php echo "<h1> Hi! I'm" . ucwords($person["name"]) . ".</h1>"; ?> </h1>
	</section>
		
<?php include ("inc/footer.php");?>

