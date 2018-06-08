<html>
        <head>
                <title>CodeIgniter Tutorial</title>
        </head>
        <body>
		<?php foreach ($pra as $practice_item): ?>

		        <h3><?php echo $practice_item['id_practice']; ?></h3>
		        <div class="main">
		                <?php echo $practice_item['name']; ?>
		        </div>
		        <p>View article</p>

		<?php endforeach; ?>
		<em>&copy; 2015</em>
        </body>
</html>