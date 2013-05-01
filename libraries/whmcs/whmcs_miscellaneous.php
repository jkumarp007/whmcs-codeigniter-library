<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Joe Parihar
* @version   v0.0.1
* @copyright 2013
*/


require_once "whmcs_base.php";
class Whmcs_miscellaneous{
		
	/**
	* This command is used to generate an XML list of the activity log
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* limitstart - Which User ID to start at (defaults to 0)
	* limitnum - Limit by number (defaults to 25)
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Activity_Log
	*/

	public function whmcs_get_activity_log($params = array()) {
		$params['action'] = 'getactivitylog';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to generate XML information of the current admin user
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Admin_Details
	*/

	public function whmcs_get_admin_details($params = array()) {
		$params['action'] = 'getadmindetails';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to update the Admin notes This command will replace the data currently entered. You may wish to obtain the existing notes first API:Get_Admin_Details
	*
	* Parameters:
	*
	* notes - notes to enter
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Update_Admin_Notes
	*/

	public function whmcs_update_admin_notes($params = array()) {
		$params['action'] = 'updateadminnotes';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to receive a list with the available currencies.
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Currencies
	*/

	public function whmcs_get_currencies($params = array()) {
		$params['action'] = 'get_currencies';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to receive a list with the available currencies.
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* code - the specific promotion code to return information for
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Promotions
	*/

	public function whmcs_get_promotions($params = array()) {
		$params['action'] = 'getpromotions';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to get a list of the client groups in XML format
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Client_Groups
	*/

	public function whmcs_get_client_groups($params = array()) {
		$params['action'] = 'getclientgroups';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to obtain an xml list of the email templates
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* type - from product,domain,support,general,invoice,affiliate,admin
	* language - only required for additional languages
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Email_Templates
	*/

	public function whmcs_get_email_templates($params = array()) {
		$params['action'] = 'getemailtemplates';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to obtain an xml list of the to do list items
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* status - from New,Pending,In Progress,Completed,Postponed
	* limitstart - where to start the output. Used for pagination. (default = 0)
	* limitnum - limit the number of records returned (default = 25)
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_To-Do_Items
	*/

	public function whmcs_get_todo_items($params = array()) {
		$params['action'] = 'gettodoitems';
		return Whmcs_base::send_request($params);
	}


	// --------------------------------------------------------------------

	/**
	* This command is used to generate an XML list of To-Do List statuses and their counts
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_To-Do_Items_Statuses
	*/

	public function whmcs_get_todo_item_statuses($params = array()) {
		$params['action'] = 'gettodoitemstatuses';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to update a To Do list item
	*
	* Parameters:
	*
	* itemid - ID of the ToDo in WHMCS to update
	* adminid - Admin ID to update the To Do item to
	*
	* Optional Parameters:
	* 
	* date - open date of the To Do YYYYMMDD
	* title - Title of the to do
	* description - Text of the To Do
	* status - Status - New, Pending, In Progress, Completed, Postponed
	* duedate - due date of the To Do YYYYMMDD
	*
	* See:
	*
	* http://docs.whmcs.com/API:Update_To-Do_Item
	*/

	public function whmcs_update_todo_item($params = array()) {
		$params['action'] = 'updatetodoitem';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to generate an XML list of staff currently online
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Staff_Online
	*/

	public function whmcs_get_staff_online($params = array()) {
		$params['action'] = 'getstaffonline';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to generate current stats
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Stats
	*/

	public function whmcs_get_stats($params = array()) {
		$params['action'] = 'getstats';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to encrypt a string using the WHMCS encryption algorithm.
	*
	* Parameters:
	*
	* password2 - should contain the string you want encrypting
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Encrypt_Password
	*/

	public function whmcs_encrypt_password($params = array()) {
		$params['action'] = 'encryptpassword';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to decrypt a string using the WHMCS encryption algorithm. This cannot be used to decrypt the clients password when using the MD5 Client passwords.
	*
	* Parameters:
	*
	* password2 - should contain the string you want decrypting
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Decrypt_Password
	*/

	public function whmcs_decrypt_password($params = array()) {
		$params['action'] = 'decryptpassword';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to ban an IP address on your system
	*
	* Parameters:
	*
	* ip - IP address to ban
	*
	* Optional Parameters:
	* 
	* reason - reason for ban
	* days - number of days to ban for. If not submitted defaults to 7 (not required)
	* expires - in YYYY-MM-DD HH:II:SS format eg: 2011-06-06 01:12:34 (optional in place of "days")
	*
	* See:
	*
	* http://docs.whmcs.com/API:Add_Banned_IP
	*/

	public function whmcs_add_banned_ip($params = array()) {
		$params['action'] = 'addbannedip';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command can be used to create products inside WHMCS.
	*
	* Parameters:
	*
	* type - one of hostingaccount, reselleraccount, server or other
	* gid - the product group ID to add it to
	* name - the product name
	* paytype - free, onetime or recurring
	*
	* Optional Parameters:
	* 
	* description - the product description
	* hidden - set true to hide
	* showdomainoptions - set true to show
	* welcomeemail - the email template ID for a welcome email
	* qty - set quantity to enable stock control
	* proratadate
	* proratachargenextmonth
	* autosetup - on, payment, order or blank for none
	* module - module name
	* servergroupid - server group ID
	* subdomain - subdomain to offer with product
	* tax - set true to apply tax
	* order - display sort order to override default
	* configoption1
	* configoption2
	* etc...
	* pricing - an array of pricing in the format pricing[currencyid][cycle] (example below)
	*
	* See:
	*
	* http://docs.whmcs.com/API:Add_Product
	*/

	public function whmcs_add_product($params = array()) {
		$params['action'] = 'addproduct';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to add an item to the Activity Log
	*
	* Parameters:
	*
	* description - Text to add to the log
	*
	* Optional Parameters:
	* 
	* userid - UserID to assign the log to in order to appear in Client Log
	*
	* See:
	*
	* http://docs.whmcs.com/API:Log_Activity
	*/

	public function whmcs_log_activity($params = array()) {
		$params['action'] = 'logactivity';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to send an email to Admin users
	*
	* Parameters:
	*
	* messagename - Name of the Admin email template to send
	* mergefields - array of merge fields to populate the template being sent
	* type - Who to send the email to. One of system, account or support. Default: system
	*
	* Optional Parameters:
	* 
	* customsubject - Subject for a custommessage being sent
	* custommessage - Send a custom email to admin users, this will override 'messagename'
	* deptid - If type = support, the users of a department to send email to
	*
	* See:
	*
	* http://docs.whmcs.com/API:Send_Admin_Email
	*/

	public function whmcs_send_admin_email($params = array()) {
		$params['action'] = 'sendadminemail';
		return Whmcs_base::send_request($params);
	}
	
}