<?php

namespace app\controllers;

use Yii;
use yii\db\Query;
use yii\data\SqlDataProvider;
/**
 * No1Controller implements the CRUD actions for Barang model.
 */
class DataMasterBencanaController extends \yii\web\Controller
{
    /**
     * {@inheritdoc}
     */
    
    public function actionIndex()
    {
        $dataProvider = new SqlDataProvider([
			'sql' => 'SELECT * FROM data_master_bencana'
        ]);
		
		return $this->render('index',['dataProvider' => $dataProvider]);
    }

}
