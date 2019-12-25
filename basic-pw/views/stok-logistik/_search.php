<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StokLogistikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stok-logistik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_stok') ?>

    <?= $form->field($model, 'sid_brg') ?>

    <?= $form->field($model, 'sid_kab') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'satuan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
