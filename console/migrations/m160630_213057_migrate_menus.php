<?php

use yii\db\Migration;

class m160630_213057_migrate_menus extends Migration
{
    public function up()
    {
        $menuTypes = new \yii\db\Query();

        $menuTypes = $menuTypes->from(\Yii::$app->params['oldDb'].'.joom_menu_types')->all();

        $createdMenus = [];

        foreach($menuTypes as $type){
            $menuType = new \common\models\Menu([
               'alias'  =>  $type['menutype'] ,
               'name'   =>  $type['title'] ,
            ]);
            
            if($menuType->save()){
                $createdMenus[$menuType->alias] = $menuType;
            }
        }

        $menuItems = new \yii\db\Query();

        $menuItems = $menuItems->from(\Yii::$app->params['oldDb'].'.joom_menu')->where(['published' => 1])->all();

        foreach($menuItems as $item){
            $menuID = array_key_exists($item['menutype'], $createdMenus) ? $createdMenus[$item['menutype']]->id : 0;

            if(!empty($menuType)){
                $menuItem = new \common\models\MenuItem([
                    'menuID'    =>  $menuID,
                    'name'      =>  $item['title'],
                    'link'      =>  $item['path'],
                ]);

                $menuItem->save();
            }
        }
    }

    public function down()
    {
        \common\models\Menu::deleteAll();
        \common\models\MenuItem::deleteAll();
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
