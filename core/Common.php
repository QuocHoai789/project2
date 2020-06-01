<?php 
 function load_app(){

$config= require BASE_PATH.'/Config/config.php';
if(!empty($_GET['module'])){
	$module=$_GET['module'];
}
else{
	$module=$config['default_module'];
}
if(!empty($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action=$config['default_action'];
}
//load core_controller and base_controller
require BASE_PATH.'/core/Core_Controller.php';
require BASE_PATH.'/core/Base_Controller.php';
//load model
require BASE_PATH.'/core/Core_Model.php';
require BASE_PATH.'/core/Base_Model.php';
$controller=ucfirst($module).'_Controller';

$controller_path=APP_PATH."/controllers/{$controller}.php";//Đường dẫn tuyệt đối tới file controller

if(!file_exists($controller_path)){
	exit('File not found '.$controller_path);
}
require $controller_path;
if(!class_exists($controller)){
	exit("Class not found $controller");
}
$object=new $controller;
if(!method_exists($object, $action)){
	exit("Method not found $action");
}
$object->$action();


}
 ?>