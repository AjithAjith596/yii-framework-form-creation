<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use yii\web\Controller;



class UsersController extends Controller
{
    
    public function actionCreate()
    {
        $model = new Users();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // return $this->redirect(['view', 'id' => $model->id]);
            return $this->refresh();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    
}

//GfBIXXcR