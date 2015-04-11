<?php

	class School extends Masterclass {
		protected $name;
		protected $schoolId;

		public function School($dataArray) {
			foreach($dataArray as $key=>$value){
				if(property_exists($this, $key)){
					$this->$key = $value;
				}
			}

		}

		public function addTeacher($name, $adress, $date_of_birth, $zipCode) {
			//database add new Teacher($name, $adress, $date_of_birth, $zipcode);
		}

		public function removeTeacher($Id) {
			//search database and remove the teacher with this ID
		}
	}
?>