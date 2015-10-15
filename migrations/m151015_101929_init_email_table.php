<?php

use yii\db\Schema;
use yii\db\Migration;

class m151015_101929_init_email_table extends Migration
{
    public function up()
    {
            $this->createTable(
            'email',
            [
                'id' => 'pk',
                'purpose' => 'string',
                'address' => 'string',
                'customer_id' => 'int not null'
             ]   
            );

            $this->addForeignKey('customer_email', 'email',
            'customer_id', 'customer', 'id');
    }

    public function down()
    {
      $this->dropTable(
            'email');
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
