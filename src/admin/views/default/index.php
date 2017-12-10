<?php

/* @var $this \yii\web\View
 * @var $model \yii\base\Model
 */

use yii\bootstrap\Alert;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii2lab\widgets\SwitchInput;

$this->title = t('offline/main', 'title');

if($model->mode) {
	echo Alert::widget([
		'options' => ['class' => 'alert-info'],
		'body' => t('offline/main', 'offline_mode_enabled_info'),
	]);
}
?>

<div class="box box-primary">
	<?php $form = ActiveForm::begin(['options' => ['class' => 'form-vertical']]); ?>
	<div class="box-body">
		<?= $form->field($model, 'mode')->widget(SwitchInput::classname(), SwitchInput::config([
			'onText' => t('action', 'offline'),
			'offText' => t('action', 'online'),
			'onColor' => 'danger',
			'offColor' => 'success',
		])) ?>

	</div>
	<div class="box-footer">
		<?= Html::submitButton(t('action', 'send'), ['class' => 'btn btn-primary', 'name' => 'clear-button']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>
