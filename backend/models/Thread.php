<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thread".
 *
 * @property integer $id_thread
 * @property string $title_thread
 * @property string $content_thread
 * @property string $create_thread
 * @property string $update_thread
 * @property integer $category_id
 * @property integer $user_id
 */
class Thread extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thread';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_thread'], 'string'],
            [['create_thread', 'update_thread'], 'safe'],
            [['category_id', 'user_id'], 'integer'],
            [['title_thread'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_thread' => 'Id Thread',
            'title_thread' => 'Title Thread',
            'content_thread' => 'Content Thread',
            'create_thread' => 'Create Thread',
            'update_thread' => 'Update Thread',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
        ];
    }
}
