<?php

use yii\db\Migration;

class m160706_055548_comment_newsID extends Migration
{
    public function up()
    {
        $this->addColumn('comments', 'newsID', $this->integer()->unsigned()->notNull()->defaultValue(0));

        $this->createIndex('newsID', 'comments', 'newsID');
    }

    public function down()
    {
        $this->dropColumn('comments', 'newsID');
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
