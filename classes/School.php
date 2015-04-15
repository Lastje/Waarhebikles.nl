<?php

	class School extends Masterclass {
		protected $id;
		protected $name;
<<<<<<< HEAD
		protected $Id;
		protected $Adress;
		protected $Zipcode;

		public function School($dataArray) {
			foreach($dataArray as $key=>$value){
				if(property_exists($this, $key)){
					if(!empty($value)){
						$this->$key = $value;
					}
				}
			}
		}
=======
		protected $type;
		protected $website;
		protected $active;
>>>>>>> origin/master

		public function addTeacher($name, $adress, $date_of_birth, $zipCode) {
			//database add new Teacher($name, $adress, $date_of_birth, $zipcode);
		}

		public function removeTeacher($teacherId) {
			//search database and remove the teacher with this ID
		}
	}
?>