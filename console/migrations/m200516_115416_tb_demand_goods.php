<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m200516_115416_tb_demand_goods
 */
/*
*
yoko2001
*
*/
class m200516_115416_tb_demand_goods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_demand_goods` (
            `tb_dgId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '需求编号',
            `tb_dgUser` mediumint(9) NOT NULL COMMENT '需求发布者',
            `tb_dgType` varchar(40) NOT NULL COMMENT '物资类型',
            `tb_dgNum` mediumint(8) unsigned DEFAULT NULL COMMENT '物资数量',
            `tb_dgPrice` int(10) unsigned DEFAULT NULL COMMENT '物资价格',
            `tb_dgRemark` text DEFAULT NULL COMMENT '物资信息备注',
            `tb_dgAddress` varchar(127) NOT NULL COMMENT '需求地址',
            PRIMARY KEY (`tb_dgId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='物资需求表';";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO tb_demand_goods VALUES (DEFAULT, 1811349, '食品', 5, 5, '统一方便面五桶（滑稽', '台湾省台北市中正区重庆南路一段122号'),
                                                   (DEFAULT, 1811349, '药品', 5, 105, '达菲', '台湾省台北市中正区重庆南路一段122号');";
        $this->db->createCommand($sql)->execute();
        // $this->createTable('tb_demand_goods', 7, [
        //     'tb_dgId' => ' int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT \'需求编号\'',
        //     'tb_dgUser' =>' mediumint(9) NOT NULL COMMENT \'需求发布者\'',
        //     'tb_dgType' => 'varchar(40) NOT NULL COMMENT \'物资类型\'',
        //     'tb_dgNum' => '(8) unsigned DEFAULT NULL COMMENT \'物资数量\'',
        //     'tb_dgPrice' => 'int(10) unsigned DEFAULT NULL COMMENT \'物资价格\'',
        //     'tb_dgRemark' => 'text DEFAULT NULL COMMENT \'物资信息备注\'',
        //     'tb_dgAddress' => 'varchar(127) NOT NULL COMMENT \'需求地址\'',
        //     'tb_dgAddress' =>  'varchar(127) NOT NULL COMMENT \'需求地址\''
        // ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_demand_goods}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_demand_goods
        
    // }

    // public function down()
    // {
    //     echo "m200516_115416_tb_demand_goods cannot be reverted.\n";

    //     return false;
    // }
    
}
