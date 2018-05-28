<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\budget\models\Budget */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="budget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Gelir' => 'Gelir', 'Gider' => 'Gider', ], ['prompt' => '']) ?>

	 <?= $form->field($model, 'amount')->textInput() ?>

	
    <?= $form->field($model, 'date')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <?= $form->field($model, 'author')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
