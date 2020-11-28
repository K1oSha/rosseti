<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $request_id
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['request_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'request_id' => 'Request ID',
        ];
    }
}
