<?php
/**
 * Utilisations de pipelines par Tutothèque
 *
 * @plugin     Tutothèque
 * @copyright  2019
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Tutotheque\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function tutotheque_jqueryui_plugins($scripts){
	$scripts[] = "jquery.ui.accordion";
	return $scripts;
}