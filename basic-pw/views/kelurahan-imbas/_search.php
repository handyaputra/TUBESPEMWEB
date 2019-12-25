<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KelurahanImbasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kelurahan-imbas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_imbas') ?>

    <?= $form->field($model, 'kid_kel') ?>

    <?= $form->field($model, 'jml_kor_laki') ?>

    <?= $form->field($model, 'jml_kor_perempuan') ?>

    <?= $form->field($model, 'jml_hil_laki') ?>

    <?php // echo $form->field($model, 'jml_hil_perempuan') ?>

    <?php // echo $form->field($model, 'jml_eva_laki') ?>

    <?php // echo $form->field($model, 'jml_eva_perempuan') ?>

    <?php // echo $form->field($model, 'jml_meninggal_laki') ?>

    <?php // echo $form->field($model, 'jml_meninggal_perempuan') ?>

    <?php // echo $form->field($model, 'pjg_jln_imbas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
