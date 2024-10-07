<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';

$form = ActiveForm::begin();
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordInput();
echo Html::submitButton('Login', ['class' => 'btn btn-primary']);
ActiveForm::end();
