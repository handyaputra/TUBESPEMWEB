<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBantuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-bantuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bantuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mbid_wilayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_bantuan')->textInput() ?>

    <?= $form->field($model, 'mbid_operator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_input')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
