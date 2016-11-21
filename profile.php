
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
		<div class="profile">
			<h1 class="profile__intro"> Hi! I'm <?php echo ucwords($person[0]["name"]); ?> </h1>
			<div class="profile__img">
				<?php echo "<img class='' src='/family/images/" . $person[0]["name"] . ".jpg'>"; ?>
			</div>
		</div>
	</section>
		
<?php include ("inc/footer.php");?>

