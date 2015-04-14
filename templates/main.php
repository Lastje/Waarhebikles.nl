<?php

echo 'hoofdpagina <br/>';

$database = Masterclass::getDatabaseObject();

//->query('SELECT','','product',$array = array(':id'=>1,),'ORDER BY id');
$school = new School(1);

	echo $school->get('name');

$school->all();


?>