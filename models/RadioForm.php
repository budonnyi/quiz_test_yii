<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class RadioForm extends Model
{
    public $radioButton = [];
    public $email;
    public $question;
    public $name;
    public $comment;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['comment', 'name', 'email', 'question', 'radioButton'], 'required'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'comment' => 'Комментарий',
            'name' => 'Полное имя',
            'email' => 'e-mail',
            'question' => 'Вопрос',
            'radioButton' => 'Ответ',
        ];
    }

}
