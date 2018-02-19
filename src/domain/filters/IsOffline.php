<?php

namespace yii2module\offline\domain\filters;

use yii\base\BaseObject;
use yii2lab\designPattern\filter\interfaces\FilterInterface;

class IsOffline extends BaseObject implements FilterInterface {

    public $exclude = [];

	public function run($config) {
		if(in_array(APP, $this->exclude)) {
			unset($config['catchAll']);
		}
		return $config;
	}
	
}
