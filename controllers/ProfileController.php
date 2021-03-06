<?php

namespace app\controllers;

use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class ProfileController extends ActiveController
{
    public $modelClass = 'app\models\Profile';
    
    public function behaviors() {
        return ArrayHelper::merge(parent::behaviors(), [
                    'corsFilter' => [
                        'class' => \yii\filters\Cors::className(),
                    ],
        ]);
    }
}
