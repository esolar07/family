<?php 
	$pgTitle = "Pictures";	
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
		<h1 class="page-header">Check Out Our <?php echo ucwords($pgTitle); ?> </h1>
		
		
	</section>
	
<?php include ("inc/footer.php");?>