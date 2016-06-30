<?php

use yii\db\Migration;

class m160630_221041_performance_fix extends Migration
{
    public function up()
    {
        $this->createIndex('categoryID', 'news', 'categoryID');
        $this->createIndex('publishDate', 'news', 'publishDate');
        $this->createIndex('hits', 'news', 'hits');
        $this->createIndex('menuID', 'menuItems', 'menuID');
    }

    public function down()
    {
        $this->dropIndex('categoryID', 'news');
        $this->dropIndex('publishDate', 'news');
        $this->dropIndex('hits', 'news');
        $this->dropIndex('menuID', 'menuItems');
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
