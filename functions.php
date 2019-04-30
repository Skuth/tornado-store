<?php

function formatName($name) {
	$name = strtolower($name);
	$name = str_replace(" ", "-", $name);
	return $name;
}

function toBold($text) {
	$text = strtoupper($text);
	return $text;
}

?>