<?php

use yii\db\Schema;
use yii\db\Migration;

class m151125_215158_category_published extends Migration
{
    public function up()
    {
        $this->addColumn('categories', 'published', Schema::TYPE_SMALLINT.' UNSIGNED NOT NULL DEFAULT 0');
    }

    public function down()
    {
        return $this->dropColumn('categories', 'published');
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
