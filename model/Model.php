<?php
	// lớp chung cho từng bảng dữ liệu
	class Model extends Database{
		public $tableName;
		public $properties = array();
		public $primaryKey;

		public function __contruct($tableName){
			parent::__construct();
			$this->tableName = $tableName;
		}

		public getAll(){
			$sql = "SELECT * FROM {$tableName}";
			$result = seft::query($sql);
			return fetch($result);
		}

		public function find($pKeyValue){
			$pKey = isset($primaryKey) ? $primaryKey : "id";
			$sql = "SELECT * FROM {$tableName} WHERE {$pKey} = {$pKeyValue}";
			$result = seft::query($sql);
			return fetch($result)[0];
		}

		public function findBy($key, $value){
			$sql = "SELECT * FROM {$tableName} WHERE {$key} = {$value}";
			$result = seft::query($sql);
			return fetch($result);
		}

		public function findLike($key, $value){
			$sql = "SELECT * FROM {$tableName} WHERE {$key} = %{$value}%";
			$result = seft::query($sql);
			return fetch($result);
		}

		public function delete($key, $value){
			$sql = "DELETE FROM {$tableName} WHERE {$key} = {$value}";
			result = seft::query($sql);
			if($result) 
				echo "Delete successful!";
			else
				echo "Delete failed!";
		}

		public function fetch($data){
			$result = array();
			if ($data->num_rows > 0) {
			    // output data of each row
			    while($row = $data->fetch_assoc()) {
			        $result[count(result)] = $row;
			    }
			} else {
			    echo "0 results";
			}
			return $result;
		}
	}
?>