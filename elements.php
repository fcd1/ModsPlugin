<?php
// CUL LDPD profile MODS, adapted to flat representation in Omeka
$elements = array(
    array(
	'name'=>'Key Date',
	'description'=>'Key date is creation date in normalized format, or the date that can be considered the most accurate date of representation.  Use YYYY-MM-DD format.',
	//'data_type'=> 'Date',
	'data_type'=> 'Date Range',
    ),
    array(
	'name' => 'Type of Date',
	'description' => 'Enter the type of date represented by the key date.'
    ), 
    array(
        'name' => 'Publication Place',
	'data_type' => 'Tiny Text',
    ),
    array(
        'name' => 'Publication Date',
	'data_type' => 'Tiny Text',
    ),
    array(
        'name' => 'Place of Origin',
	'data_type' => 'Tiny Text',
    ),
    array(
        'name' => 'Form/Genre', 
    ),
    array(
	'name' => 'Physical Description',
    ),
    array(
	'name' => 'Physical Location',
	'data_type' => 'Tiny Text',
    ),
    array(
	'name' => 'Repository Name',
    ),
    array(
        'name' => 'Shelf Location',
    ),
    array(
	'name' => 'Notes',
     ),
    array(
	'name' => 'Language of Cataloging',
    ),
    array(
	'name' => 'Digital Origin',
	'description' => 'How the item came to be digitized.  Options are born digital, reformatted digital, digitized microfilm, or digitized other analog',
    )
);
