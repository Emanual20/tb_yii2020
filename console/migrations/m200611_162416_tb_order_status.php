<?php

use yii\db\Migration;

/**
 * Class m200611_162416_tb_order_status
 */
class m200611_162416_tb_order_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$sql = "CREATE TABLE `tb_order_status`  (
  `tb_osId` int(0) NOT NULL COMMENT '订单状态编号',
  `tb_osRemark` varchar(255) CHARACTER SET utf8mb4   NOT NULL COMMENT '订单状态名称',
  PRIMARY KEY (`tb_osId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4   COMMENT = '订单状态名称对应表' ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `tb_order_status` VALUES (1, '进行中');
INSERT INTO `tb_order_status` VALUES (2, '未支付');
INSERT INTO `tb_order_status` VALUES (3, '已支付');
INSERT INTO `tb_order_status` VALUES (4, '未发货');
INSERT INTO `tb_order_status` VALUES (5, '已发货');
INSERT INTO `tb_order_status` VALUES (6, '已完成');";
		$this->db->createCommand($sql)->execute();
    }
	
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_order_status}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162416_tb_order_status cannot be reverted.\n";

        return false;
    }
    */
}
