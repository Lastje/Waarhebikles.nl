<?php
	class Masterclass {
		private $database;
		
		public function get($atr){
			if(!empty($atr) && property_exists($this, $atr)){
				$atr = strtolower($atr);
				return $this->$atr;
			}
		}

		public function set($atr,$value){
			if(!empty($atr) && !empty($value) && property_exists($this, $atr)){
				$atr = strtolower($atr);
				$this->$atr = $value;
			}
		}

		public function write($id=0){

			$this->database = new Database(DATABASE_HOST,DATABASE_NAME,DATABASE_USER,DATABASE_PASSWORD);

			$table = strtolower(get_class($this));
			$properties = get_object_vars($this);

			$values = array();

			foreach($properties as $key=>$property){
				if(!empty($property) && $key != 'database'){
					$array_key = ':' . $key;
					$values[$array_key] = $property;
				}
			}

			$this->database->insert($table,$values);

			
		}
		

	}
?>