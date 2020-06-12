<?php

use yii\db\Migration;

/**
 * Class m200611_162423_tb_orders
 */
class m200611_162423_tb_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$sql = "CREATE TABLE `tb_orders`  (
  `tb_oId` int(0) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '订单编号',
  `tb_oSellId` int(0) UNSIGNED NOT NULL COMMENT '订单卖方需求编号',
  `tb_oBuyId` int(0) UNSIGNED NOT NULL COMMENT '订单买方需求编号',
  `tb_ostatus` int(0) NOT NULL COMMENT '订单状态',
  PRIMARY KEY (`tb_oId`) USING BTREE,
  INDEX `tb_orders_ibfk_1`(`tb_ostatus`) USING BTREE,
  INDEX `tb_oBuyId`(`tb_oBuyId`) USING BTREE,
  INDEX `tb_oSellId`(`tb_oSellId`) USING BTREE,
  CONSTRAINT `tb_orders_ibfk_1` FOREIGN KEY (`tb_ostatus`) REFERENCES `tb_order_status` (`tb_osId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_orders_ibfk_2` FOREIGN KEY (`tb_oBuyId`) REFERENCES `tb_demand_goods` (`tb_dgId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_orders_ibfk_3` FOREIGN KEY (`tb_oSellId`) REFERENCES `tb_weal_goods` (`tb_wgId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4   COMMENT = '订单表' ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `tb_orders` VALUES (8, 1, 1, 2);";
		$this->db->createCommand($sql)->execute();
    }
	
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_orders}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162423_tb_orders cannot be reverted.\n";

        return false;
    }
    */
}
