<?php

use yii\db\Migration;

/**
 * Class m200611_162358_tb_demand_goods
 */
class m200611_162358_tb_demand_goods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$sql = "CREATE TABLE `tb_demand_goods`  (
  `tb_dgId` int(0) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '需求编号',
  `tb_dgUser` int(0) NOT NULL COMMENT '需求发布者',
  `tb_dgType` int(0) NOT NULL COMMENT '物资类型',
  `tb_dgNum` int(0) UNSIGNED NULL DEFAULT NULL COMMENT '物资数量',
  `tb_dgPrice` int(0) UNSIGNED NULL DEFAULT NULL COMMENT '物资价格',
  `tb_dgRemark` text CHARACTER SET utf8mb4   NULL COMMENT '物资信息备注',
  `tb_dgAddress` varchar(255) CHARACTER SET utf8mb4   NULL DEFAULT NULL COMMENT '需求地址',
  PRIMARY KEY (`tb_dgId`) USING BTREE,
  INDEX `tb_dgUser`(`tb_dgUser`) USING BTREE,
  CONSTRAINT `tb_demand_goods_ibfk_1` FOREIGN KEY (`tb_dgUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4   COMMENT = '物资需求表' ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `tb_demand_goods` VALUES (1, 1, 1, 5, 5, '统一方便面五桶（滑稽', '台湾省台北市中正区重庆南路一段122号');
INSERT INTO `tb_demand_goods` VALUES (2, 2, 2, 5, 105, '达菲', '台湾省台北市中正区重庆南路一段122号');
INSERT INTO `tb_demand_goods` VALUES (3, 1, 6, 1, 100, '漱口水', '天津市南开大学津南校区教三宿舍');";
		$this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_demand_goods}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162358_tb_demand_goods cannot be reverted.\n";

        return false;
    }
    */
}
