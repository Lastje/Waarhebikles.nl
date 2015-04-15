<?php

	class Masterclass {
		public function __construct($dataArray = false){
			if($dataArray){
				if(is_array($dataArray)){
					foreach($dataArray as $key=>$value){
						if(property_exists($this, $key)){
							if(!empty($value)){
								$this->$key = $value;
							}
						}
					}
				}elseif(is_numeric($dataArray)){
					$dataArray = $this->getDataOfObject(strtolower(get_class($this)),$dataArray);
					if(is_array($dataArray)){
						$dataArray = current($dataArray);
						foreach($dataArray as $key=>$value){
							if(property_exists($this, $key)){
								if(!empty($value)){
									$this->$key = $value;
								}
							}
						}
					}
				}
				
			}
		}

		public function get($atr){
			if(!empty($atr) && property_exists($this, $atr) && is_string($atr)){
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

		protected function getLegalTables(){
			return array('school','student','subject','teacher');
		}

		public function getDataOfObject($className,$objectId){
			if(in_array($className, $this->getLegalTables())){
				$database = Masterclass::getDatabaseObject();
				$boundValues = array();
				$query = "SELECT * FROM $className WHERE id = :id";
				$result = $database->query($query,array(":id"=>$objectId));
				$result;
				return $result;
			}else{
				Error::setError(__METHOD__."_".__LINE__,"de class '".get_class($this)."' is geen legale class",3,__FILE__,__LINE__);
			}
		}

		public static function getDatabaseObject(){
			$connectionInfo = array();
			$connectionInfo['host'] = DATABASE_HOST;
			$connectionInfo['database_name'] = DATABASE_NAME;
			$connectionInfo['user'] = DATABASE_USER;
			$connectionInfo['password'] = DATABASE_PASSWORD;
			$database = new Database($connectionInfo);

			if($database instanceof Database){
				return $database;
			}else{
				Error::setError(__METHOD__."_".__LINE__,"Er kon geen verbinding gemaakt worden met de database",3,__FILE__,__LINE__);
			}

			
		}

		public function all(){
			$database = Masterclass::getDatabaseObject();
			$className = strtolower(get_class($this));
			$legalClasses = $this->getLegalTables();
			if(in_array($className, $legalClasses)){
				$query = "SELECT * FROM $className";
				$result = $database->query($query,array());
				//set all to objects
				$objectArray = array();
				$classNameObject = ucfirst($className);
				foreach($result as $dataArray){
					$objectArray[] = new $classNameObject($dataArray);
				}

				return $objectArray;
			}else{
				Error::setError(__CLASS__."_".__METHOD__."_".__LINE__,"de class '".get_class($this)."' is geen legale class",3,__FILE__,__LINE__);
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