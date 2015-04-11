<?php

	class School extends Masterclass {
		protected $Name;
		protected $ID;

		public function School($Name, $ID) {
			this->$Name = $Name;
			this->$ID = $ID;
		}

		public function addTeacher($name, $adress, $date_of_birth, $zipcode) {
			//database add new Teacher($name, $adress, $date_of_birth, $zipcode);
		}

		public function removeTeacher($ID) {
			//search database and remove the teacher with this ID
		}
	}
?>