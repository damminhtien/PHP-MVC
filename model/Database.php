<?php
	// lớp kết nối và truy xuất cơ sở dữ liệu
	class Database {
		public static $hostname = "localhost";
		public static $username = "root";
		public static $password = "";
		public static $dbname = null;
		protected $conn = null;

		public function __contruct(){
			$this->connect();
			echo "Set default database!"; 
		}

		public function connect(){
			$this->conn = mysqli_connect(static::$hostname, static::$username, static::$password, static::$dbname) or die ('Connect Error!');
			mysqli_query($this->conn, "SET NAMES 'utf8'");
		}

		public function disconnect(){
			if($this->conn)
				mysqli_close($this->conn);
		}

		public static function query($sql){
			try{
				$result = mysqli_query($this->conn, $sql) or die ('Query Error!');
				return $result;
			catch(mysqli_sql_exception $e){
	            return false;
	        }
		}
	}
?>