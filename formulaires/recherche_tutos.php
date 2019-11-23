<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

/**
 * chargement des valeurs par defaut des champs du #FORMULAIRE_RECHERCHE_TUTOS
 *
 * @return array
 *   le valeurs chargés.
 */
function formulaires_recherche_tutos_charger_dist(){
	$fonction = charger_fonction('criteres_utilises', 'inc/tutoriel');
	$criteres = $fonction();

	$criteres = array_column($criteres, 'nom', 'id_groupe');
	$valeurs = [
		'recherche' => _request('recherche'),
		'recherche_avancee' => _request('recherche_avancee') ? _request('recherche_avancee') : [],
		'langue' => _request('langue'),
		'_criteres' => $criteres,
	];
	$mots = [];
	foreach($criteres AS $critere) {
		$valeurs[$critere] = _request($critere);
		if(_request($critere)) {
			$request = _request($critere);
			$mots[] = $request;
		}
	}
	$valeurs['mots'] = $mots;
	return $valeurs;
}
