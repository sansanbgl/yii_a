<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "level".
 *
 * @property integer $id_level
 * @property string $name_level
 */
class Level extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_level'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_level' => 'Id Level',
            'name_level' => 'Name Level',
        ];
    }
}
