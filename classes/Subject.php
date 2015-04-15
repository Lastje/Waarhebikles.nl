<?php
	class Subject extends Masterclass {
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