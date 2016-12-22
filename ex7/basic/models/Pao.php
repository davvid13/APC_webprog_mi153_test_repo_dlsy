<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pao".
 *
 * @property string $name
 * @property string $nickname
 * @property string $address
 * @property string $e_mail
 * @property string $website
 * @property string $comment
 * @property string $gender
 * @property integer $cellphone
 */
class Pao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nickname', 'address', 'e_mail', 'website', 'comment', 'gender', 'cellphone'], 'required'],
            [['comment', 'gender'], 'string'],
            [['cellphone'], 'integer'],
            [['name', 'address'], 'string', 'max' => 40],
            [['nickname', 'e_mail', 'website'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'nickname' => 'Nickname',
            'address' => 'Address',
            'e_mail' => 'E Mail',
            'website' => 'Website',
            'comment' => 'Comment',
            'gender' => 'Gender',
            'cellphone' => 'Cellphone',
        ];
    }
}
