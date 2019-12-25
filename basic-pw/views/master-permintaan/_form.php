<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPermintaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-permintaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_permintaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mpid_wilayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_permintaan')->textInput() ?>

    <?= $form->field($model, 'mpid_operator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_approve')->textInput() ?>

    <?= $form->field($model, 'tanggal_input')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
