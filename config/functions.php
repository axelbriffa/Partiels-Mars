<?php

//fichier /config/functions.php

/*$in est au format YYYY-MM-DD
 -> DD/MM/YYYY
le deuxieme parametre permet d'indiquer si l'on souhaite avoir l'heure en plus de la date
ce deuxieme parametre n'est pas obligatoire. Si on l'omet, il est initialisé à faux
*/
function dateFR($in, $h = false){

	if(empty($in)){
		return 'n.c.';

	}else {
		//on cree un objet DateTime
		$d = new DateTime($in);

		//on cree le format de sortie
		$f = 'd/m/Y';

		if($h)
			//si l'heure est demandée, on ajoute les éléments de l'heure dans le pattern déjà créé
			//cette ligne peut également être écrite  : $f = $f.' H\hi';
			$f .= ' H\hi';


		//on retourne la date au bon format
		return $d->format($f);
	}
}

/*fonction qui prend 2 parametres (type & message)
et qui les ajoute dans les messages en mémoire  
*/
function flash_in($t, $mess){
	//on ajoute une case dans le tableau $_SESSION['message']
	array_push($_SESSION['message'], [$t, $mess]);
}

/*
fonction qui lit tous les messages de la mémoire et crée un paragraphe pour chacun d'entre eux
ensuite, cela vide la mémoire
*/
function flash_out(){
	foreach($_SESSION['message'] as $m){
		echo '<p class="message '.$m[0].'">'.$m[1].'</p>';
	}
	$_SESSION['message'] = [];
}
