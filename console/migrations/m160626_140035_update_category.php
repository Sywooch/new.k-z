<?php

use yii\db\Migration;

class m160626_140035_update_category extends Migration
{
    public function up()
    {
        $this->renameColumn('news', 'category', 'categoryID');
    }

    public function down()
    {
        $this->renameColumn('news', 'categoryID', 'category');
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
