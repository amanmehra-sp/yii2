<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;

class SiteController extends Controller
{
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['dashboard']);
        }

        return $this->render('login', ['model' => $model]);
    }

    public function actionSignup()
    {
        // Signup logic
    }

    public function actionDashboard()
    {
        // Dashboard logic
    }
}
