<?php

//= $this->title = 'Modül çalışıyor.'; 
use yii\helpers\Html;
use yii\grid\GridView;


//use yii\helpers\Html;
//use yii\grid\GridView;
//use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\budget\models\BudgeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Budget';
$this->params['breadcrumbs'][] = $this->title;
$items = array();
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Budget Verilerimiz</h2>
		
		
		<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title:ntext',
            'category:ntext',
            'type',
			'amount',
            'date',

        ],
    ]); ?>
		
		
    </div>

</div>
