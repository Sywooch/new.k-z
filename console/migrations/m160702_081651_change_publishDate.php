<?php

use yii\db\Migration;

class m160702_081651_change_publishDate extends Migration
{
    public function up()
    {
        //$this->addColumn('news', 'publishTimestamp', $this->integer()->unsigned()->notNull());
        //$this->createIndex('publishTimestamp', 'news', 'publishTimestamp');

        $this->execute("UPDATE `news` SET `publishTimestamp` = UNIX_TIMESTAMP(STR_TO_DATE(`publishDate`, '%Y-%m-%d %H:%i:%s'))");
    }

    public function down()
    {
        $this->dropColumn('news', 'publishTimestamp');
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
