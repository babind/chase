<?php

Class Chaseuni{

	private $host="localhost";
	private $dbname="chaseuni";
	private $username="root";
	private $password="a";
	public $connection="";

	public function __construct(){
		$this->connection=new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password);
		$this->connection->setAttribute("PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION");
		$this->connection->exec("SET NAMES 'utf8'");
	}

	public function create($name,$email,$password){
		$sql="INSERT INTO  users(name,email,password)VALUES(:name,:email,:password)";
		$query=$this->connection->prepare($sql);
		$result=$query->execute(array(':name'=>$name,
								':email'=>$email,
								':password'=>$password));
	}

	public function read(){
		$sql="SELECT * FROM users ";
		$query=$this->connection->query($sql);
		$query->execute();
		$submit=$query->fetchAll(PDO::FETCH_ASSOC);
		return $submit;
	}

	public function getValueById($id){
		$sql="SELECT * FROM users WHERE user_id=:id";
		$query=$this->connection->prepare($sql);
		$query->execute(array(':id'=>$id));
		$result=$query->fetch(PDO::FETCH_ASSOC);
		return $result;
	 }
	 // public function createCode($street_address,$country,$state,$zip_code,$mobile_phone){
	 // 	$sql="INSERT INTO users (street_address,country,state,zip_code,mobile_phone) VALUES(:street_address,:country,:state,:zip_code,:mobile_phone)";
		// $query=$this->connection->prepare($sql);
		// $submit=$query->execute(array(':street_address'=>$street_address,
		// 								':country'=>$country,
		// 								':state'=>$zip_code,
		// 								':mobile_phone'=>$mobile_phone)); 	
	 // }
	public function update($id,$name,$street_address,$country,$state,$zip_code,$mobile_phone){
		$sql="UPDATE users SET name=:name,street_address=:street_address,country=:country,state=:state,zip_code=:zip_code,mobile_phone=:mobile_phone WHERE user_id=:id";
		$query=$this->connection->prepare($sql);
		$submit=$query->execute(array(':id'=>$id,
										':name'=>$name,
										':street_address'=>$street_address,
										':country'=>$country,
										':state'=>$state,
										':zip_code'=>$zip_code,
										':mobile_phone'=>$mobile_phone));
	}
	public function changePassword($id,$password){
		$sql="UPDATE users SET password=:password WHERE user_id=:id";
		$query=$this->connection->prepare($sql);
		$query->execute(array(':id'=>$id,
						':password'=>$password));
	}
}


?>