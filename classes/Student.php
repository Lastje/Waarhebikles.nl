<?php
	class student extends Masterclass {
		protected

		public function Student($dataArray) {	
			foreach($dataArray as $key=>$value){
				if(property_exists($this, $key)){
					$this->$key = $value;
				}
			}
		}
	}