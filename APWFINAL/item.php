<?php
	
	
	require 'includes/database.php';
	require 'includes/article.php';
	
	$conn = getDB();
	
	if (isset($_GET['id'])){
	
	$item = getItem($conn, $_GET['id']);
	
	} else{
		$article = null;
	}
	
	?>
	
	<?php require 'includes/header.php'; ?>

				<?php if ($item === null): ?>
					<p>Article not found. =(</p>
				<?php else: ?>
			
						<article>
							<h2><?= htmlspecialchars($item['item']); ?></h2>
						</article>
				
				<?php endif; ?>
				
<?php require 'includes/footer.php'; ?>