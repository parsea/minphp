<?php

/**
 * Demo Controller
 * 
 */
namespace Demo\Controller;
use Lib\Controller;
class DemoController extends Controller {
	private $config_model;

	public function _initialize(){
		$this->config_model = getInstance('Demo\Model\ConfigModel');
	}

	public function index() {
		$title = 'Hello MinPHP!';
		$config = $this->config_model->find();
		$this->assign('title',$title);
		$this->assign('config',$config);
		$this->display('Demo/View/index.php');
	}
}
?>