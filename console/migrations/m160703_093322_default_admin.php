<?php

use yii\db\Migration;

class m160703_093322_default_admin extends Migration
{
    public function up()
    {
        $admin = new \backend\models\Siteuser([
            'username'  =>  'admin',
            'auth_key'  =>  '',
            'email'     =>  '',
            'updated_at'     =>  '',
        ]);

        $admin->setPassword('defaultPassword');

        $admin->save(false);
    }

    public function down()
    {
        echo "m160703_093322_default_admin cannot be reverted.\n";

        return false;
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
