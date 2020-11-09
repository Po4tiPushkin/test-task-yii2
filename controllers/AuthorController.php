<?php

namespace app\controllers;

use yii\rest\ActiveController;

class AuthorController extends ActiveController
{
    public $modelClass = 'app\models\Author';

    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }

};