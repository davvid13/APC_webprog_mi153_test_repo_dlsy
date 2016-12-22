<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\paoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pao';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pao-index">

    <h1>Exercise 7</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'nickname',
            'address',
            'e_mail',
            'website',
			'comment',
			'gender',
			'cellphone',
            // 'comment:ntext',
            // 'gender:ntext',
            // 'cellphone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
