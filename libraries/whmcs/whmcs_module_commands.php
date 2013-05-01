<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Joe Parihar
* @version   v0.0.1
* @copyright 2013
*/


require_once "whmcs_base.php";
class Whmcs_module_commands {
	
	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account setup on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Module_Create
	*/

	public function whmcs_module_create($params = array()) {
		$params['action'] = 'modulecreate';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account suspension on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	* 
	* suspendreason 	- an explanation of why the suspension has been made shown to clients & staff
	*
	* See:
	*
	* http://docs.whmcs.com/API:Module_Suspend
	*/

	public function whmcs_module_suspend($params = array()) {
		$params['action'] = 'modulesuspend';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account unsuspension on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Module_Unsuspend
	*/

	public function whmcs_module_unsuspend($params = array()) {
		$params['action'] = 'moduleunsuspend';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account termination on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Module_Terminate
	*/

	public function whmcs_module_terminate($params = array()) {
		$params['action'] = 'moduleterminate';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to run the change package module command
	*
	* Parameters:
	*
	* serviceid 		- ID of the service in WHMCS to run the module command
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Module_Change_Package
	*/

	public function whmcs_module_change_package($params = array()) {
		$params['action'] = 'modulechangepackage';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to issue the change password command to the module for a service.
	*
	* Parameters:
	*
	* serviceid 		- the unique id of the service to perform the action on (aka tblhosting.id)
	*
	* Optional Parameters:
	* 
	* servicepassword 	- Specify to update the password on the service before calling
	*
	* See:
	*
	* http://docs.whmcs.com/API:Module_Change_Password
	*/

	public function whmcs_module_change_password($params = array()) {
		$params['action'] = 'modulechangepw';
		return Whmcs_base::send_request($params);
	}
}