<?php

/**
* returns singleton instance of module
* @return \App\Module
*/

function module($name) {

	$class = '\Kkstudio\\' . $name . '\\' . $name;

	return \App\Module::getInstance($class);

}

/**
* translates view name to theme's view path
* @return String
*/

function themed($name) {

	$theme = 'default';

	return $theme . '.' . $name;

}
