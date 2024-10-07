<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Signup';

$form = ActiveForm::begin();
echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'role')->dropDownList(['user' => 'User', 'manager' => 'Manager', 'admin' => 'Admin']);
echo Html::submitButton('Signup', ['class' => 'btn btn-primary']);
ActiveForm::end();
