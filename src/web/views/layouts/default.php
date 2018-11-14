<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii2lab\applicationTemplate\common\assets\main\MainAsset;
use yii2lab\extension\web\helpers\Page;

MainAsset::register($this);
?>

<?php Page::beginDraw() ?>

<div class="wrap">
	<div class="container">
        <?= $content ?>
	</div>
</div>

<?php Page::endDraw() ?>
