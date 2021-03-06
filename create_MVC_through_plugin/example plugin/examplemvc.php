<?php 
/**
* @copyright	Copyright (C) 2009 - 2009 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license	    GNU/GPL, see LICENSE.php
* @package	    PayPlans
* @subpackage	Examplemvc
* @contact 	    payplans@readybytes.in
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.filesystem.archive' );
jimport( 'joomla.document.document' );

class plgPayplansExamplemvc extends XiPlugin
{
	var $_name = 'Examplemvc';
	
	/**
	 * Tell payplans to load plugin's view,controller,model,table and lib
	 */
	public function onPayplansSystemStart()
	{	
		//path where all the following files exists
        	$dir = dirname(__FILE__).DS.'examplemvc'; 
		
		//for eg : PayplansHelperLoader::addAutoLoadFile($dir.DS.'FILE_NAME', 'CLASS_NAME');
       		PayplansHelperLoader::addAutoLoadFile($dir.DS.'view.php', 'PayplansadminViewExamplemvc');
		PayplansHelperLoader::addAutoLoadFile($dir.DS.'controller.php', 'PayplansadminControllerExamplemvc');
                //Load it only if you need any separate table
		PayplansHelperLoader::addAutoLoadFile($dir.DS.'table.php', 'PayplansTableExamplemvc'); 
		PayplansHelperLoader::addAutoLoadFile($dir.DS.'model.php', 'PayplansModelExamplemvc');
                //Load it only if any library file is needed for this plugin
		PayplansHelperLoader::addAutoLoadFile($dir.DS.'lib.php', 'PayplansExamplemvc');
		
        	return true;
	}
	
	/**
	 * Tell payplans to set plugin template for backend and front end where required
	 */
	public function onPayplansViewBeforeRender(XiView $view, $task)
	{
		//adding admin-submenu(Discounts) when plugin in enabled
		if(XiFactory::getApplication()->isAdmin() && XiHelperJoomla::getPluginStatus('examplemvc','payplans')){
			XiAbstractView::addSubmenus('examplemvc');
			/**
                         * Also add a string in administrator-side language file like: 
			 * COM_PAYPLANS_SM_EXAMPLEMVC="Example" 
                         */
		}
		
		//for admin side
		if(($view instanceof PayplansadminViewExamplemvc) && ($task == 'display' || $task == 'edit')){
			// we need to add the default template overriding paths
			$templatePaths = $this->_getTemplatePath($this->_name);
			$view->addPathToView($templatePaths);
		}

		return true;
	}


        /**
         * Now catch the trigger on which you want this plugin to work
	 * and then perform the desired task
         */	
}
