<?php

/**
* @copyright	Copyright (C) 2009 - 2009 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license	GNU/GPL, see LICENSE.php
* @package	Payplans
* @contact	payplans@readybytes.in
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Extend plugin from XiPlugin
 */
class plgPayplansExample extends XiPlugin
{
	// Tell payplans that you have some apps, which need to be shown in system
	public function onPayplansSystemStart()
	{
		//add your example-app path to app loader
		$appPath = dirname(__FILE__).DS.'example'.DS.'app';
		PayplansHelperApp::addAppsPath($appPath);

		// theme can also be loaded here
		
		return true;
	}
}
