<?php

use yii\db\Migration;

/**
 * Handles the creation for table `newsFeeds`.
 */
class m160701_080804_create_newsFeeds extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('newsFeeds', [
            'id'            =>  $this->primaryKey(),
            'name'          =>  $this->string()->notNull(),
            'link'          =>  $this->string(128)->notNull(),
            'params'        =>  $this->text(),
            'description'   =>  $this->text(),
            'published'     =>  $this->boolean()->unsigned()->notNull()->defaultValue(0),
            'created'       =>  $this->dateTime()->notNull(),
            'categories'    =>  $this->text(),
            'articles'      =>  $this->text()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('newsFeeds');
    }
}
