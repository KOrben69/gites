<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<script src="https://use.fontawesome.com/b0f2256f6e.js"></script>
<link href="views/template/_css/style.css" type="text/css" rel="stylesheet" />
<title>Titre de la page</title>
</head>

<body>
<?php if(isset($_SESSION['id_user'])) : ?>
<nav id="menu">
	<ul>
		<li><a href="<?php echo './index.php?controllers=home'; ?>">Accueil<i class="fa fa-home" aria-hidden="true"></i></a></li>
		<li><a href="#">Rechercher une fiche<i class="fa fa-search" aria-hidden="true"></i></a></li>
		<li><a href="#">Modifier la fiche<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
		<li><a href="<?php echo './index.php?controllers=fiche&action=edit'; ?>">Créer une fiche<i class="fa fa-plus" aria-hidden="true"></i></a></li>
		<li><a href="#">Changer de modèle<i class="fa fa-file-image-o" aria-hidden="true"></i></a></li>
		<li><a href="<?php echo './index.php?controllers=session&action=deconnexion'; ?>">Déconnexion<i class="fa fa-power-off" aria-hidden="true"></i></a></li>
	</ul>
</nav>
<?php endif; ?>