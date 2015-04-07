<?php
	class Database extends Masterclass {
		protected $host;
		protected $database_name;
		protected $user;
		protected $password;
		protected $object;

		public function Database($host,$database_name,$user,$password){
			$this->host = $host;
			$this->database_name = $database_name;
			$this->user = $user;
			$this->password = $password;

			//method to create PDO class
			$this->connect();
		}

		public function connect(){
			try{
				$db = new PDO('mysql:host='.$this->host.';dbname='.$this->database_name.'', $this->user, $this->password);
				$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$this->object = $db;  
			}
				catch (PDOException $e){
				echo $e->getMessage();
				exit;
			}

		}
		//->query('SELECT','','product',$array = array(':id'=>1,),'ORDER BY id');
		public function query($type,$values = '*',$table,$params,$sql){ //params -> array (:key,value);
			$legal_types = array('SELECT'); //todo: ,'UPDATE','INSERT'  //key = fieldname
			$legal_table = array('product');
			$query = '';

			//type
			if(in_array(strtoupper($type),$legal_types)){
				$query .= $type . ' ';

				//values
				if(is_array($values)){
					$end = end($values);
					foreach($values as $value){
						$query .= $value;
						if($value != $end){
							$query .= ', ';
						}else{
							$query .= ' ';
						} 
					}
				}elseif(!is_array($values) && strlen($values) > 1){
					$query .= $values . ' ';
				}else{
					$query .= $values . ' ';
				}

				//table
				if(in_array($table, $legal_table)){
					$query .= 'FROM ' . $table . ' ';
				}

				//params (WHERE)
				if(!empty($params)){
					$query .= 'WHERE ';
					$count_params = count($params);
					$end = end($params);
					foreach ($params as $key => $value) {
						$query .= str_replace(':', '', $key) . ' = ' . $key . ' ';
						if($count_params > 1 && $value != $end){
							$query .= 'AND ';
						}
					}
				}

				//extra SQL
				if(!empty($sql)){
					$query .= $sql;
				}


				//execute

				$r = $this->object->prepare($query);
				foreach($params as $key=>$param){
					$r->bindParam($key, $param, PDO::PARAM_STR);
				}
								
				$r->execute();

				$resultRow = array();

				while($row = $r->fetch(PDO::FETCH_ASSOC)){
					$resultRow[] = $row;
				}

				return $resultRow;
			}

		}

		public function insert($table,$values){ //$values = array(":column"=>$value)

			$columns = array();
			$d_value = array();

			foreach($values as $key=>$value){
				$column = str_replace(":", "", $key);
				$columns[] = $column;
				$d_value[] = $value;
			}

			$sql = "INSERT INTO ".$table." (".implode(",", $columns). ")
					VALUES (".implode(",", $d_value). ")";

			var_dump($sql);

			$r = $this->object->prepare($sql);
			$r->execute($values);
		}
		

	}
?>