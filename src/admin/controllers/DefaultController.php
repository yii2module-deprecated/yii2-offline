<?php

namespace yii2module\offline\admin\controllers;

use common\widgets\Alert;
use Yii;
use yii\web\Controller;
use yii2module\offline\admin\forms\ModeForm;
use yii2module\offline\console\helpers\ConfigHelper;

class DefaultController extends Controller
{

	public function actionIndex()
	{
		$form = new ModeForm();
		$currentMode = ConfigHelper::getState();
		if(Yii::$app->request->isPost){
			$body = Yii::$app->request->post();
			$isValid = $form->load($body) && $form->validate();
			if ($isValid) {
				$mode = boolval($form->mode);
				ConfigHelper::setState($mode);
				$modeStr = $mode ? 'offline' : 'online';
				if($mode == $currentMode) {
					Alert::add(['offline/main', 'mode_' . $modeStr . '_already_selected'], Alert::TYPE_WARNING);
				} else {
					Alert::add(['offline/main', 'success_' . $modeStr], Alert::TYPE_SUCCESS);
				}
				return $this->refresh();
			}
		} else {
			$form->mode = $currentMode;
		}
		return $this->render('index', [
			'model' => $form,
		]);
	}

}
