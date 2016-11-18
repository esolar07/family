
<?php 
	$pgTitle = "Home";	
	include ("inc/header.php");
	
	try{
		$results = $db->query('SELECT * FROM familyMembers WHERE adult = 1');	
		$results2 = $db->query('SELECT * FROM familyMembers WHERE adult = 0');
	} catch(Exception $e){
		echo $e->getMessage();
		die();
	}
	
	$parents = $results->fetchAll(PDO::FETCH_ASSOC);
	$kids = $results2->fetchAll(PDO::FETCH_ASSOC);

?>

	<section class="jumbotron">
	
		<div class="familyPic">
			<img class="familyPic__lrgImg" alt="Solar Family Image" src="http://i.huffpost.com/gen/3115980/images/o-POP-CULTURE-PAINTING-SUPERHEROES-FLEMISH-OLD-facebook.jpg">
			<h1 class="familyPic__title"> <?php echo ucwords($siteTitle); ?> </h1>
		</div>
		
	</section>
	
	<section class="familyMembers">
	
		<div class="familyMembers__row familyMembers--1">
		
			<?php foreach($parents as $parent){ ?>
					<div class="familyMembers__parent">
						<?php echo "<a href='/family/profile.php?id=" . $parent["id"] ."'>" ?>
							<img src="">
							<p> <?php echo ucwords($parent["name"]); ?></p>
						</a>
					</div>
			<?php } ?>
		</div>
		
		<div class="familyMembers__row familyMembers--2">
			<?php foreach($kids as $kid) { ?>
				<div class="familyMembers__kid">
					<a href="/family/profile.php?id="<?php echo $kid["id"] ?>>
						<img src="">
						<p> <?php echo ucwords($kid["name"]); ?> </p>
					</a>
				</div>
			<?php } ?>

		</div>
		
	</section>
	
<?php include ("inc/footer.php");?>