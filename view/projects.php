<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="css/body.css">
	<link rel="stylesheet" href="css/projects.css">
	<meta charset="UTF-8">
  <link rel="icon" href="data:,">
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
				 <h3><?= $project["title"] ?></h3>
				 <p class="language"><?= $project["language"] ?></p>
				 <p class="description"><?= $project["description"] ?></p>
					
				 <div>
						<?php
						if (isset($project["tryURL"])) { ?>
							<a href="<?= $project["tryURL"] ?>" target="_blank">Try</a>
						<?php 
						}
						if (isset($project["sourceCodeURL"])) { ?>
							<a class="sourceCodeURL" href="<?= $project["sourceCodeURL"] ?>" target="_blank" >Source code</a>
						<?php } ?>
				</div>
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
