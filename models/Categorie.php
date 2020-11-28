<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;


class Categorie extends \yii\db\ActiveRecord
{



    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Данное поле должно быть заполнено'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'name' => 'Название категории',

        ];
    }
    public static function getList_categories()
    {
        return  ArrayHelper::map(self::find()->all(),'id','name');
    }
}
