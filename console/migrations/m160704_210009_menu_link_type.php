<?php

use yii\db\Migration;

class m160704_210009_menu_link_type extends Migration
{
    public function up()
    {
        $this->addColumn(\common\models\MenuItem::tableName(), 'linkType', $this->smallInteger()->unsigned()->notNull()->defaultValue(0));

        \common\models\MenuItem::updateAll(['linkType' => \common\models\MenuItem::LINK_TYPE_LINK]);
    }

    public function down()
    {
        $this->dropColumn(\common\models\MenuItem::tableName(), 'linkType');
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
