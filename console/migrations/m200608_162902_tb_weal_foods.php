<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m200608_162902_tb_weal_foods
 */
/*
*
sakura
*
*/
class m200608_162902_tb_weal_foods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_weal_foods` (
            `tb_wfId` int(5) NOT NULL COMMENT '物资编号' References tb_weal_goods(wgId),
			`tb_wfShelfLife` int(10) unsigned NOT NULL COMMENT '保质期',
			`tb_wfProDate` date NOT NULL COMMENT '生产日期',
            PRIMARY KEY (`tb_wfId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='富裕食物物资表';";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO tb_weal_foods VALUES (1, 15, '2020-06-01');";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_weal_foods}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_weal_foods
        
    // }

    // public function down()
    // {
    //     echo "m200608_162902_tb_weal_foods cannot be reverted.\n";

    //     return false;
    // }
    
}
