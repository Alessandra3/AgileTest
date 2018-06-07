<html>
        <head>
                <title>CodeIgniter Tutorial</title>
        </head>
        <body>
		<?php foreach ($test as $test_item): ?>

		        <h3><?php echo $test_item['id_company']; ?></h3>
		        <div class="main">
		                <?php echo $test_item['name']; ?>
		        </div>
		        <p>View article</p>

		<?php endforeach; ?>
		<em>&copy; 2015</em>
        </body>
</html>