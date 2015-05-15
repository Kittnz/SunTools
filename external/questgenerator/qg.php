<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="qg.css" />
		<title>Quest Generator 0.0.0.0.0.0.0.1g alpha beta Romeo et Juliette</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js" language="javascript"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" language="javascript"></script>
		<script type="text/javascript" src="qg.js" language="javascript"></script>
	</head>
	<body onload="disableCheckboxes();">
		<h1>Veuillez frapper votre tête sur le clavier : </h1> 
		<p> Ce générateur ne fait que générer des requêtes qu'il faut garder et qui peuvent être appliquées par la suite par votre dev favori du moment. </p>
		<noscript>
			<div class="warning">
			Vous n'avez pas activé les scripts dans votre navigateur. Aucune vérification ne sera faite. Soyez prudent !
			</div>
		</noscript>
		<br/>
		<form name="input" action="questgenerator.php" method="post" onsubmit="return verif();">
			<fieldset class="fs1">
			<legend>Informations générales</legend>
				<div class="check strVide" value="strVide">
				ID Quête <img class="help" title="Si c'est pour une quête unique mettez nimp et précisez le moi, si c'est pour une suite idéalement demandez moi la premiere ID dispo, ça m'évitera de modifier chaque quête par la suite pour créer la suite. Ou alternativement mettez un n'importe quoi cohérent, si vous mettez une id 'canard', mettez 'canard' dans ID quête précédente dans la quête suivante." src="question-mark.png" alt="[?]"/> : 
				<input type="text" name="id" min="0" value="123troisptichats"/>
				</div>
				Niveau Minimum :
				<input type="number" name="minlvl" value="1" min="1" max="70"/>
				<br/>
				Niveau Quête <img class="help" title="Change uniquement la couleur dans le journal" src="question-mark.png" alt="[?]"/> :
				<input type="number" name="questlvl" value="70" min="1" max="70"/>
				<br/>
				Type <img class="help" title="Le type raid permet d'accomplir une quête en raid, tous les autres n'ont d'autre effet que de changer l'affichage dans le journal des quêtes" src="question-mark.png" alt="[?]"/> : 
				<select name="type">
					<option value = "0">Normal</option>
					<option value = "1">Elite</option>
					<option value = "21">Vie (?)</option>
					<option value = "41">PvP</option>
					<option value = "62">Raid</option>
					<option value = "81">Donjon</option>
					<option value = "82">Evenement mondial</option>
					<option value = "83">Légendaire</option>
					<option value = "84">Escorte</option>
					<option value = "85">Heroique</option>
				</select>
				<br/>
				Races :
				<select name="races">
					<option value = "0">Toutes</option>
					<option value = "1101">Alliance uniquement</option>
					<option value = "690">Horde uniquement</option>
				</select>
			</fieldset>
			<fieldset class="fs1">
				<legend>Attributs</legend>
				<input type="checkbox" name="flag_sharable" value="1" checked/>Partageable<br/>
				<input type="checkbox" name="flag_hide_rewards" value="1"/>Cacher les récompenses<br/>
				<input type="checkbox" name="flag_daily" value="1"/>Journalière<br/>
			</fieldset>
			<fieldset class="fs1">
				<legend>Liens</legend>
				ID de la quête précédente <img class="help" title="Laisser à 0 si pas dans une suite" src="question-mark.png" alt="[?]"/> : 
				<input type="number" name="prevquestid" value="0" min="0"/><br/>
				ID de la quête suivante <img class="help" title="Laisser à 0 si pas dans une suite" src="question-mark.png" alt="[?]"/> : 
				<input type="number" name="nextquestid" value="0" min="0"/> <br/>
			</fieldset>
			<fieldset class="fs1">
				<legend>Dons</legend>
				<div class="check" value="nbrIncoherence0">
				Objet fourni : <br/>
				ID : <input type="number" name="srcitemid" value="0" min="0"/> Nombre : <input type="number" name="srcitemcount" value="0" min="0"/>
				</div>
				Sort fourni : <br/>
				ID <img class="help" title="Sort lancé par le pnj sur le joueur au début de la quête" src="question-mark.png" alt="[?]"/> : <input type="number" name="srcspell" value="0" min="0"/>
			</fieldset>
			<fieldset class="fs1">
				<legend>Textes apparents</legend>
				Titre :
				<input type="text" name="title" value="A l'aide !"/> <br/>
				Description : <br/>
				<textarea name = "details" rows="3" cols="50">Oh non mon chat est coincé dans l'arbre :'(</textarea> <br/>
				Objectifs : <br/>
				<textarea name = "objectives" rows="3" cols="50">Halp plz</textarea> <br/>
				Texte de récompense : <br/>
				<textarea name = "rewardtext" rows="3" cols="50">Oh merci bocou fort ! Bisous sur l'anus</textarea> <br/>
				Texte de progression : <br/>
				<textarea name = "reqitemstext" rows="3" cols="50">Tu te bouges oui ou bien ?</textarea> <br/>
				Texte d'objectif personnalisé <img class="help" title="Toujours laisser vide sauf contre-indication du médecin" src="question-mark.png" alt="[?]"/> : <br/>
				<textarea name = "endtext" rows="3" cols="50"></textarea> <br/>
			</fieldset>
			<fieldset class="fs1">
				<legend>Objets demandés</legend>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqitem1" value="0" min="0"/> Nombre : <input type="number" name="reqitem1count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqitem2" value="0" min="0"/> Nombre : <input type="number" name="reqitem2count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqitem3" value="0" min="0"/> Nombre : <input type="number" name="reqitem3count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqitem4" value="0" min="0"/> Nombre : <input type="number" name="reqitem4count" value="0" min="0"/>
				</div>
			</fieldset>
			<fieldset class="fs1">
				<legend>Créatures à tuer</legend>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqcreature1" value="0" min="0"/> Nombre : <input type="number" name="reqcreature1count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqcreature2" value="0" min="0"/> Nombre : <input type="number" name="reqcreature2count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqcreature3" value="0" min="0"/> Nombre : <input type="number" name="reqcreature3count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="reqcreature4" value="0" min="0"/> Nombre : <input type="number" name="reqcreature4count" value="0" min="0"/>
				</div>
			</fieldset>
			<fieldset class="fs1">
				<legend>Récompense (choix)</legend>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewchoiceitem1" value="0" min="0"/> Nombre : <input type="number" name="rewchoiceitem1count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewchoiceitem2" value="0" min="0"/> Nombre : <input type="number" name="rewchoiceitem2count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewchoiceitem3" value="0" min="0"/> Nombre : <input type="number" name="rewchoiceitem3count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewchoiceitem4" value="0" min="0"/> Nombre : <input type="number" name="rewchoiceitem4count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewchoiceitem5" value="0" min="0"/> Nombre : <input type="number" name="rewchoiceitem5count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewchoiceitem6" value="0" min="0"/> Nombre : <input type="number" name="rewchoiceitem6count" value="0" min="0"/>
				</div>
			</fieldset>
			<fieldset class="fs1">
				<legend>Récompense (fixes)</legend>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewitem1" value="0" min="0"/> Nombre : <input type="number" name="rewitem1count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewitem2" value="0" min="0"/> Nombre : <input type="number" name="rewitem2count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewitem3" value="0" min="0"/> Nombre : <input type="number" name="rewitem3count" value="0" min="0"/>
				</div>
				<div class="check" value="nbrIncoherence0">
				ID : <input type="number" name="rewitem4" value="0" min="0"/> Nombre : <input type="number" name="rewitem4count" value="0" min="0"/>
				</div>
			</fieldset>
			<fieldset class="fs1">
				<legend>Récompenses réputations</legend>
				<div class="check" value="nbrIncoherence0">
				Faction (id) : <input type="number" name="rewfaction1" value="0" min="0"/> Valeur : <input type="number" name="rewfactionvalue1" value="0" min="0"/> 
				</div>
				<div class="check" value="nbrIncoherence0">
				Faction (id) : <input type="number" name="rewfaction2" value="0" min="0"/> Valeur : <input type="number" name="rewfactionvalue2" value="0" min="0"/> 
				</div>
				<div class="check" value="nbrIncoherence0">
				Faction (id) : <input type="number" name="rewfaction3" value="0" min="0"/> Valeur : <input type="number" name="rewfactionvalue3" value="0" min="0"/> 
				</div>
				<div class="check" value="nbrIncoherence0">
				Faction (id) : <input type="number" name="rewfaction4" value="0" min="0"/> Valeur : <input type="number" name="rewfactionvalue4" value="0" min="0"/> 
				</div>
				<div class="check" value="nbrIncoherence0">
				Faction (id) : <input type="number" name="rewfaction5" value="0" min="0"/> Valeur : <input type="number" name="rewfactionvalue5" value="0" min="0"/> 
				</div>
			</fieldset>
			<fieldset class="fs1">
				<legend>Récompense sort <img class="help" title="Sort lancé sur le joueur par le pnj lorsqu'il rend sa quête" src="question-mark.png" alt="[?]"/></legend>
				ID Sort : <input type="number" name="rewspellcast" value="0" min="0"/> <br/>
			</fieldset>
			<fieldset class="fs1">
				<legend>Autres récompenses</legend>
				Récompense argent <img class="help" title="En pièces d'or, peut être négatif pour demander de l'argent" src="question-mark.png" alt="[?]"/> : <br/>
				<input type="number" name="rewmoney" value="0" min="-2147483648" max="2147483647"/> <br/>
				Récompense victoires honorables <img class="help" title="Donne une quantité d'honneur équivalente à ce nombre de victoires honorables. So ça varie selon le lvl." src="question-mark.png" alt="[?]"/> : <br/>
				<input type="number" name="rewhonorkill" value="0" min="0"/> <br/>
			</fieldset>
			Emotes... TODO<br/>
			<hr/>
			<fieldset class="fs1">
				<legend>Interactions avec les PNJ</legend>
				PNJ donneur de quête (id) : <input type="number" name="questgiverid" value="0" min="0" oninput="lolFnct('chg1',this.value)"/> <br/>
				<input type="checkbox" name="questgiver_eraseotherquests" id="chg1" value="1"/>Supprimer les autres quêtes données par ce pnj<br/>
				PNJ receveur de quête (id) : <input type="number" name="questtakerid" value="0" min="0" oninput="lolFnct('chg2',this.value)"/> <br/>
				<input type="checkbox" name="questreceiver_eraseotherquests" id="chg2" value="1"/>Supprimer les autres quêtes reçues par ce pnj<br/>
			</fieldset>
			<input class="submit1" type="submit" value="Valider">
		</form>
		<div id="navErr" hidden>
		<input type="button" id="navErrPrecBt" value="Erreur précédente" disabled onclick="errGoPrec();"/>
		<br/>
		<span id="navErrMsg">Erreur n°1</span>
		<br/>
		<input type="button" id="navErrSuivBt" value="Erreur suivante" disabled onclick="errGoSuiv();"/>
		
		<input type="number" id="navErrCurr" value="-1" hidden />
		<input type="number" id="navErrMax" value="-1" hidden />
		</div>
	</body>
</html>