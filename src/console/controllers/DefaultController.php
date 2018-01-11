<?php

namespace yii2module\offline\console\controllers;

use yii2lab\console\yii\console\Controller;
use yii2module\offline\console\helpers\ConfigHelper;
use yii2lab\console\helpers\input\Question;
use yii2lab\console\helpers\Output;

class DefaultController extends Controller
{
	
	/**
	 * Set offline mode
	 */
	public function actionIndex($option = null)
	{
		if(!ConfigHelper::isDetected()) {
			Question::confirm('Config not detected! Restore?', 1);
			ConfigHelper::restoreConfig();
		}
		
		$option = Question::displayWithQuit('Set offline state', ['Enable', 'Disable'], $option);
		
		$result = ConfigHelper::setState($option == 'e');
		$optionStr = $option == 'e' ? 'enabled' : 'disabled';
		if($result === null) {
			Output::block("Already $optionStr!");
		} elseif($result) {
			Output::block("Success $optionStr!");
		} else {
			Output::block("Error set state!");
		}
	}
	
}
