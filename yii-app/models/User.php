<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\filters\auth\HttpBasicAuth;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $authKey
 * @property string $accessToken
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'unique'],
            [['username', 'password', 'accessToken'], 'string', 'max' => 255],
        ];
    }

//    public function attributeLabels()
//    {
//        return [
//            'id' => 'ID',
//            'username' => 'Username',
//            'password' => 'Password',
//            'authKey' => 'Auth Key',
//            'accessToken' => 'Access Token',
//        ];
//    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        $result = User::findOne(['accessToken' => $token]);
        return $result;
    }

    public static function findIdentity($id)
    {
//        return static::findOne($id);
    }

    public static function findByUsername($username)
    {
//        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
//        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
//        return $this->authKey === $authKey;
    }

}
