<?php
/**
* @copyright	Copyright (C) 2009 - 2009 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package		PayPlans
* @subpackage	Examplemvc 
* @contact 		shyam@readybytes.in
*/
if(defined('_JEXEC')===false) die();


class PayplansModelExamplemvc extends XiModel
{
	// filters for searching on grid screen (optional)
	public $filterMatchOpeartor = array(
					'published'	    => array('=')
					);
}
