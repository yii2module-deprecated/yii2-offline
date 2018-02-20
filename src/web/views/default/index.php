<?php

/* @var $this yii\web\View
 * @var $data array
 * @var $refreshTime integer */

$this->title = Yii::t('offline/main', 'title');

$this->registerMetaTag([
    'http-equiv' => 'Refresh',
    'content' => $refreshTime,
]);

?>

<div class="jumbotron" style="margin-top: 50px">

	<h1>
		<?= $this->title ?>
	</h1>

    <p>
        <?= nl2br(Yii::t('offline/main', 'message')) ?>
    </p>

    <div class="alert alert-info">
        <?= nl2br(Yii::t('offline/main', 'refreshTimeNote')) ?>
    </div>

    <div class="hidden">
        <a class="btn btn-primary" href=""><?= Yii::t('action', 'refresh') ?></a>
    </div>

</div>
