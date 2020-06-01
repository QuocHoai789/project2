<?php
class Home_Controller extends Base_Controller{
	function index(){
		$data=[
          'title'=>'Hoc PHP theo mo hinh MVC'
		];

		$this->view->load("home/index",$data);
		$this->model->load("category");
		 $s= $this->model->category->find_by_id(3);
		 var_dump($s);
		
	}
	function show(){
		echo "index Page";
	}
}

?>
