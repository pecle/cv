<!doctype html>
<html>
<head>
	<title>Romain Colafrancesco</title>
	<meta charset="utf-8">
	<?php include_once('parts/head.php'); ?>

</head>
<body class="jumbotron">
	<div id="header">
		<h1><legend>Romain Colafrancesco</legend></h1>
	</div>

	<div id="container">

		<ul class="nav nav-pills">
		    <li class="active"><a href="#profil" data-toggle="tab">Mon profil</a></li>
		    <li><a href="#diplomes" data-toggle="tab">Diplômes</a></li>
		    <li><a id="tab_competences" href="#competences" data-toggle="tab">Compétences</a></li>
		    <li><a href="#experiences" data-toggle="tab">Experience professionnelle</a></li>
		    <li><a href="#divers" data-toggle="tab">Divers</a></li>
		</ul>
		<div class="tab-content">
		    <div class="tab-pane fade active in" id="profil"><?php include_once('parts/profil.php'); ?></div>
		    <div class="tab-pane fade" id="diplomes"><?php include_once('parts/diplomes.php'); ?></div>
		    <div class="tab-pane fade" id="competences"><?php include_once('parts/competences.php'); ?></div>
		    <div class="tab-pane fade" id="experiences"><?php include_once('parts/experiences.php'); ?></div>
		    <div class="tab-pane fade" id="divers"><?php include_once('parts/divers.php'); ?></div>
		</div>
		
	</div>
</body>
</html>