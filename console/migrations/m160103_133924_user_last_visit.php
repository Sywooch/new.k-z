<?php

use yii\db\Schema;
use yii\db\Migration;

class m160103_133924_user_last_visit extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'last_visit', Schema::TYPE_BIGINT.' UNSIGNED NOT NULL DEFAULT 0');
    }

    public function down()
    {
        echo "m160103_133924_user_last_visit cannot be reverted.\n";

        return true;
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
