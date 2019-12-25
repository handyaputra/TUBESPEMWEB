<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBantuanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-bantuan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_bantuan') ?>

    <?= $form->field($model, 'mbid_wilayah') ?>

    <?= $form->field($model, 'tanggal_bantuan') ?>

    <?= $form->field($model, 'mbid_operator') ?>

    <?= $form->field($model, 'tanggal_input') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
