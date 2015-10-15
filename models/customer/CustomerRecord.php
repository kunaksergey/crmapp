<?php
namespace app\models\customer;
use yii\db\ActiveRecord;
use app\models\customer\PhoneRecord;
use app\models\customer\EmailRecord;
use app\models\customer\AddressRecord;
class CustomerRecord extends ActiveRecord{
	
	public static function tableName()
    {
        return 'customer';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            ['name', 'required'],
            ['name', 'string', 'max' => 256],
            ['birth_date', 'date', 'format' => 'yyyy-MM-dd'],
            ['notes', 'safe']
        ];
    }
    public function getPhones(){
        return $this->hasMany(PhoneRecord::className(),['customer_id'=>'id']);
    }

    public function getAddresses(){
        return $this->hasMany(AddressRecord::className(),['customer_id'=>'id']);
    }

     public function getEmails(){
        return $this->hasMany(EmailRecord::className(),['customer_id'=>'id']);
    }
}
