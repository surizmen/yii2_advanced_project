<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;


class TestController extends Controller
{
    public function actionSay($target)
    {
        return $this->render('say', ['target' => $target]);
    }
}
