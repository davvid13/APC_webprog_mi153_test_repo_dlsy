<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trivia".
 *
 * @property string $trivia_question
 * @property string $trivia_answer
 */
class Trivia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trivia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trivia_question', 'trivia_answer'], 'required'],
            [['trivia_answer'], 'string'],
            [['trivia_question'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trivia_question' => 'Trivia Question',
            'trivia_answer' => 'Trivia Answer',
        ];
    }
}
