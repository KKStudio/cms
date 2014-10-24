<?php

/**
 * returns singleton instance of module
 * @return \App\Module
 */

function module($name) 
{
	$class = '\Kkstudio\\' . $name . '\\' . $name;

	return \App\Module::getInstance($class);
}

/**
 * facade for module
 * @return \App\Module
 */

function m($name) 
{
	return module($name);
}

/**
 * translates view name to theme's view path
 * @return String
 */

function themed($name) 
{
	$theme = theme();

	return $theme . '.' . $name;
}

/**
 * return themed asset path
 * @return String
 */

function a($asset) 
{
	$theme = theme();

	return asset('themes/' . $theme . '/' . $asset);
}

/**
 * return themed view response
 * @return String
 */

function v($name) 
{
	return view(themed($name));
}

/**
 * url shortcut
 * @return String
 */

function u($url) 
{
	return url($url);
}

/**
 * route url shortcut
 * @return String
 */

function r($url, $params = []) 
{
	return route($url, $params);
}

/**
 * home route url
 * @return String
 */

function home() 
{
	return route('home');
}

/**
 * return current theme name
 * @return String
 */

function theme() 
{
	$theme = 'default';

	return $theme;
}
