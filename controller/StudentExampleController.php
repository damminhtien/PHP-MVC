<?php  
	include_once("../model/StudentExampleModel.php");
 
	class StudentController {
	    public $student;	
	 
	    public function __construct(){  
	        $this->student = new Student();
	    } 
		
	    public function invoke(){
            if (!isset($_GET["student"])){
               // if not get specify student -> get all
               $students = $this->student->getAll();
               include "../view/student/studentlist.php";
            }
            else{
               // if get specify student
               $student = $this->student->find($_GET["student"]);
               include "../view/student/viewstudent.php";
            }
	    }
	}
?>