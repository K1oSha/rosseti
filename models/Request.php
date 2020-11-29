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
                [['solution','comment'],'fields']
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
                'id_state'=>'Статус предложения',
                'comment'=>'Комментарий проверяющего органа',
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
    public static function getStateList_check()
    {
        $list=self::getStateList();
        unset($list[0],$list[1],$list[4],$list[5]);
        return $list;
    }
    public static function getStateList_author()
    {
        $list=self::getStateList();
        unset($list[3],$list[4],$list[5]);
        return $list;
    }
}