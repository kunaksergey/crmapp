<?php

use yii\db\Schema;
use yii\db\Migration;

class m151001_084003_init_service_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'service',
            [
                'id'=>'pk',
                'name'=>'string unique',
                'hourly_rate' => 'integer',
            ]
        );
    }

    public function down()
    {
        echo "m151001_084003_init_service_table cannot be reverted.\n";

        $this->dropTable('service');
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
