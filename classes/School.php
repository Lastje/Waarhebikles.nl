<?php

	class School extends Masterclass {
		protected $name;
		protected $Id;
		protected $Adress;
		protected $Zipcode;

		public function addTeacher($name, $adress, $date_of_birth, $zipCode) {
			//database add new Teacher($name, $adress, $date_of_birth, $zipcode);
		}

		public function removeTeacher($teacherId) {
			//search database and remove the teacher with this ID
		}
	}
?>