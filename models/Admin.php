<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property int $phonenumber
 * @property string $password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'phonenumber', 'password'], 'required'],
            [['phonenumber'], 'integer'],
            [['username'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'phonenumber' => 'Phonenumber',
            'password' => 'Password',
        ];
    }
}
