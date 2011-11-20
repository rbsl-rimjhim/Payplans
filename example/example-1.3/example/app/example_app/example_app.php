<?php
/**
* @copyright	Copyright (C) 2009 - 2009 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license	GNU/GPL, see LICENSE.php
* @package	PayPlans
* @contact 	payplans@readybytes.in
*/
if(defined('_JEXEC')===false) die();

/*
  	App should extend from one of below base-class, as per the purpose of app

	PURPOSE 	 |  BASE CLASS
 	========================================
	default 	 | PayplansApp
	payment-app 	 | PayplansAppPayment
	registration-app | PayplansAppRegistration
	migration-app    | PayplansAppMigration

*/


class PayplansAppExample extends PayplansApp 
{
	// this variable always helps PayPlans to get the app file location 
	protected $_location	= __FILE__;
	
	/**
	
	Let the system know if your app-instance should be triggered
	for given event and reference object

	
	$refObject : reference object of any type, check its type on which you want to work
		     refObject generally is type Order / Subscription / Payment 
	$eventName : a string which starts from onPayplans
	
	=== IMP :  == 
	This function ensure your app is triggered for certain plans (as defined by user during app instance creation)
	Therefore 
		1. Do no override this function untill it is essential.
		2. Better to override function _isApplicable

	*/
	function isApplicable($refObject = null, $eventName='')
	{
		//if you want to decide to trigger app as per event name
		// then return true from here
		if($eventName == 'onPayplansControllerCreation'){
			return true;
		}
	
		// make sure to let system handle default behaviour
		return parent::isApplicable($refObject,$eventName);
	}


	// if you need additional checks of refObject, then do it here	
	function _isApplicable($refObject = null, $eventName='')
	{
		return true;
	}


	// capture the events your require

	// e.g. whenever subscription is updated
	public function onPayplansSubscriptionAfterSave($prev, $new)
	{
		// prev : subscription object with old data
		// new  : subscription object with new data

		// IMP : do not call save() on subscription object, will generate a infinite loop
	}

	/** 

	Available events 
	(as if now, refer to documents for newly added events)
	
		onPayplansPlanBeforeSave
		onPayplansPlanAfterSave

		onPayplansSubscriptionBeforeSave
		onPayplansSubscriptionAfterSave

		onPayplansOrderBeforeSave
		onPayplansOrderAfterSave

		onPayplansPaymentBeforeSave
		onPayplansPaymentAfterSave

		onPayplansAppBeforeSave
		onPayplansAppAfterSave

		onPayplansUserBeforeSave
		onPayplansUserAfterSave

	Control Events : Events triggered during processing of any request

	

	*/


}
