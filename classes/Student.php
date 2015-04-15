<?php
	class Student extends Masterclass {
		protected $Name;
		protected $Adress;
		protected $Subjects;
		protected $Schooltype;
		protected $Id;
		


		public function Student($dataArray) {	
			foreach($dataArray as $key=>$value){
				if(property_exists($this, $key)){
					$this->$key = $value;
				}
			}
		}
	}