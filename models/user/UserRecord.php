<?php

namespace app\models\user;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 */
class UserRecord extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password','auth_key'], 'string', 'max' => 255],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    public function beforeSave($insert){
        $return=parent::beforeSave($insert);

        if($this->isAttributeChanged('password'))
        $this->password=YII::$app->security->generatePasswordHash($this->password);

        if ($this->isNewRecord)
            $this->auth_key=YII::$app->security->generateRandomKey($length=255);

        return $return;
    }

    public function getId(){
        return $this->id;
    }

    public static function findIdentity($id){
        return static::findOne($id);
    }

    public function getAuthKey(){
        return $this->auth_key;
    }
    public function validateAuthKey($authKey){
        return $this->getAuthKey()===$authKey;
    }
    public static function findIdentityByAccessToken($token,$type=null){
        throw new NotSupportExtension(
            'You can only login by username/password pair for now.'
            );
    }
}
