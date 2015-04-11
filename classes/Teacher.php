<?php
	class Teacher extends Masterclass {
		protected $name;
		protected $date_of_birth;
		protected $adress;
		protected $zipcode;
		protected $ID;
		protected $Subject;

		public function Teacher($dataArray) {
			foreach($dataArray as $key=>$value){
				if(property_exists($this, $key)){
					$this->$key = $value;
				}
			}
		}
	}