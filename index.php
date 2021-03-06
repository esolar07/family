
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
			<img class="familyPic__lrgImg js-lrg-lazy" alt="Solar Family Image" data-original="/family/images/family.jpg">
			<h1 class="familyPic__title"> <?php echo ucwords($siteTitle); ?> </h1>
		</div>
		
	</section>
	
	<section class="familyMembers">
	
		<div class="familyMembers__row familyMembers--1">
		
			<?php foreach($parents as $parent){ ?>
					<div class="familyMembers__parent">
							<?php echo "<a href='/family/profile.php?id=" . $parent["id"] . "'>" ?>
							<?php echo "<img class='familyMembers__parent-image js-lazy' data-original='/family/images/" . $parent["name"] . ".jpg'>"; ?>
							<div class='familyMembers__parent-name is-familyMembers__parent-name-hoverd'> <?php echo ucwords($parent["name"]); ?></div>
						</a>
					</div>
			<?php } ?>
		</div>
		
		<div class="familyMembers__row familyMembers--2">
			<?php foreach($kids as $kid) { ?>
				<div class="familyMembers__kid">
					<?php echo "<a href='/family/profile.php?id=" . $kid["id"] . "'>" ?>
						<?php echo "<img class='familyMembers__kid-image js-lazy' data-original='/family/images/" . $kid["name"] . ".jpg'>"; ?>
						<div class='familyMembers__kid-name is-familyMembers__kid-name-hoverd'> <?php echo ucwords($kid["name"]); ?> </div>
					</a>
				</div>
			<?php } ?>

		</div>
		
	</section>
	
<?php include ("inc/footer.php");?>