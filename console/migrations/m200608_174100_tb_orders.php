<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m200608_174100_tb_orders
 */
/*
*
sakura
*
*/
class m200608_174100_tb_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_orders` (
            `tb_oId` int(5) NOT NULL AUTO_INCREMENT COMMENT '订单编号',
			`tb_oSellId` int(5) NOT NULL COMMENT '订单卖方需求编号' REFERENCES tb_weal_goods(tb_wgId),
			`tb_oBuyId` int(5) NOT NULL COMMENT '订单买方需求编号' REFERENCES tb_demand_goods(tb_dgId),
			`tb_ostatus` int(5) NOT NULL COMMENT '订单状态' REFERENCES tb_order_status(tb_osId),
            PRIMARY KEY (`tb_oId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='订单表';";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_orders}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_orders
        
    // }

    // public function down()
    // {
    //     echo "m200608_174100_tb_orders cannot be reverted.\n";

    //     return false;
    // }
    
}
