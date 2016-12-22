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
<img class="me" alt="Me" src="picture.jpg"/>		
		
		
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
        <?= Html::a('Add Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
<p>Hobbies:</p>
					<img class="basketball" alt="Play Basketball" src="basketball.jpg"/>
					<img class="video" alt="Play video games" src="controller.jpg"/>
					<img class="books" alt="Read books" src="book.jpg"/> 
					<img class="food" alt="Eat Food" src="food.jpg')"/>
					<img class="dog" alt="Dogs" src="dog.jpg ?>"/>
					<img class="friends" alt="Hanging with friends" src="friends.gif"/>
					<img class="dance" alt="A little of dancing" src="pop.jpg'"/>
					<img class="csgo" alt="Counter-Strike: Global Offensive" src="csgo.jpg"/>
					
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
