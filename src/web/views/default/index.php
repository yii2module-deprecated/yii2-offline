<?php

/* @var $this yii\web\View */
/* @var $data array */

$this->title = $data['title'];

?>

<div class="offline">

	<h1>
		<?= $this->title ?>
	</h1>

	<div class="alert alert-info">
		<?= nl2br($data['message']) ?>
	</div>

</div>
