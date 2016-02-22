<?php

use yii\db\Schema;
use yii\db\Migration;

class m160103_225125_authors extends Migration
{
    public function up()
    {
        $this->createTable('authors', [
            'id'        =>  Schema::TYPE_INTEGER.' UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'name'      =>  Schema::TYPE_STRING
        ]);

        /*foreach(\common\models\News::find()->distinct('author')->each() as $author){
            $nAuthor = new Author();
        }*/

    }

    public function down()
    {
        return $this->dropTable('authors');
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