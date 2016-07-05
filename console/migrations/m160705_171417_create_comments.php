<?php

use yii\db\Migration;

/**
 * Handles the creation for table `comments`.
 */
class m160705_171417_create_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id'        =>  $this->primaryKey(),
            'author'    =>  $this->string(96),
            'authorName'=>  $this->string(64),
            'text'      =>  $this->text(),
            'published' =>  $this->smallInteger()->unsigned()->notNull()->defaultValue(0),
            'date'      =>  $this->timestamp(),
            'ip'        =>  $this->integer(10)
        ]);

        $this->createIndex('author', 'comments', 'author');
        $this->createIndex('published', 'comments', 'published');
        $this->createIndex('date', 'comments', 'date');
        $this->createIndex('ip', 'comments', 'published');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}
