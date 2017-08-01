<div id="formulaire">
	<form>
		<div class="row">
			<fieldset>
				<legend>Devis</legend>
				<label>N° Client </label><input type="text" name="nClient">
				<input type="checkbox" name="devisEnvoye" id="devisEnvoye"><label for="devisEnvoye">Devis envoyé</label>
				<select name="option">
					<option selected="selected">Option du :</option>
					<option>Confirme du :</option>
					<option>Solde du :</option>
					<option>Non soldé du :</option>
					<option>Relevé de frais terminé du :</option>
					<option>Annulé du :</option>
					<option>Dates fictives du :</option>
				</select>
				<input type="date" name="dateDebut"> et <input type="date" name="dateFin"> <br>
				<label>Devis n° <label><input type="text" name="nDevis" style="display: inline-block; width: 20px;">
				<select name="typeGite">
					<option selected="selected">Gîtes de Groupes - SARL LES IRIS</option>
					<option>Gîtes scolaires - SARL LES IRIS</option>
				</select><br>
				<label>Option jusqu'au <input type="date" name="dateOption" style="display: inline-block; width: 150px;">
				<label>Arrivée à</label><input type="date" name="dateArrive" style="display: inline-block; width: 150px;">
				<label>Départ à</label><input type="date" name="dateDepart" style="display: inline-block; width: 150px;">
				<label>Année</label><input type="text" name="annee" style="display: inline-block; width: 85px;">
			</fieldset>
		</div>
		<div class="row">
			<fieldset id="infos">
				<legend>Information Client</legend>
				<label>Nom</label><input type="text" name="nomReservation"><label>Prénom</label><input type="text" name="prenomReservation"><label>Société ou intitulé</label><input type="text" name="societe" style="display: inline-block; width: 280px;"><br>
				<label>Adresse</label><input type="text" name="adresse" style="display: inline-block; width: 300px;"><label>CP</label><input type="text" name="cp" style="display: inline-block; width: 100px;"><label>Ville</label><input type="text" name="ville" style="display: inline-block; width: 300px;"><br>
				<label style="float: left;">Tél / fax / mail</label>
				<textarea style="width: 400px;"></textarea><br>
				<label>Formule</label><input type="text" name="formule"><label>Contact</label><input type="text" name="contact"><br>
				<label>Groupe de </label><input type="text" name="groupeType"><label>Connu par</label><input type="text" name="connuPar"><br>
				<label>Thème</label><input type="text" name="theme"><br>
				<label>Lieu</label><input type="text" name="lieu"><label>Adresse</label><input type="text" name="adresseGite"><br>
				<label>Responsable sur le séjour</label><input type="text" name="responsable" style="display: inline-block; width: 300px;">
			</fieldset>
		</div>
		<div class="row">
			<fieldset id="prestation">
				<legend>Prestation</legend>
				<label>Prestation</label>
				<select name="prestation">
					<option>Gestion libre option ménage non compris</option>
					<option>Journée</option>
					<option>Demi Pension</option>
					<option>Pension complète</option>
					<option>Nuit + Petit déjeuner</option>
					<option>Déjeuner</option>
					<option>Dîner</option>
					<option>Gestion libre + repas traiteur + ménage</option>
					<option>Dîner, nuit et brunch</option>
					<option>Gestion libre forfait ménage compris</option>
					<option>Location du gîte + restauration</option>
					<option>Gestion libre option ménage non compris + Traiteur</option>
					<option>Gestion libre option ménage compris + Traiteur</option>
					<option>Déjeuner + goûter</option>
					<option>Location de salle</option>
					<option>Nuitée seule</option>
				</select><br>
				<label>Arrivée pour</label>
				<select name="arriveeLoc">
					<option>Dîner</option>
					<option>Goûter</option>
					<option>Déjeuner</option>
					<option>Petit déjeuner</option>
					<option>Nuit</option>
					<option>Location du gîte</option>
					<option>A préciser</option>
				</select><br>
				<label>Départ pour</label>
				<select name="departLoc">
					<option>Petit déjeuner avec panier repas</option>
					<option>Petit déjeuner</option>
					<option>Petit déjeuner avec deux paniers repas et un goûter</option>
					<option>Déjeuner</option>
					<option>Goûter</option>
					<option>Dîner</option>
					<option>Nuit</option>
					<option>Petit déjeuner avec un panier repas + un goûter</option>
					<option>Déjeuner avec goûter</option>
					<option>LOcation du gîte</option>
					<option>A préciser</option>
					<option>Déjeuner avec goûter + panier repas dîner</option>
					<option>Brunch</option>
					<option>Goûter avec un panier repas pour le dîner</option>
				</select><br>
				<label>Partage</label>
				<select name="partage">
					<option>A préciser</option>
					<option>Partage possible avec un autre groupe</option>
					<option>Exclusivité demandée</option>
					<option>Pas de partage du gîte</option>
					<option>Partage impossible avec un autre groupe</option>
					<option>Partage avec un autre groupe</option>
				</select><br>
				<label>Motif</label>
				<select name="motif">
					<option>A préciser</option>
					<option>Taille du groupe p/ capacité</option>
					<option>Demande du client (facturée)</option>
					<option>Demande client (non facturée)</option>
					<option>Type de groupe incompatible</option>
					<option>Groupe en gestion libre</option>
					<option>Autre groupe en partage</option>
				</select><br>
				<label>TS</label>
				<select name="ts">
					<option>Exonération (séjour d'enfants)</option>
					<option>Exonération (adultes handicap)</option>
					<option>Exonération (service RMI CMU)</option>
					<option>Exonération (séjour ANNULE)</option>
					<option>A payer</option>
				</select><input type="text" name="??" style="display: inline-block; width: 50px;">€ x <input type="text" name="??" style="display: inline-block; width: 50px;"> = <input type="text" name="??" style="display: inline-block; width: 70px;"><br>
			</fieldset>
		</div>
		<div class="row">
			<!-- Bloc devis demandé -->
			<fieldset>
				<legend>Activités et visites</legend>
			</fieldset>
			<fieldset>
				<legend>Notre transporteur ou activité 8</legend>
			</fieldset>
		</div>
	</form>
</div>