<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPermintaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-permintaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_permintaan') ?>

    <?= $form->field($model, 'mpid_wilayah') ?>

    <?= $form->field($model, 'tanggal_permintaan') ?>

    <?= $form->field($model, 'mpid_operator') ?>

    <?= $form->field($model, 'tanggal_approve') ?>

    <?php // echo $form->field($model, 'tanggal_input') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
