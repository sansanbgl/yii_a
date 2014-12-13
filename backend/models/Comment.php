<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id_comment
 * @property string $tittle_comment
 * @property string $content_comment
 * @property string $create_comment
 * @property string $update_comment
 * @property integer $user_id
 * @property integer $thread_id
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_comment'], 'string'],
            [['create_comment', 'update_comment'], 'safe'],
            [['user_id', 'thread_id'], 'integer'],
            [['tittle_comment'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'tittle_comment' => 'Tittle Comment',
            'content_comment' => 'Content Comment',
            'create_comment' => 'Create Comment',
            'update_comment' => 'Update Comment',
            'user_id' => 'User ID',
            'thread_id' => 'Thread ID',
        ];
    }
}
