<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "threadstar".
 *
 * @property integer $id_threadstar
 * @property integer $rate_threadstar
 * @property integer $user_id
 * @property integer $thread_id
 */
class Threadstar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'threadstar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rate_threadstar', 'user_id', 'thread_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_threadstar' => 'Id Threadstar',
            'rate_threadstar' => 'Rate Threadstar',
            'user_id' => 'User ID',
            'thread_id' => 'Thread ID',
        ];
    }
}
