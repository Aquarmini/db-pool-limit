# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.30)
# Database: swoole
# Generation Time: 2020-09-18 08:04:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table a
# ------------------------------------------------------------

DROP TABLE IF EXISTS `a`;

CREATE TABLE `a` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `is_cooperate` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_display` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示,1:是,0:否',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除 1:是,0:否',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '最后更新时间',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`) USING BTREE,
  KEY `is_display` (`is_display`) USING BTREE,
  KEY `is_cooperate` (`is_cooperate`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='a表';

LOCK TABLES `a` WRITE;
/*!40000 ALTER TABLE `a` DISABLE KEYS */;

INSERT INTO `a` (`id`, `shop_name`, `pic`, `school_id`, `is_cooperate`, `is_display`, `is_open`, `is_delete`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(2,'店铺名称2','http://www.baidu.com',316,1,1,1,1,'2017-11-25 09:48:36','2020-09-09 11:29:25','2017-11-25 16:57:15'),
	(3,'店铺名称4','http://www.baidu.com',316,1,1,1,1,'2017-11-25 14:50:36','2020-09-09 11:29:25','2017-12-21 11:50:46');

/*!40000 ALTER TABLE `a` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table b
# ------------------------------------------------------------

DROP TABLE IF EXISTS `b`;

CREATE TABLE `b` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `shop_id` int(10) unsigned NOT NULL,
  `school_id` int(10) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `order_num` int(5) DEFAULT '0',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除 1:是,0:否',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  KEY `shop_id` (`shop_id`,`school_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='B表';

LOCK TABLES `b` WRITE;
/*!40000 ALTER TABLE `b` DISABLE KEYS */;

INSERT INTO `b` (`id`, `shop_id`, `school_id`, `uid`, `order_num`, `is_delete`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(3,219,1899,1287255,1,0,'2019-08-13 17:28:39','2019-08-13 17:28:39',NULL),
	(4,219,1899,2011129,2,0,'2019-08-13 17:28:40','2019-08-13 17:28:40',NULL),
	(5,219,1899,2250228,1,0,'2019-08-13 17:28:40','2019-08-13 17:28:40',NULL),
	(6,219,1899,3093271,1,0,'2019-08-13 17:28:40','2019-08-13 17:28:40',NULL);

/*!40000 ALTER TABLE `b` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
