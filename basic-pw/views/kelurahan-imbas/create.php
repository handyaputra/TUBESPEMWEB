<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KelurahanImbas */

$this->title = 'Create Kelurahan Imbas';
$this->params['breadcrumbs'][] = ['label' => 'Kelurahan Imbas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelurahan-imbas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
