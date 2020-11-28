<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string|null $text
 * @property int|null $user_id
 * @property int|null $request_id
 * @property string|null $creation_time
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'request_id'], 'integer'],
            [['user_id', 'request_id','text'], 'required','message' => 'Данное поле должно быть заполнено'],
            [['creation_time'], 'safe'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'user_id' => 'User ID',
            'request_id' => 'Request ID',
            'creation_time' => 'Creation Time',
        ];
    }
}
