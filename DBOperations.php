<?php

class DBOperations{
	private $serverName;
	private $userName;
	private $password;
	private $dbName;
	private $charset;

	public function connect(){
		$this->serverName='localhost';
		$this->userName='root';
		$this->password='';
		$this->dbName='syschool';
		$this->charset='utf8mb4';

		try {
			$dsn = "mysql:host=".$this->serverName.";dbname=".$this->dbName.";charset=".$this->charset;
			$pdo = new PDO($dsn,$this->userName,$this->password);
			return $pdo;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function addUser($user){
		$this->connect()->query("INSERT INTO user VALUES ('$user->username','$user->password','$user->type')");
	}

	public function checkExistance($username,$type){
		if($type=='student'){$field='admissionNumber';}
		elseif($type=='teacher'){$field='referenceNumber';}
		elseif($type=='staff'){$field='referenceNumber';}
		$result = $this->connect()->query("SELECT * FROM $type WHERE $field=$username");
        return $result->rowCount();
    }
	
	public function checkLogin($username,$password){
		$password=md5($password);
		echo $password;
		$link= mysqli_connect("localhost", "root", "", "syschool") or die("Something wrong with the server, try again later");
		$sqll = "SELECT * FROM user WHERE Username='{$username}' && Password='{$password}'";
		$res = mysqli_query($link,$sqll);
		if($row=mysqli_fetch_assoc($res)){
			if($row['Type']=="student"){
				header("location: homestudent.php");
			}
			elseif($row['Type']=="teacher"){
				header("location: hometeacher.php");
			}
			elseif($row['Type']=="staff"){
				header("location: homestaff.php");
			}
		}else{
			Print '<script>alert("Password Mismatched!");</script>';
			Print '<script>window.location.assign("index.php");</script>';
		}
    }

	public function insertStudent($student){
		$this->connect()->query("INSERT INTO student VALUES ('$student->admissionNumber','$student->fullName','$student->nameWithInitials','$student->address','$student->dateOfBirth','$student->gender','$student->nicNumber','$student->contactNumber','$student->class','$student->fatherName','$student->fatherOccupation','$student->motherName','$student->motherOccupation')");
	}

	public function insertTeacher($teacher){
		$this->connect()->query("INSERT INTO teacher VALUES ('$teacher->referenceNumber','$teacher->fullName','$teacher->nameWithInitials','$teacher->address','$teacher->dateOfBirth','$teacher->gender','$teacher->nicNumber','$teacher->contactNumber','$teacher->fieldOfSpecialized','$teacher->workingExperience','$teacher->position')");
	}
	public function insertStaffMember($staffmember){
		$this->connect()->query("INSERT INTO staff VALUES ('$staffmember->referenceNumber','$staffmember->fullName','$staffmember->nameWithInitials','$staffmember->address','$staffmember->dateOfBirth','$staffmember->gender','$staffmember->nicNumber','$staffmember->contactNumber','$staffmember->fieldOfSpecialized','$staffmember->workingExperience','$staffmember->position')");
	}

}