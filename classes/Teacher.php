<?php
	class Teacher extends Masterclass {
		protected $name;
		protected $date_of_birth;
		protected $adress;
		protected $zipcode;
		protected $ID;
		protected $Subject;

		public function Teacher($Subject, $ID, $name, $adress, $date_of_birth, $zipcode) {
			this->$name = $name;
			this->$date_of_birth = $date_of_birth;
			this->$adress = $adress;
			this->$zipcode = $zipcode;
			this->$ID = $ID;
			this->$Subject = $Subject;
		}
	}