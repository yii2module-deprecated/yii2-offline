<?php

namespace yii2module\offline\domain\filters;

use yii2lab\designPattern\scenario\base\BaseScenario;

class IsOffline extends BaseScenario {

    public $exclude = [];
	
	public function run() {
		$config = $this->getData();
		if(in_array(APP, $this->exclude)) {
			unset($config['catchAll']);
		}
		$this->setData($config);
	}
 
}
