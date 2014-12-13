<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id_news
 * @property string $title_news
 * @property string $content_news
 * @property string $pictureloc_news
 * @property integer $user_id
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_news'], 'string'],
            [['user_id'], 'integer'],
            [['title_news', 'pictureloc_news'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_news' => 'Id News',
            'title_news' => 'Title News',
            'content_news' => 'Content News',
            'pictureloc_news' => 'Pictureloc News',
            'user_id' => 'User ID',
        ];
    }
}
