<?php

	class School extends Masterclass {
		protected $Name;
		protected $SchoolID;
		$Name = "dePassie";

		public function School($Name, $SchoolID) {
			this->$Name = $Name;
			this->$SchoolID = $SchoolID;
		}

		public function addTeacher($name, $adress, $date_of_birth, $zipcode) {
			//database add new Teacher($name, $adress, $date_of_birth, $zipcode);
		}
	}
?>