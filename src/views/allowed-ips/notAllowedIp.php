<?php

use yii\helpers\Html;

$this->title = Yii::t('mfa', 'Not allowed IP');

?>

<h1 align="center"><?= $this->title ?></h1>

<p align="center">
    <?= Yii::t('mfa', 'You are not allowed to login from this IP') ?>:
    <?= $ip ?>
</p>

<p align="center">
    <?= Html::a(Yii::t('mfa', 'Add this IP to the list of allowed IPs'), ['token' => 'send']) ?>
</p>
