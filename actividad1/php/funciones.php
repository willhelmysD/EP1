<?php
function CamposNulos($POST){
    $claves = array_keys($POST);
    $faltantes = [];
    foreach ($claves as $campo) {
		if (!isset($POST[$campo]) || trim($POST[$campo]) === ''){
			$faltantes[] = $campo;
		}
	}
    return $faltantes;
}