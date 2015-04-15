<?php
	class Teacher extends Masterclass {
		protected $name;
		protected $date_of_birth;
		protected $adress;
		protected $zipcode;
		protected $Id;
		protected $Subject;

		public function Teacher($dataArray) {
			foreach($dataArray as $key=>$value){
				if(property_exists($this, $key)){
					$this->$key = $value;
				}
			}
		}
	}