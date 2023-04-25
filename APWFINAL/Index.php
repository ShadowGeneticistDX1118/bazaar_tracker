<?php
	
	
	require 'includes/database.php';
	
	$conn = getDB();
	
	
	$sql = "SELECT *
			FROM FFXII
			ORDER BY Item;";
			
	
	$results = mysqli_query($conn, $sql);
	
	
	if ($results === false){
		echo mysqli_error($conn);
	}else{
		$FFXII = mysqli_fetch_all($results, MYSQLI_ASSOC);
	}
		
		
	?>
	
	<?php require 'includes/header.php'; ?>
	
			<a href="Login.php"> Login </a>
			
				<?php if (empty ($item)): ?>
					<p> No items found.</p>
				<?php else: ?>
			
				<ul>
					<?php foreach($items as $item): ?>
					<li>
						<article>
							<h2><a href="item.php?id=<?= $item['id']; ?>"> <?= htmlspecialchars($item['item']); ?> </a></h2>
							<p>	<?= htmlspecialchars($item['content']); ?> </p>
						</article>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
				
			
<?php require 'includes/footer.php'; ?>