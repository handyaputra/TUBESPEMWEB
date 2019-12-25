<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bencana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bencana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bencana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_bencana')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
