<?php
	//examples class
	class Student extends Model{
		public $id;
		public $name;
		public $class;

		public function __construct(){
			parent::__contruct();
			echo "Create object without define properties!";
		}

		public function __construct($id, $name, $class){
			$this->id = $id;
			$this->name = $name;
			$this->class = $class;
			$this->primaryKey = isset($primaryKey) ? $primaryKey : "id";
			$this->tableName = $tableName || get_class($this);
		}

		public function save(){
			$this->primaryKey = isset($primaryKey) ? $primaryKey : "id";
			$this->tableName = isset($tableName) ? $tableName : get_class($this);
			$sql = "SELECT * FROM {$tableName} WHERE {$primaryKey} = $this->$primaryKey";
			$result = seft::query($sql);
			if ($result->num_rows > 0) {
			    $sql = "UPDATE {$tableName} SET id = '{$id}', name = '{$name}', class = '{$class}' WHERE {$primaryKey} = $this->$primaryKey";

			} else {
			    $sql = "INSERT INTO {$tableName} VALUES ('{$id}', '{$name}', '{$class}')";
			}
			$result = seft::query($sql);
			if($result)
				echo "Save successful!";
			else 
				echo "Save failed";
		}
	}
?>