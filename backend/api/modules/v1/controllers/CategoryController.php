<?php

namespace api\modules\v1\controllers;

use api\modules\v1\models\Category;
use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = Category::class;
}


