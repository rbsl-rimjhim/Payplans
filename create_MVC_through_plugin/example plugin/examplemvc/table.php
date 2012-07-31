<?php
/**
* @copyright	Copyright (C) 2009 - 2009 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package		PayPlans
* @subpackage	Examplemvc
* @contact 		shyam@readybytes.in
*/
if(defined('_JEXEC')===false) die();

class PayplansTableExamplemvc extends XiTable
{
	public function __construct($tblFullName=null, $tblPrimaryKey='examplemvc_id', $db=null)
	{
		static $isTableExist = false;
		//create a separate table here , if required		
		// For eg : '#__payplans_examplemvc' table is created here
		if(!$isTableExist && XiHelperTable::isTableExist('#__payplans_examplemvc')==false)
		{
			$sql = 'CREATE TABLE IF NOT EXISTS `#__payplans_examplemvc` (
						  `examplemvc_id` INT NOT NULL AUTO_INCREMENT,
						  `title`	  VARCHAR(255) ,
						  `published`	  TINYINT(1) ,     
						  `params`        TEXT ,
  						   PRIMARY KEY (`prodiscount_id`)
						)
						ENGINE = MyISAM
						DEFAULT CHARACTER SET = utf8 
						AUTO_INCREMENT=1;';
			$dbo = XiFactory::getDBO();
			$dbo->setQuery($sql);
			$dbo->query();
			$isTableExist = true;
		}
	
		return parent::__construct($tblFullName, 'examplemvc_id', $db);
	}
 }
