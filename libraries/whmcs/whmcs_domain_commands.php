<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Joe Parihar
* @version   v0.0.1
* @copyright 2013
*/


require_once "whmcs_base.php";
class Whmcs_domain_commands{
	
	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Register command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Register_Domain
	*/

	public function whmcs_domain_register($params = array()) {
		$params['action'] = 'domainregister';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Renew command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Renew_Domain
	*/

	public function whmcs_domain_renew($params = array()) {
		$params['action'] = 'domainrenew';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Transfer command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	*
	* Optional Parameters:
	* 
	* eppcode 		- The EPP code for the transfer
	*
	* See:
	*
	* http://docs.whmcs.com/API:Transfer_Domain
	*/

	public function whmcs_domain_transfer($params = array()) {
		$params['action'] = 'domaintransfer';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Release command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	* newtag 		- The new tag for the domain (Tag List)
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Release_Domain
	*/

	public function whmcs_domain_release($params = array()) {
		$params['action'] = 'domainrelease';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the lock state of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in your WHMCS
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Domain_Locking_Status
	*/

	public function whmcs_domain_get_locking_status($params = array()) {
		$params['action'] = 'domaingetlockingstatus';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the nameservers of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Domain_Nameservers
	*/

	public function whmcs_domain_get_name_servers($params = array()) {
		$params['action'] = 'domaingetnameservers';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the WHOIS of a domain from the registrar
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Domain_WHOIS
	*/

	public function whmcs_domain_get_whois_info($params = array()) {
		$params['action'] = 'domaingetwhoisinfo';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the EPP Code of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Domain_EPP
	*/

	public function whmcs_domain_request_epp($params = array()) {
		$params['action'] = 'domainrequestepp';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to toggle the ID Protection status of a domain assigned to certain registrars. For example all LogicBoxes modules.
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	* dprotect 		- true/false
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Toggle_ID_Protect
	*/

	public function whmcs_domain_toggle_id_protect($params = array()) {
		$params['action'] = 'domaintoggleidprotect';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update the lock state of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	* 
	* lockstatus 	- set to 1 to lock the domain
	*
	* See:
	*
	* http://docs.whmcs.com/API:Domain_Update_Lock
	*/

	public function whmcs_domain_update_locking_status($params = array()) {
		$params['action'] = 'domainupdatelockingstatus';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update the nameservers of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	* domain 		- domainname to update (use domainid OR domain)
	* ns1 			- nameserver1
	* ns2 			- nameserver2
	*
	* Optional Parameters:
	* 
	* ns3 			- nameserver3
	* ns4 			- nameserver4
	* ns5 			- nameserver5
	*
	* See:
	*
	* http://docs.whmcs.com/API:Domain_Update_Nameservers
	*/

	public function whmcs_domain_update_name_servers($params = array()) {
		$params['action'] = 'domainupdatenameservers';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update the contact information on a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	* xml 			- xml of the details to update Get WHOIS
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Domain_Update_WHOIS
	*/

	public function whmcs_domain_update_whois_info($params = array()) {
		$params['action'] = 'domainupdatewhoisinfo';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to perform a whois lookup on a specified domain.
	*
	* Parameters:
	*
	* domain 		- the domain to check
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Domain_WHOIS
	*/

	public function whmcs_domain_whois($params = array()) {
		$params['action'] = 'domainwhois';
		return Whmcs_base::send_request($params);
	}
}