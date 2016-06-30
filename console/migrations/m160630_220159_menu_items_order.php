<?php

use yii\db\Migration;

class m160630_220159_menu_items_order extends Migration
{
    public function up()
    {
        $this->addColumn('menuItems', 'order', $this->integer()->unsigned()->notNull()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('menuItems', 'order');
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
