<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kelurahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kelurahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kel')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
