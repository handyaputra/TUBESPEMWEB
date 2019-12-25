<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StokLogistik */

$this->title = 'Create Stok Logistik';
$this->params['breadcrumbs'][] = ['label' => 'Stok Logistiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-logistik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
