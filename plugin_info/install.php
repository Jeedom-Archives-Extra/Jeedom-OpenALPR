<?php
require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

function openalpr_install() {
}

function openalpr_update() {
	foreach(eqLogic::byType('openalpr') as $eqLogic)
		$eqLogic->save();
}
function openalpr_remove() {
}

?>
