<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBantuan */

$this->title = 'Create Master Bantuan';
$this->params['breadcrumbs'][] = ['label' => 'Master Bantuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-bantuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
