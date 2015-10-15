<?php

use yii\db\Schema;
use yii\db\Migration;

class m151015_093650_add_predefined_users extends Migration{
   
    public function up()
    {
        foreach (
            [
                'JoeUser' => 'test',
                'AnnieManager' => 'test',
                'RobAdmin' => 'test'
            ] as $username => $password
        ) {
            $user = new \app\models\user\UserRecord();
            $user->attributes = compact('username', 'password');
            $user->save();
        }
    }

        public function down(){
            $this->delete('user');
        }

}





