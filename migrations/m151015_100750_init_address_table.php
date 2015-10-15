<?php

use yii\db\Schema;
use yii\db\Migration;

class m151015_100750_init_address_table extends Migration
{
    public function up()
    {
        $this->createTable(
                     'address',
                     [
                     'id' =>'pk',
                    'purpose' => 'string',
                    'country' => 'string',
                    'state' => 'string',
                    'city' => 'string',
                    'street' => 'string',
                    'building' => 'string',
                    'apartment' => 'string',
                    'receiver_name' => 'string',
                    'postal_code' => 'string',
                    'customer_id' => 'int not null'
                    ]
                    );
    }

    public function down()
        {
            $this->dropTable('address');
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
