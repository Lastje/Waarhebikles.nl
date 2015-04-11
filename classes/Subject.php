<?php
	class Subject extends Masterclass {
		protected $Hours; //number of hours in a week
		protected $Name;
		protected $Id;
		
		
		public function Subject($dataArray) {
			foreach($dataArray as $key=>$value){
				if(property_exists($this, $key)){
					$this->$key = $value;
				}
			}
		}
	}