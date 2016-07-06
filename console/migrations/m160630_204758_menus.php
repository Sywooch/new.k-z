<?php

use yii\db\Migration;

class m160630_204758_menus extends Migration
{
    public function up()
    {
        $this->createTable('menus', [
            'id'    =>  $this->bigPrimaryKey()->notNull()->unsigned(),
            'name'  =>  $this->string()->notNull(),
            'alias' =>  $this->string(32)->notNull()->unique(),
        ]);

        $this->createTable('menuItems', [
            'id'    =>  $this->bigPrimaryKey()->notNull()->unsigned(),
            'menuID'=>  $this->bigInteger()->notNull()->unsigned()->defaultValue(0),
            'name'  =>  $this->string()->notNull(),
            'link'  =>  $this->string(128)->notNull(),
            'linkType'  =>  $this->smallInteger()->unsigned()->notNull()->defaultValue(0)
        ]);

        $this->createIndex('link', 'menuItems', ['menuID', 'link'], true);

        $this->addForeignKey('menu', 'menuItems', 'menuID', 'menus', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('menu', 'menuItems');
        $this->dropTable('menus');
        $this->dropIndex('link', 'menuItems');
        $this->dropTable('menuItems');
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
