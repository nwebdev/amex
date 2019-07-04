<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Softdelete extends Model
{
    public $ids;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
