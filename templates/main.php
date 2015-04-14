<?php

echo 'hoofdpagina <br/>';

$database = Masterclass::getDatabaseObject();

//->query('SELECT','','product',$array = array(':id'=>1,),'ORDER BY id');
$schoolobj = new School();
$schools = $schoolobj->all();
foreach($schools as $school){
	echo $school->get('name');
}

?>