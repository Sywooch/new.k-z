<?php

use yii\db\Schema;
use yii\db\Migration;

class m151125_214942_news_category extends Migration
{
    public function up()
    {
        $this->addColumn('news', 'category', Schema::TYPE_INTEGER.' UNSIGNED NOT NULL DEFAULT 0');
    }

    public function down()
    {
        $this->dropColumn('news', 'category');

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
