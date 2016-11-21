<?php 
	$pgTitle = "About";	
	include ("inc/header.php");
	
	try{
		$results = $db->query('SELECT * FROM familyMembers');		
	} catch(Exception $e){
		echo $e->getMessage();
		die();
	}
	$family = $results->fetchAll(PDO::FETCH_ASSOC);
	
?>
	
	<section class="jumbotron">
		<h1>Meet <?php echo ucwords($siteTitle); ?> </h1>
		
		<div class="family-list">
			<?php foreach($family as $person){ ?>
				<?php echo "<img class='family-list__img' src='/family/images/" . $person["name"] . ".jpg'>"; ?>
				<div class="family-list__person"> <?php echo ucwords($person["name"]); ?> </div>
			<?php } ?>
		</div>
	</section>
	
<?php include ("inc/footer.php");?>