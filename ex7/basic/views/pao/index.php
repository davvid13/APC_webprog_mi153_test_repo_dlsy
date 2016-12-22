<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\paoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pao';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
			h1					{text-align:center; 
								 color:black;
								 font-family:lucida console}
			
			h2					{text-align:center;
								 color:black;
								 font-family:courier new;
								 font-style:oblique}
					
			img.me 				{float:right;
								 width:100px;}
					
			table 				{width:100%;
								 float:center;}
			
			th					{color:black;
								 font-family:georgia;
								  float:center;}
					 
			p					{color:black;
								 font-family:georgia}
</style>
<div class="pao-index">

    <h1>Exercise 7</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<br/>
	<h2>What You Do Today Can Improve All Your Tomorrow -Ralph Martson</h2>	
		
		
		
		<table>
				<tr>
					<th>Fullname:</th>
					<th>Davvid Sy</th>
				</tr>
				
				<tr>
					<th>Nickname:</th>
					<th>Davvid</th>
				</tr>	
			</table>

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
