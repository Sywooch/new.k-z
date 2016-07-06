<?php

use yii\db\Migration;

/**
 * Handles the creation for table `imageslist`.
 */
class m160706_054037_create_imagesList extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('images', [
            'id'        =>  $this->primaryKey(),
            'newsID'    =>  $this->integer()->unsigned()->notNull()->defaultValue(0),
            'userID'    =>  $this->integer()->unsigned()->notNull()->defaultValue(0),
            'date'      =>  $this->integer()->unsigned()->notNull()->defaultValue(0),
            'description'=> $this->string(),
            'link'      =>  $this->string(128),
        ]);

        //$this->createIndex('link', 'images')
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('images');
    }
}
