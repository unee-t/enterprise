<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_Manage_Unit_Names  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;

		$this->events["BeforeInsert"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		// We need to get ID of the organization associated with this user

		$values['updated_by_id'] = $_SESSION['organization_logged_in_user'];

	// When was the record created?

		$values['syst_updated_datetime'] = NOW() ;

	// What is the system that we use to updat this record:
  // This should be an INT (default is 1 (unknown)

		$values['update_system_id'] = 1 ;

	// What is the creation method

		$values['update_method'] = 'Manage_Unee_T_Unit_Names_Edit';

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

		// we are limiting this to UPDATE only.

	// we capture the organisation id of the user who updated this record.
	// We need to get the MEFE user ID of the user associated with this organization

		$values['organization_id'] = $_SESSION['organizationLoggedInUser'];

	// we capture the organisation id of the user that created this record.

		$values['updated_by_id'] = 'YYeAutqzDY3MeqbNC';

	// When was the record updated?

		$values['syst_updated_datetime'] = NOW() ;

	// What is the system that we use to update this record:

		$values['update_system_id'] = 2;

	// What is the update method

		$values['update_method'] = 'Manage_Unee_T_Unit_Names_Import';

	// We also need to update the MEFE:

		$values['is_update_needed'] = 1;

	// Value of the mandatory fields in the table `ut_map_external_source_units`
	//	- ``
	//	- ``
	//	- ``
	//	- ``
	//	- ``
	//	- ``
	//	- ``
	//	- ``

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeInsert

		
		
		
		
		



}
?>
