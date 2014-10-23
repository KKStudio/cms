<?php

function module($name) {

	$class = '\Kkstudio\\' . $name . '\\' . $name;

	return $class;
	return \App\Module::getInstance($class);

}