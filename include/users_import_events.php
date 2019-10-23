<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_users_import  extends eventsBase
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

		$values['created_by_id'] = $_SESSION['organizationLoggedInUser'];

	// When was the record created?

		$values['syst_created_datetime'] = NOW() ;

	// What is the system that we use to updat this record:

		$values['creation_system_id'] = 'Unee-T Enterprise portal';

	// What is the creation method

		$values['creation_method'] = 'Manage_Unee_T_Users_Add_Page';

	// The value for the person status at creation in this interface should be 2 (Active)
	
		$values['person_status_id'] = 2;

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

			// we capture the organisation id of the user whi updated this record.

		$values['updated_by_id'] = $_SESSION['organizationLoggedInUser'];

	// When was the record created?

		$values['syst_updated_datetime'] = NOW() ;

	// What is the system that we use to updat this record:

		$values['update_system_id'] = 'Unee-T Enterprise portal';

	// What is the creation method

		$values['update_method'] = 'Manage_Unee_T_Users_Edit_Page';

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

		$values['creation_method'] = 'Export_and_Import_Users_Import_Page';

	// we capture the organisation id of the user whi updated this record.

		$values['updated_by_id'] = $_SESSION['organization_logged_in_user'];

	// When was the record created?

		$values['syst_updated_datetime'] = NOW() ;

	// What is the system that we use to updat this record:

		$values['update_system_id'] = 'Unee-T Enterprise portal';

	// What is the creation method

		$values['update_method'] = 'Export_and_Import_Users_Import_Page';

	# We  record the id of the system that is the source of truth for this organization
		
		# What is the organization id for the logged in user?

			$data["organization_id"] = $_SESSION['organizationLoggedInUser'];

		#  Make sure we have a default system id

			if (EMPTY ($values["external_system"]))
			{
			
				$rs_external_system_id = DB::Select("ut_organization_default_external_system", $data );

				while( $record = $rs_external_system_id->fetchAssoc() )

			# We replace the empty value with the default

				$values["external_system"] = $record["designation"];
			}

			elseif ($values['external_system'] = 'null')
			{
			
				$rs_external_system_id = DB::Select("ut_organization_default_external_system", $data );

				while( $record = $rs_external_system_id->fetchAssoc() )

			# We replace the 'null' value with the default

				$values["external_system"] = $record["designation"];
			}

		#  Make sure we have a default table id

			if (EMPTY ($values["external_table"]))
			{
			
				$rs_external_table= DB::Select("ut_organization_default_table_persons", $data );

				while( $record = $rs_external_table->fetchAssoc() )

			# We replace the empty value with the default

				$values["external_table"] = $record["person_table"];
			}

			elseif ($values["external_table"] = 'null')
			{
			
				$rs_external_table = DB::Select("ut_organization_default_table_persons", $data );

				while( $record = $rs_external_table->fetchAssoc() )

			# We replace the 'null' value with the default

				$values["external_table"] = $record["person_table"];
			}

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeInsert

		
		
		
		
		



}
?>
