<?php
	class Teacher extends Masterclass {
		protected $name;
		protected $date_of_birth;
		protected $adress;
		protected $zipcode;

		public function Teacher($name, $adress, $date_of_birth, $zipcode) {
			this->$name = $name;
			this->$date_of_birth = $date_of_birth;
			this->$adress = $adress;
			this->$zipcode = $zipcode;
		}
	}