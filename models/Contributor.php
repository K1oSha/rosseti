<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contributor".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $request_id
 */
class Contributor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contributor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'request_id'], 'integer'],
            [['user_id', 'request_id'], 'required', 'message' => 'Данное поле должно быть заполнено'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'request_id' => 'Request ID',
        ];
    }
}
