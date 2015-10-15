<?php

use yii\db\Schema;
use yii\db\Migration;

class m151005_095116_init_user_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'user',
            [
            'id'=>'pk',
            'username'=>'string UNIQUE',
            'password'=>'string'
            ]
            );
    }

    public function down()
    {
        echo "m151005_095116_init_user_table cannot be reverted.\n";
        $this->dropTable('user');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
