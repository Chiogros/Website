<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="css/body.css">
	<link rel="stylesheet" href="css/projects.css">
	<meta charset="UTF-8">
	<title>Alexandre Bouijoux</title>
</head>
<body>
	<header>
		<?php
		require("part/header.php");
		?>
	</header>
	
	<section>
		<h2>Projects</h2>
		<?php
		require("../data/projects.php");
		
		foreach ($projects as $project) { ?>
			<article class="project">
				<h3><?= $project["title"] ?></h3>
				<p><?= $project["description"] ?></p>
				<p><?= $project["language"] ?></p>
			</article>
		<?php } ?>
	</section>
	
	<footer>
		<?php
		require("part/footer.php");
		?>
	</footer>
</body>
</html>
