<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m200608_162903_tb_weal_living_supplies
 */
/*
*
sakura
*
*/
class m200608_162903_tb_weal_living_supplies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_weal_living_supplies` (
            `tb_wlsId` int(10) NOT NULL COMMENT '物资编号' References tb_weal_goods(wgId),
			`tb_wlsIsNew` int(4) unsigned NOT NULL COMMENT '新旧程度',
            PRIMARY KEY (`tb_wlsId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='需求生活物资表';";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO tb_weal_living_supplies VALUES (3, 9);";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_weal_living_supplies}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_weal_living_supplies
        
    // }

    // public function down()
    // {
    //     echo "m200608_162903_tb_weal_living_supplies cannot be reverted.\n";

    //     return false;
    // }
    
}
