<?php

use yii\db\Migration;

class m160707_051650_change_comments extends Migration
{
    public function up()
    {
        $this->addColumn('comments', 'isGood', $this->integer()->unsigned()->notNull()->defaultValue(0));
        $this->addColumn('comments', 'isBad', $this->integer()->unsigned()->notNull()->defaultValue(0));
        $this->addColumn('comments', 'deleted', $this->boolean());
        $this->addColumn('comments', 'email', $this->string(128));

        $this->alterColumn('comments', 'ip', $this->bigInteger()->notNull()->defaultValue(0));

        $this->dropColumn('comments', 'author');
        $this->renameColumn('comments', 'authorName', 'author');
    }

    public function down()
    {
        $this->dropColumn('comments', 'isGood');
        $this->dropColumn('comments', 'isBad');
        $this->dropColumn('comments', 'deleted');
        $this->dropColumn('comments', 'email');

        $this->renameColumn('comments', 'author', 'authorName');
        $this->addColumn('comments', 'author', $this->integer()->unsigned()->notNull()->defaultValue(0));
        
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
