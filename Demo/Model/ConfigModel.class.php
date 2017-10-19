<?php

/**
 * 资讯模型
 * 
 */
namespace Demo\Model;
use Lib\Model;
class ConfigModel extends Model {
	public function _initialize() {
		$this->table = 'config';
	}
}
?>