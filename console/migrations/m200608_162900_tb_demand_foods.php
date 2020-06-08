<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m200608_162900_tb_demand_foods
 */
/*
*
sakura
*
*/
class m200608_162900_tb_demand_foods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_demand_foods` (
            `tb_dfId` int(5) NOT NULL COMMENT '需求编号' References tb_demand_goods(dgId),
			`tb_dfShelfLife` int(10) unsigned NOT NULL COMMENT '保质期',
			`tb_dfProDate` date NOT NULL COMMENT '生产日期',
            PRIMARY KEY (`tb_dfId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='需求食物物资表';";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO tb_demand_foods VALUES (1, 365, '2020-06-08');";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_demand_foods}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_demand_foods
        
    // }

    // public function down()
    // {
    //     echo "m200608_162900_tb_demand_foods cannot be reverted.\n";

    //     return false;
    // }
    
}
