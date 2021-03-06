<?php
/**
* @copyright	Copyright (C) 2009 - 2009 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package		PayPlans
* @subpackage	Examplemvc
* @contact 		payplans@readybytes.in
*/
if(defined('_JEXEC')===false) die();


class PayplansadminViewExamplemvc extends XiView
{
	//options needed on admin Grid toolbar
	protected function _adminGridToolbar()
	{
		XiHelperToolbar::addNewX('new');
		XiHelperToolbar::divider();
		XiHelperToolbar::editListX();
		XiHelperToolbar::divider();
		XiHelperToolbar::delete();
		XiHelperToolbar::divider();
		XiHelperToolbar::searchpayplans();
	}

	// override this function to add plugin's path wth template's path
	function _getTemplatePath($layout = 'default')
	{
		return array_merge(parent::_getTemplatePath($layout),$this->_path['template']);
	}
	
	function _displayGrid($records)
	{
		/**
		 * If changes are required on grid view of screen, then do it here  
                 */
		return parent::_displayGrid($records);
	}
	
	function edit($tpl=null, $itemId=null)
	{
		
		$itemId     = ($itemId === null) ? $this->getModel()->getState('id') : $itemId;
		
		/**
                 * manipulate data and assign for edit layout, if required
                 */		

		//For eg - assigning variable $tmpVar, needed on default_edit template
		$tmpVar   = PayplansExamplemvc::getInstance($itemId);
		$this->assign('tmpVar', $tmpVar);
		return true;
	}
}
