<?php

use yii\db\Migration;

/**
 * Class m200611_162346_tb_bulletinboard
 */
class m200611_162346_tb_bulletinboard extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$sql = "CREATE TABLE `tb_bulletinboard`  (
  `tb_bId` int(0) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '公告编号',
  `tb_bContent` text CHARACTER SET utf8mb4   NULL COMMENT '公告内容',
  `tb_bUserid` int(0) NULL DEFAULT NULL COMMENT '公告发布者',
  `tb_bPosttime` datetime(0) NOT NULL COMMENT '公告发布时间',
  PRIMARY KEY (`tb_bId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4   COMMENT = '公告表' ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `tb_bulletinboard` VALUES (1, '浙江温州浙江温州江南皮革厂倒闭啦', 1811425, '2020-06-07 21:41:00');
INSERT INTO `tb_bulletinboard` VALUES (2, '窝窝头一块钱四个嘿嘿', 1811425, '2020-06-07 21:41:01');
INSERT INTO `tb_bulletinboard` VALUES (3, 'WOW熔火之心副本大螺丝掉落武器概率翻倍', 9999999, '2010-10-10 10:10:10');
INSERT INTO `tb_bulletinboard` VALUES (4, '受疫情影响，众多地区发生医疗物资匮乏现象，在疫情中心武汉此类现象则是更为广泛，请各位朋友互相帮助', 1811425, '2020-04-02 10:00:00');
INSERT INTO `tb_bulletinboard` VALUES (5, '受疫情影响，众多地区发生生活物资匮乏现象，美国疫情风暴的中心纽约更是上演了超市抢购', 1811425, '2020-05-22 18:00:00');
INSERT INTO `tb_bulletinboard` VALUES (6, '炉石传说新版本纳克萨玛斯即将上线', 1428577, '2018-05-10 02:00:00');";
		$this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_bulletinboard}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162346_tb_bulletinboard cannot be reverted.\n";

        return false;
    }
    */
}
