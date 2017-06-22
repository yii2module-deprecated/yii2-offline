<?php

namespace yii2lab\offline\console\controllers;

use woop\extension\console\yii\console\Controller;
use yii2lab\offline\console\helpers\ConfigHelper;
use woop\extension\console\helpers\input\Question;
use woop\extension\console\helpers\Output;

class DefaultController extends Controller
{
	
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
