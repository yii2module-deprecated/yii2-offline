<?php

/* @var $this \yii\web\View */
/* @var $content string */

use woop\foundation\helpers\Page;

$appAsset = APP . '\assets\AppAsset';
$appAsset::register($this);
?>

<?php Page::beginDraw() ?>

<div class="wrap">
	<div class="container">
		<?= $content ?>
	</div>
</div>

<?php Page::endDraw() ?>
