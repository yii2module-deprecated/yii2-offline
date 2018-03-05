<?php

namespace yii2module\offline\web\controllers;

use yii2module\offline\domain\exceptions\PreventionException;
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
	public $refreshTime = 10;
	
	public function actionIndex()
	{
		if(APP == API) {
            return $this->displayApi();
        } else {
            return $this->displayWeb();
        }
	}
	
	private function displayWeb() {
		return $this->render('index', [
		    'refreshTime' => $this->refreshTime,
        ]);
	}
	
	private function displayApi() {
	    $message =
            Yii::t('offline/main', 'title')
            . DOT . SPC .
            Yii::t('offline/main', 'message');
		throw new PreventionException($message);
	}
}
