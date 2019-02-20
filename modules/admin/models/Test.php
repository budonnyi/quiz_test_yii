<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $question
 * @property int $radio
 * @property string $comment
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'question', 'radio', 'comment'], 'required'],
            [['radio'], 'integer'],
            [['comment'], 'string'],
            [['name'], 'string', 'max' => 80],
            [['email'], 'string', 'max' => 40],
            [['question'], 'string', 'max' => 255],
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
            'email' => 'Email',
            'question' => 'Question',
            'radio' => 'Radio',
            'comment' => 'Comment',
        ];
    }
}
