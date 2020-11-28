<?php

namespace app\models;


use yii\db\ActiveRecord;

class Request extends ActiveRecord
{


    public function rules()
    {
        return
            [
                [['problem','category_id','id_subdivision','id_state'],'required','message'=>'Данное поле должно быть заполнено'],
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
                'id_subdivision'=>'Подразделение',
                'id_state'=>'Статус заявки',
            ];
    }
    public  function getCategory_name()
    {
        return $this->hasOne(Categorie::className(),['id'=>'category_id']);
    }
    public static function getStateList()
    {
        return[
          'Обсуждение',
          'Передано на проверку',
          'Отменено',
            'Возвращенно на доработку',
          'Передано на реализацию',
          'Реализованно',
        ];
    }
    public function getStateName()
    {
        $list=$this->getStateList();

        return $list[$this->id_state];
    }

    public function getSubdivisionName()
    {
        $list=UserRecord::getSubdivisions();

        return $list[$this->id_subdivision];
    }

}