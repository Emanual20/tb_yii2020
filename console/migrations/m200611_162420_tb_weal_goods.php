<?php

use yii\db\Migration;

/**
 * Class m200611_162420_tb_weal_goods
 */
class m200611_162420_tb_weal_goods extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
    {
		$sql = "CREATE TABLE `tb_weal_goods`  (
  `tb_wgId` int(0) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '物资编号',
  `tb_wgUser` int(0) NOT NULL COMMENT '发布者编号',
  `tb_wgType` int(0) UNSIGNED NOT NULL COMMENT '物资类型',
  `tb_wgNum` mediumint(0) UNSIGNED NULL DEFAULT NULL COMMENT '物资数量',
  `tb_wgPrice` int(0) UNSIGNED NULL DEFAULT NULL COMMENT '物资价格',
  `tb_wgRemark` text CHARACTER SET utf8mb4   NULL COMMENT '物资信息备注',
  `tb_wgAddress` varchar(255) CHARACTER SET utf8mb4   NOT NULL COMMENT '需求地址',
  PRIMARY KEY (`tb_wgId`) USING BTREE,
  INDEX `tb_wgUser`(`tb_wgUser`) USING BTREE,
  INDEX `tb_wgType`(`tb_wgType`) USING BTREE,
  CONSTRAINT `tb_weal_goods_ibfk_1` FOREIGN KEY (`tb_wgUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_weal_goods_ibfk_2` FOREIGN KEY (`tb_wgType`) REFERENCES `tb_goods_type` (`tb_gtId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4   COMMENT = '富裕物资表' ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `tb_weal_goods` VALUES (1, 1, 1, 5, 5, '救灾食品', '津湾广场12号');
INSERT INTO `tb_weal_goods` VALUES (2, 2, 2, 5, 200, '达菲', '气象台路12345号');
INSERT INTO `tb_weal_goods` VALUES (3, 1, 6, 1, 100, '漱口水', '天津市南开大学津南校区5B宿舍');";
		$this->db->createCommand($sql)->execute();
    }
	
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_weal_goods}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162420_tb_weal_goods cannot be reverted.\n";

        return false;
    }
    */
}
