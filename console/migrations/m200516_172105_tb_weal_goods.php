<?php

use yii\db\Migration;
/*
*
yoko2001
*
*/
/**
 * Class m200516_172105_tb_weal_goods
 */
class m200516_172105_tb_weal_goods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_weal_goods` (
            `tb_wgId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '物资编号',
            `tb_wgUser` mediumint(9) NOT NULL COMMENT '发布者编号',
            `tb_wgName` varchar(40) NOT NULL COMMENT '物资名称',
            `tb_wgNum` mediumint(8) unsigned DEFAULT NULL COMMENT '物资数量',
            `tb_wgPrice` int(10) unsigned DEFAULT NULL COMMENT '物资价格',
            `tb_wgRemark` text DEFAULT NULL COMMENT '物资信息备注',
            `tb_wgAddress` varchar(127) NOT NULL COMMENT '需求地址',
            PRIMARY KEY (`tb_wgId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='富裕物资表';";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO tb_weal_goods VALUES (DEFAULT, 0, '食品', 5, 5, '救灾食品', '津湾广场12号'),
                                                   (DEFAULT, 0, '药品', 5, 200, '达菲', '气象台路12345号');";
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
        echo "m200516_172105_tb_weal_goods cannot be reverted.\n";

        return false;
    }
    */
}
