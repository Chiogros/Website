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
		require("parts/header.php");
		?>
	</header>
	
	<section>
		<h2>Projects</h2>
		<?php
		require("../data/fr/projects.php");
		
		foreach ($projects as $project) { ?>
			<article class="project">
				<div class="projectBody">
					
					<div>
						<h3><?= $project["title"] ?></h3>
						<p class="language"><?= $project["language"] ?></p>
						<p class="description"><?= $project["description"] ?></p>
					</div>
					
					<div>
						<?php
						if (isset($project["tryURL"])) { ?>
							<a href="<?= $project["tryURL"] ?>">Try</a>
						<?php 
						}
						if (isset($project["sourceCodeURL"])) { ?>
							<a class="sourceCodeURL" href="<?= $project["sourceCodeURL"] ?>">Source code</a>
						<?php } ?>
					</div>
				</div>
				
				<?php
				if (isset($project["image"])) { ?>
					<img class="projectImage" src="<?= $project["image"]["uri"] ?>"/>
				<?php } ?>
				
			</article>
		<?php } ?>
	</section>
	
	<footer>
		<?php
		require("parts/footer.php");
		?>
	</footer>
</body>
</html>
