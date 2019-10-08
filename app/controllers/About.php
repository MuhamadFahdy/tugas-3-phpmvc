<?php 

class About{
	public function index($nama = 'Fahdy',$pekerjaan='mahasiswa'){
		$this->view('about/index');
	}

	public function page(){
		$this->view('about/page');
	}
}

 ?>