<?php 

class Mahasiswa_model{
	private $dbh; //databse handler
	private $stmt; //untuk menampung statemen database

	public function __constuct(){
		//data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try{
			$this->dbh = new PDO($dsn,'root','');
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	// private $mhs = [
	// 	[
	// 		"nama" => "Muhamad Fahdy",
	// 		"nrp" => "173040030",
	// 		"email" => "didi@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Adam A",
	// 		"nrp" => "173040015",
	// 		"email" => "adam@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "diki",
	// 		"nrp" => "173040035",
	// 		"email" => "diki@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	]
	// ];

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

 