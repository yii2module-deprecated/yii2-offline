<?php

namespace yii2module\offline\web\controllers;

use yii2module\offline\exceptions\PreventionException;
use Yii;
use yii\web\Controller;

/**
 * Default controller
 */
class DefaultController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public $layout = 'default';
	public $refreshTime = 60;
	
	public function actionIndex($type = 'default')
	{
		$data = t('offline/main', $type);
		$display = APP == API ? 'displayApi' : 'displayWeb';
		return $this->$display($data);
	}
	
	private function displayWeb($data) {
		Yii::$app->view->registerMetaTag([
			'http-equiv' => 'Refresh',
			'content' => $this->refreshTime,
		]);
		return $this->render('index', [
			'data' => $data,
		]);
	}
	
	private function displayApi($data) {
		throw new PreventionException($data['message']);
	}
}
