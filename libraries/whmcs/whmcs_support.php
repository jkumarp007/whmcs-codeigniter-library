<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Joe Parihar
* @version   v0.0.1
* @copyright 2013
*/


require_once "whmcs_base.php";
class Whmcs_support extends WHMCS_Base{
	
	// --------------------------------------------------------------------***************
	/**
	* This command is used to create a new ticket in WHMCS
	*
	* Parameters:
	*
	* clientid 		- the ID of the client the ticket belongs to
	* deptid 		- the ID of the ticket department
	* subject
	* message
	*
	* Optional Parameters:
	* 
	* priority 		- can be "Low", "Medium" or "High" (Default = Low)
	* contactid 	- the ID of the contact that you wish to associate the ticket with
	* name 			- only required if not a registered client (clientid must be sent as 0)
	* email 		- only required if not a registered client
	* serviceid 	- the ID if the ticket relates to a specific product
	* domainid 		- the ID if the ticket relates to a specific domain
	* customfields 	- a base 64 serialized array of field IDs => values
	* noemail 		- true/false - set to stop the Ticket Opened mail being sent to the user
	*
	* See:
	*
	* http://docs.whmcs.com/API:Open_Ticket
	*/

	public function  whmcs_create_ticket($params = array()) {
		$params['action'] = 'openticket';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to add a reply to an existing ticket
	*
	* Parameters:
	*
	* ticketid 		- the ID of the ticket to add the reply to
	* message 		- the reply to add to the ticket
	*
	* Optional Parameters:
	* 
	* clientid 		- if adding reply as a client
	* contactid 	- to be used along with clientid. contactid should be a contact within the client
	* name 			- only required if not a registered client (clientid must be sent as 0)
	* email 		- only required if not a registered client
	* adminusername - if adding reply as an admin, name to show message
	* status 		- specify if you want to set the status to On Hold or In Progress after reply
	* customfields 	- base64_encoded serialized array of custom fields associated with the ticket.
	*
	* See:
	*
	* http://docs.whmcs.com/API:Reply_Ticket
	*/

	public function  whmcs_ticket_reply($params = array()) {
		$params['action'] = 'addticketreply';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve tickets using search parameters.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* limitstart 	- start at which result (default = 0)
	* limitnum 		- limit at how many results (default = 25)
	* clientid 		- filter for a specific Client ID
	* email 		- filter for tickets only from a specific email address
	* deptid 		- filter for a particular department
	* status 		- filter for a particular status - in addition to any individual status options, this can also take the values "Awaiting Reply", "All Active Tickets" or "My Flagged Tickets" to return those preset status groups
	* subject 		- filter for a word in the subject
	* ignore_dept_assignments - Pass this to ignore the departments the admin user belongs to. Otherwise just the tickets for the departments the API user belongs to are returned
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Tickets
	*/

	public function  whmcs_get_tickets($params = array()) {
		$params['action'] = 'gettickets';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve a ticket.
	*
	* Parameters:
	*
	* ticketid 		- Ticket id to retrieve
	* ticketnum 	- Ticket Num to retrieve (client ticket number)
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Ticket
	*/

	public function  whmcs_get_ticket($params = array()) {
		$params['action'] = 'getticket';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update the specified ticket. You only need to send the attributes you want to change.
	*
	* Parameters:
	*
	* ticketid 		- Ticket ID to be updated
	*
	* Optional Parameters:
	* 
	* deptid 		- update the assigned department
	* subject 		- update the subject of the ticket
	* priority 		- Low, Medium or High
	* status 		- Open, Answered, Closed, etc...
	* userid 		- change the user that the ticket is assigned to
	* email 		- change the email address that opened the ticket (only when userid is not used)
	* cc 			- add CC emails to the ticket
	* flag 			- flag to an adminid
	*
	* See:
	*
	* http://docs.whmcs.com/API:Update_Ticket
	*/

	public function  whmcs_update_ticket($params = array()) {
		$params['action'] = 'updateticket';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to delete a specified Ticket.
	*
	* Parameters:
	*
	* ticketid 			- Ticket ID to be deleted
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Delete_Ticket
	*/

	public function  whmcs_delete_ticket($params = array()) {
		$params['action'] = 'deleteticket';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to Add a Ticket Note to a specified Ticket.
	*
	* Parameters:
	*
	* ticketid 		- Ticket ID the note is to be added
	* ticketnum 	- The Ticket number of the note. Please note that you can only use either ticketnum or ticketid and not both.
	* message 		- The note to add
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Add_Ticket_Note
	*/

	public function  whmcs_add_ticket_note($params = array()) {
		$params['action'] = 'addticketnote';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to Get Ticket Notes from a specified Ticket.
	*
	* Parameters:
	*
	* ticketid 			- Ticket ID to obtain the notes for
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Ticket_Notes
	*/

	public function  whmcs_get_ticket_notes($params = array()) {
		$params['action'] = 'getticketnotes';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to Delete a Ticket Note from a ticket
	*
	* Parameters:
	*
	* noteid 		- Note ID to be removed (See: Get Ticket Notes)
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Delete_Ticket_Note
	*/

	public function  whmcs_delete_ticket_note($params = array()) {
		$params['action'] = 'deleteticketnote';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve list of Support Departments and counts of tickets Open and Awaiting reply.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* ignore_dept_assignments - send as true to ignore the departments that the API user is assigned to
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Support_Departments
	*/

	public function  whmcs_get_support_departments($params = array()) {
		$params['action'] = 'getsupportdepartments';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve an XML list of ticket Status counts
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* deptid 		- Send a Department ID to limit results
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Support_Statuses
	*/

	public function  whmcs_get_support_statuses($params = array()) {
		$params['action'] = 'getsupportstatuses';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve an XML list of tickets Predefined Reply Categories.
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
	* http://docs.whmcs.com/API:Get_Ticket_Predefined_Cats
	*/

	public function  whmcs_get_ticket_predefined_categories($params = array()) {
		$params['action'] = 'getticketpredefinedcats';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve an XML list of ticket predefined replies.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* catid 		- Select category to browse
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Ticket_Predefined_Replies
	*/

	public function  whmcs_get_ticket_predefined_replies($params = array()) {
		$params['action'] = 'getticketpredefinedreplies';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to Add a new announcement to the system
	*
	* Parameters:
	*
	* date 			- Date of the announcement in format yyyymmdd
	* title 		- Title of the announcement
	* announcement 	- Announcement text
	* published 	- true/false
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Add_Announcement
	*/

	public function  whmcs_add_announcement($params = array()) {
		$params['action'] = 'addannouncement';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to delete an Announcement
	*
	* Parameters:
	*
	* announcementid 	- The ID of the announcement to delete
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Delete_Announcement
	*/

	public function  whmcs_delete_announcement($params = array()) {
		$params['action'] = 'deleteannouncement';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update an announcement
	*
	* Parameters:
	*
	* announcementid 	- ID of the announcement to edit
	* date 				- Date of the announcement in format yyyymmdd
	* title 			- Title of the announcement
	* announcement 		- Announcement text
	* published 		- true/false
	*
	* Optional Parameters:
	* 
	* None
	*
	* See:
	*
	* http://docs.whmcs.com/API:Update_Announcement
	*/

	public function  whmcs_update_announcement($params = array()) {
		$params['action'] = 'updateannouncement';
		return Whmcs_base::send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to get a list of the announcements 
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* limitstart 		- used for pagination, start at a certain ID
	* limitnum 			- restrict number of records
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Announcements
	*/

	public function  whmcs_get_announcements($params = array()) {
		$params['action'] = 'getannouncements';
		return Whmcs_base::send_request($params);
	}

	// Continue from http://docs.whmcs.com/API:Functions -- Get Support Departments
}