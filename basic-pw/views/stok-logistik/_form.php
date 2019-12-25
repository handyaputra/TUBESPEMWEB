<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StokLogistik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stok-logistik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_stok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sid_brg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sid_kab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'satuan')->dropDownList([ 'Kg' => 'Kg', 'Dus' => 'Dus', 'Liter' => 'Liter', 'Pack' => 'Pack', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
