<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WilayahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wilayah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <?= $form->field($model, 'nama_prov') ?>

    <?= $form->field($model, 'wid_kab') ?>

    <?= $form->field($model, 'wid_kec') ?>

    <?= $form->field($model, 'wid_kel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
