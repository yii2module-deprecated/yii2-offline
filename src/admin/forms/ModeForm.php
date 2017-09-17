<?php
namespace yii2module\offline\admin\forms;

use Yii;
use yii2lab\misc\yii\base\Model;

class ModeForm extends Model
{
	public $mode = false;

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			['mode', 'boolean'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'mode' => t('offline/main', 'select_mode'),
		];
	}

}
