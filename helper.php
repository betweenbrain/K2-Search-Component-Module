<?php defined('_JEXEC') or die;

/**
 * File       helper.php
 * Created    12/30/13 10:34 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

jimport('joomla.application.router');

class modK2searchcomponentmoduleHelper
{
	public function __construct($params)
	{
		$this->app    = JFactory::getApplication();
		$this->menu   = $this->app->getMenu();
		$this->active = $this->menu->getActive();
		$this->params = $params;
	}

	function getPath()
	{
		$menu     = JSite::getMenu();
		$menuItem = $this->params->get('menuItem');
		$link     = $menu->_items[$menuItem]->link;

		// Get the global site router.
		$config = & JFactory::getConfig();
		$router = JRouter::getInstance('site');
		$router->setMode($config->getValue('sef', 1));

		$uri  = $router->build($link . '&Itemid=' . $menuItem);
		$path = $uri->toString(array('path', 'query', 'fragment'));

		return $path;
	}
}
