<?php

namespace app\models;


use yii\db\ActiveRecord;

class Request extends ActiveRecord
{


    public function rules()
    {
        return
            [
                [['problem','category_id'],'required','message'=>'Данное поле должно быть заполнено'],
                [['solution'],'fields']
            ];
    }

    public function attributeLabels()
    {
        return
            [
                'problem'=>'Проблема',
                'solution'=>'Решение',
                'category_id'=>'Категория проблемы',
                'creation_time'=>'Дата создания',
            ];
    }
    public  function getCategory_name()
    {
        return $this->hasOne(Categorie::className(),['id'=>'category_id']);
    }

}