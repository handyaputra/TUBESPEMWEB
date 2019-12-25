<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBencana */

$this->title = 'Update Master Bencana: ' . $model->id_master_bencana;
$this->params['breadcrumbs'][] = ['label' => 'Master Bencanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_master_bencana, 'url' => ['view', 'id' => $model->id_master_bencana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-bencana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
