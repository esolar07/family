
<?php 
	$pgTitle = "Profile";
	
	include ("inc/header.php");
	
	if (!empty($_GET["id"])){
		$person_id = intval($_GET["id"]);
	}
	
	try{
		$results = $db->prepare('SELECT * FROM familyMembers WHERE id = ?');
		$results->bindParam(1, $person_id);
		$results->execute();
	} catch(Exception $e){
		echo $e->getMessage();
		die();
	}
	
	$person = $results->fetchAll(PDO::FETCH_ASSOC);
?>

	<section class="jumbotron">
		<div class="profile">
			<h1 class="profile__intro"> Hi! I'm <?php echo ucwords($person[0]["name"]); ?> </h1>
			<div class="profile__img-container">
				<?php echo "<img class='profile__img' src='/family/images/" . $person[0]["name"] . ".jpg'>"; ?>
			</div>
		</div>
	</section>
		
<?php include ("inc/footer.php");?>

