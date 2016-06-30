<?php

use yii\db\Migration;

class m160630_221645_delete_old_columns extends Migration
{
    public function up()
    {
        $this->dropColumn('categories', 'menu');
        $this->dropColumn('categories', 'menu_position');
    }

    public function down()
    {
        echo "m160630_221645_delete_old_columns cannot be reverted.\n";

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
