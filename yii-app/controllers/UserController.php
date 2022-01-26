<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\web\Response;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
        ];
//        $behaviors['access'] = [
//            'class' => AccessControl::class,
//            'rules' => [
//                [
//                    'allow' => true,
//                    'roles' => ['@'],
//                ]
//            ]
//        ];
        return $behaviors;
    }

    public function actionSignup() {
        Yii::$app->response->format = Response::FORMAT_JSON;
        header('content-type: application/json');
        $model = new User();
        if (Yii::$app->request->isPost) {
            $model->username = Yii::$app->request->post("username");
            $model->password = Yii::$app->request->post("password");
            $model->accessToken = Yii::$app->security->generateRandomString();

            if ($model->validate()) {
                $model->save();
                Yii::$app->response->setStatusCode(201);
                return 'success';
            } else {
                Yii::$app->response->setStatusCode(418);
                return $model->getErrors();
            }
        }
    }
}