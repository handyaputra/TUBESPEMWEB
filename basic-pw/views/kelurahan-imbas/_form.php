<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KelurahanImbas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kelurahan-imbas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_imbas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kid_kel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_kor_laki')->textInput() ?>

    <?= $form->field($model, 'jml_kor_perempuan')->textInput() ?>

    <?= $form->field($model, 'jml_hil_laki')->textInput() ?>

    <?= $form->field($model, 'jml_hil_perempuan')->textInput() ?>

    <?= $form->field($model, 'jml_eva_laki')->textInput() ?>

    <?= $form->field($model, 'jml_eva_perempuan')->textInput() ?>

    <?= $form->field($model, 'jml_meninggal_laki')->textInput() ?>

    <?= $form->field($model, 'jml_meninggal_perempuan')->textInput() ?>

    <?= $form->field($model, 'pjg_jln_imbas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
