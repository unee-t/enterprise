<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_Assign_Units_to_User  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeInsert"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

			// we capture the organisation id of the user that created this record.

		$values['created_by_id'] = $_SESSION['organization_logged_in_user'];

		$values['organization_id'] = $_SESSION['organization_logged_in_user'];

	// When was the record created?

		$values['syst_created_datetime'] = NOW() ;

	// What is the system that we use to updat this record:

		$values['creation_system_id'] = 'Unee-T Enterprise portal';

	// What is the creation method

		$values['creation_method'] = 'Assign_Units_to_Users_Add_Page';

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

			// we capture the organisation id of the user whi updated this record.

		$values['updated_by_id'] = $_SESSION['organization_logged_in_user'];

		$values['organization_id'] = $_SESSION['organization_logged_in_user'];

	// When was the record created?

		$values['syst_updated_datetime'] = NOW() ;

	// What is the system that we use to updat this record:

		$values['update_system_id'] = 'Unee-T Enterprise portal';

	// What is the creation method

		$values['update_method'] = 'Assign_Units_to_Users_Edit_Page';

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

			// we capture the organisation id of the user that created this record.

		$values['created_by_id'] = $_SESSION['organizationLoggedInUser'];

	// When was the record created?

		$values['syst_created_datetime'] = NOW() ;

	// What is the system that we use to updat this record:

		$values['creation_system_id'] = 'Unee-T Enterprise portal';

	// What is the creation method

		$values['creation_method'] = 'Assign_Units_to_Users_Import_Page';

	// we capture the organisation id of the user whi updated this record.

		$values['updated_by_id'] = $_SESSION['organization_logged_in_user'];

	// When was the record created?

		$values['syst_updated_datetime'] = NOW() ;

	// What is the system that we use to updat this record:

		$values['update_system_id'] = 'Unee-T Enterprise portal';

	// What is the creation method

		$values['update_method'] = 'Assign_Units_to_Users_Import_Page';

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeInsert

		
		
		
		
		



}
?>
