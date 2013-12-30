<?php defined('_JEXEC') or die;

/**
 * File       mod_k2searchcomponentmodule.php
 * Created    12/30/13 10:01 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

require_once __DIR__ . '/helper.php';

$helper = new modK2searchcomponentmoduleHelper($params);
$path   = $helper->getPath();

require(JModuleHelper::getLayoutPath('mod_k2searchcomponentmodule'));