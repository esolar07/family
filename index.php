
<?php 
	$pgTitle = "Home";	
	include ("inc/header.php");
	
	try{
		$results = $db->query('SELECT * FROM familyMembers WHERE adult = 1');	
		$results2 = $db->query('SELECT * FROM familyMembers WHERE adult = 2');
	} catch(Exception $e){
		echo $e->getMessage();
		die();
	}
	
	$parents = $results->fetchAll(PDO::FETCH_ASSOC);
	$kids = $results2->fetchAll(PDO::FETCH_ASSOC);
	
	// echo '<pre>';
	// var_dump($family);
	// echo '</pre>';
?>

	<section class="jumbotron">
		<div class="familyPic">
			<img class="familyPic__lrgImg" alt="Solar Family Image" src="http://sachagoldberger.com/portfolio/wp-content/uploads/15_07_13_Super-H%C3%A9ros-Flamands-_Triplette_028-C-copie.jpg">
		</div>
	</section>
	<section class="familyMembers">
		<div class="familyMembers__row familyMembers--1">
		
			<?php
				foreach($family as $parent){
					echo '<div class="familyMembers__parent">';
						echo '<a href=""><img src="">';
							echo "<p>". $parent["name"] . "</p>";
						echo '</a>';
					echo '</div>';
				}
			?>
			
			<!-- <div class="familyMembers__parent">
				<img src="">
			</div> -->
		</div>
		<div class="familyMembers__row familyMembers--2">
			<div class="familyMembers__kid">
				<img src="">
			</div>
			<div class="familyMembers__kid">
				<img src="">
			</div>
			<div class="familyMembers__kid">
				<img src="">
			</div>
			<div class="familyMembers__kid">
				<img src="">
			</div>
		</div>
	</section>
	
<?php include ("inc/footer.php");?>