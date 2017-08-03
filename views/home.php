<div id="content">
	<h1>Home</h1>
	<p>Bonjour, <span style="color: #8ab928; font-style: italic;"><?php echo $_SESSION['login']; ?></span>, que voulez-vous faire ?</p>
	<nav id="homeaction">
		<ul>
			<li><a href="#" class="btmodele">Créer une fiche</a></li>
			<li><a href="<?php echo './index.php?controllers=search'; ?>">Rechercher une fiche</a></li>
			<li><a href="#">Affichers les 10 dernières fiches créées</a></li>
		</ul>
	</nav>
</div>