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
		<?php
			foreach($family as $person){
				echo "<div>".$person["name"]."</div>";
			}
		?>
		
	</section>
	
<?php include ("inc/footer.php");?>