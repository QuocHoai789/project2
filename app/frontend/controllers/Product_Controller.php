<?php 
class Product_Controller extends Base_Controller{
	function index(){
		$this->model->load('product');
		$products=$this->model->product->find_all();
		$this->view->load('product/index',[
			'products'=>$products]);

	}

}

 ?>