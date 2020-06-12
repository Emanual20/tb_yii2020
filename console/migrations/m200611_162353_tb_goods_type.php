<?php

use yii\db\Migration;

/**
 * Class m200611_162353_tb_goods_type
 */
class m200611_162353_tb_goods_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$sql = "CREATE TABLE `tb_goods_type`  (
  `tb_gtId` int(0) UNSIGNED NOT NULL COMMENT 'wuzi',
  `tb_gtName` varchar(100) CHARACTER SET utf8mb4   NOT NULL COMMENT 'temp',
  PRIMARY KEY (`tb_gtId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4   COMMENT = '物资类别表' ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `tb_goods_type` VALUES (1, '食品');
INSERT INTO `tb_goods_type` VALUES (2, '药品(处方药)');
INSERT INTO `tb_goods_type` VALUES (3, '药品(非处方药)');
INSERT INTO `tb_goods_type` VALUES (4, '医疗用品(耗材)');
INSERT INTO `tb_goods_type` VALUES (5, '个人防护用品');
INSERT INTO `tb_goods_type` VALUES (6, '生活用品');
INSERT INTO `tb_goods_type` VALUES (7, '其他');";
		$this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_goods_type}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162353_tb_goods_type cannot be reverted.\n";

        return false;
    }
    */
}
