<?php

use yii\db\Schema;
use yii\db\Migration;

class m151124_222808_initial extends Migration
{
    public function up()
    {
        $this->createTable('users_data', [
            'id'    =>  Schema::TYPE_INTEGER.' UNSIGNED PRIMARY KEY',
            'name'  =>  Schema::TYPE_TEXT.' DEFAULT NULL'
        ]);

        $this->createTable('news', [
            'id'        =>  Schema::TYPE_BIGINT.' UNSIGNED PRIMARY KEY AUTO_INCREMENT',
            'author'    =>  Schema::TYPE_INTEGER.' UNSIGNED NOT NULL',
            'title'     =>  Schema::TYPE_TEXT,
            'text'      =>  Schema::TYPE_TEXT,
            'link'      =>  Schema::TYPE_STRING.' DEFAULT NULL',
            'image'     =>  Schema::TYPE_STRING.' DEFAULT NULL',
            'published' =>  Schema::TYPE_SMALLINT.' UNSIGNED DEFAULT 0',
            'deleted'   =>  Schema::TYPE_SMALLINT.' UNSIGNED DEFAULT 0',
            'publishDate' =>  Schema::TYPE_DATETIME,
            'favorite'  =>  Schema::TYPE_SMALLINT.' UNSIGNED DEFAULT 0',
            'hits'      =>  Schema::TYPE_BIGINT.' UNSIGNED DEFAULT 0',
            'meta_description'=>  Schema::TYPE_TEXT,
            'meta_keywords'=>  Schema::TYPE_TEXT,
        ]);

        $this->createTable('categories', [
            'id'        =>  Schema::TYPE_BIGINT.' UNSIGNED PRIMARY KEY AUTO_INCREMENT',
            'link'      =>  Schema::TYPE_STRING.' NOT NULL',
            'title'     =>  Schema::TYPE_TEXT,
            'parent'    =>  Schema::TYPE_INTEGER.' UNSIGNED DEFAULT 0',
            'menu'      =>  Schema::TYPE_SMALLINT.' UNSIGNED DEFAULT 0',
            'menu_position'=>  Schema::TYPE_SMALLINT.' UNSIGNED DEFAULT 0',
            'created'   =>  Schema::TYPE_DATETIME.' NOT NULL',
            'created_user'   =>  Schema::TYPE_INTEGER.' UNSIGNED NOT NULL',
            'meta_description'=>  Schema::TYPE_TEXT,
            'meta_keywords'=>  Schema::TYPE_TEXT,
            'deleted'   =>  Schema::TYPE_SMALLINT.' UNSIGNED DEFAULT 0',
        ]);

        $this->createTable('ads', [
            'id'        =>  Schema::TYPE_BIGINT.' UNSIGNED PRIMARY KEY AUTO_INCREMENT',
            'code'      =>  Schema::TYPE_TEXT,
            'create_date'=> Schema::TYPE_DATETIME.' NOT NULL',
            'disable_date'=>Schema::TYPE_DATETIME.' NOT NULL',
            'name'      =>  Schema::TYPE_STRING.' NOT NULL',
            'position'  =>  Schema::TYPE_INTEGER.' DEFAULT 0',
            'state'     =>  Schema::TYPE_INTEGER.' DEFAULT 0',
        ]);
    }

    public function down()
    {
        $this->dropTable('users_data');
        $this->dropTable('news');
        $this->dropTable('categories');
        $this->dropTable('ads');
        return true;
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
