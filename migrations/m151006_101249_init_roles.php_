<?php

use yii\db\Schema;
use yii\db\Migration;
//use YII;

class m151006_101249_init_roles extends Migration
{
    public function up()
    {

    $rbac = \Yii::$app->authManager;    
    $guest = $rbac->createRole('guest');
    $guest->description = 'Nobody';
    $rbac->add($guest);
    $user = $rbac->createRole('user');
    $user->description = 'Саn use the query UI and nothing else';
    $rbac->add($user);

    $manager = $rbac->createRole('manager');
    $manager->description = 'Саn manage. entities in database, but not
users';
    $rbac->add($manager);

    $admin = $rbac->createRole('admin');
    $admin->description = 'Саn do anything including managing users';
    $rbac->add($admin);

$rbac->addChild($admin, $manager);
$rbac->addChild($manager, $user);
$rbac->addChild($user, $guest);
$rbac->assign(
$user,
\app\models\user\UserRecord::findOne(['username' => 'JoeUser'])->id);

$rbac->assign(
    $manager,
\app\models\user\UserRecord::findOne(['username' =>'AnnieManager'])->id);

$rbac->assign(
$admin,
\app\models\user\UserRecord::findOne(['username' =>'RobAdmin'])->id) ;
    }

    public function down()
    {
      $manager = \Yii::$app->authManager;
      $manager->removeAll;
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
