<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id' => 'add-customer-form',
]);

echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo $form->field($model, 'content');
echo $form->field($model, 'birth_date');

echo Html::submitButton('Submit', ['class' => 'btn btn-primary']);
ActiveForm::end();

?>