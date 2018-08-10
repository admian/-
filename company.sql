# Host: localhost  (Version: 5.5.38)
# Date: 2016-11-07 10:39:15
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "message"
#

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `messageID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `writeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "message"
#

/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'hello，你好！','不管他发你的的构建呢呀黑眼睛你已经呢也诺基亚蒙努，诽谤他人合议庭都会有赫赫特','辅导报告','0000-00-00 00:00:00',5),(2,'大过节的','看到他愉快愉快uykr6','一句','0000-00-00 00:00:00',1),(3,'php','你好,时间','大约','2016-11-02 16:00:27',1),(4,'php','你好','大禹','2016-11-02 16:00:30',1),(5,'php','时间','地方','2016-11-02 16:00:30',0),(6,'js','更合理','风风光光','2016-11-02 16:00:30',0),(7,'php','你好,时间','德怀特','2016-11-02 16:00:31',0),(8,'html','你好,时间','规划','2016-11-02 16:00:32',2),(9,'ps','你好,时间','好家伙','2016-11-02 16:00:32',0),(10,'php','你好,时间','韩国','2016-11-02 16:00:32',0),(12,'php','你好,时间','规','2016-11-02 16:00:33',1);
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

#
# Structure for table "news"
#

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(400) NOT NULL,
  `writeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`newsID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "news"
#

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'MP4关注度排行TOP10','因学校有重大事故，导致停课数日，上课时间另行通知。。。。。。。','2016-10-26 13:44:20'),(2,'迎中兴金鸡湖花园开盘，大型团装团购征集样板房活动','辅导和不同贷款挺好五个月如果我不提供服务更好投入和国外有同居年纪，通忧共患问，好呢，好业应该让他的话让他如何。。。。。。。。。。。。','2016-10-26 13:45:55'),(3,'公司全面实施国际质量管理和质量保证体系','的问题供热半夜它还能你认识更加能提高认识还不如使用黑白人生不认识他高耗能好男人也是不认识让你很实用不认识他别人告诉认识','2016-10-26 13:51:47'),(4,'合家团圆必要条件而人家哪有还那样','听人说过v刹不会让身体让他过年好认识过氧化钠如果还能','2016-10-26 13:52:13'),(5,'油价上涨激发勘探业石油钻探设备出','给你还特意他很难统一塔纳特通用技能也挺他也没能他也即可他也即可一天人太多时间任天津体育任天津人事单位是公会积分高级回复过房价和研究开发个人','2016-10-26 13:52:25'),(6,'油价上涨激发勘探业石油钻探设备出','家具一系列产业政策的贯彻实施，得到广大防水企业的积极响应，对我国防水行业调整产业结构、实施宏观调控、推广新型防水材料、打击假冒伪劣产品、规范防水市场和推动行业技术进步，引导行业健康发展起到了有力的促进作用。（1）行业的工艺装备水平普遍提高。年产500万平方米能力改性沥青防水卷材生产线不断增多，性能更好的三元乙丙防水卷材加长硫化罐已投入运行。（2）推广应用产品明显增长，生产技术明显提高，产品结构明显改善。SBS/APP改性沥青防水卷材、高分子防水卷材、中高档防水涂料均持续增长，中高档建筑密封材料大幅度增长。（3）落实限制使用产品和技术政策有突破性进展。规范聚乙烯丙纶防水卷材生产和应用，适时开发和推广环保型防水材料等显见成效。（4）禁止使用产品和技术的政策在不同范围和程度上得到落实。淘汰年产100万卷能力石油沥青纸胎油毡生产线、煤焦油基防水涂料和密封材料等的规定都得到较好的贯彻，二次成型聚乙烯','2016-10-26 13:44:20'),(7,'涨激发勘探业石油钻探设备出口激增','公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系','2016-10-31 11:25:32'),(8,'公司全面实施国际质量管理和质量保证体系','公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系公司全面实施国际质量管理和质量保证体系','2016-10-31 11:26:00'),(9,'迎中兴金鸡湖花园开盘，大型团装团购征集样板房活动','迎中兴金鸡湖花园开盘，大型团装团购征集样板房活动迎中兴金鸡湖花园开盘，大型团装团购征集样板房活动迎中兴金鸡湖花园开盘，大型团装团购征集样板房活动迎中兴金鸡湖花园开盘，大型团装团购征集样板房活动迎中兴金鸡湖花园开盘，大型团装团购征集样板房活动','2016-10-31 11:26:29'),(10,'MP4关注度排行TOP10','黄金周过后，很多行业都要盘点一下自己的销售业绩，虽然MP4现在还不属于大众消费品，但是也不能例外。十一期间购买MP4作为出游装备或者过节礼品的情况让这个市场也升温了不少，这也导致MP4关注排行的TOP 10名次有了不小变化。','2016-11-03 16:53:16');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

#
# Structure for table "product"
#

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `serialNumber` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `prcture` varchar(20) DEFAULT NULL,
  `description` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "product"
#

/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'1060991967','东风A60专用DVD导航仪','sghb','rts',100,'5300c8cb76417.jpg','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(2,'1060991965','爱国者蓝牙后视镜行车记录仪','trhhgstr','rshrt',124,'5300c62e98968.jpg','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(3,'1060991969','惠普HP F310行车记录仪 极地白','tyj','7y6iu67ik',124,'5300c83ab71b0.jpg','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(4,'1060991968','惠普HP F310行车记录仪 极地白','24hgfjj','jyhfjk',450,'5300c769af79e.jpg','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(5,'1060991968','任我游 N568 行车记录仪任我游 N5','hgckmjh','fdhgf',123,'5300cd8b487ab.jpg','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(6,'1060991966','钢铁侠DK-680A车载行车记录仪','dyhk','gdhcmkjh',345,'5300c942ec82e.jpg','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(7,'1060991964','任我游 N568 行车记录仪','vbmnfh,','hnmfhfvnmv',467,'5300ca7e29f63.jpg','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(8,'1060991962','PAPAGO行车记录仪1080P全高清','hgcmcvjhn,','jhc,mjh,',345,'5300c196f0537.png','PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广'),(9,'1060991960','PAPAGO行车记录仪1080P全高清','gffhfgh','xhjgfjn',356,'5300c3850b71b.jpg','    PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广    '),(10,'moto_1','moto_1-1','moto','moto101',900,'5300c942ec82e.jpg','    motomotomoto    ');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

#
# Structure for table "revert"
#

DROP TABLE IF EXISTS `revert`;
CREATE TABLE `revert` (
  `revertID` int(11) NOT NULL AUTO_INCREMENT,
  `messageID` int(11) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `writer` varchar(20) DEFAULT NULL,
  `writeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`revertID`),
  KEY `messageID` (`messageID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

#
# Data for table "revert"
#

/*!40000 ALTER TABLE `revert` DISABLE KEYS */;
INSERT INTO `revert` VALUES (1,1,'你好，时间','时间','2016-11-01 00:00:00'),(2,1,'你好，你好','你好','2016-11-02 14:36:18'),(8,2,'啊啊啊啊','阿三','2016-11-03 00:00:00'),(10,1,'过','过','2016-11-03 10:05:23'),(11,1,'啊啊啊啊啊','啊啊啊','2016-11-03 10:06:29'),(12,1,'啊啊啊啊','啊啊啊啊','2016-11-03 13:50:18'),(13,8,'啊啊啊啊啊啊啊啊啊啊啊','    智障','2016-11-03 13:58:23'),(14,12,'把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给把儿童保护不会突然阿娇金屋方式饿啊给','阿斯顿','2016-11-03 14:50:17'),(23,2,'去','去','2016-11-03 15:53:42'),(24,3,'大猫大猫大猫','大猫','2016-11-03 16:31:40'),(25,8,'鹅鹅鹅','鹅鹅鹅','2016-11-03 16:46:59'),(26,8,'通天塔','通天塔','2016-11-03 16:49:25'),(27,4,'他如今已研究院','他就看地图','2016-11-03 17:11:29'),(28,3,'earhytr','gahg','2016-11-07 08:49:17'),(29,14,'加油！大学！','大学','2016-11-07 09:27:13');
/*!40000 ALTER TABLE `revert` ENABLE KEYS */;

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "users"
#

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin',3),(3,'aaaaa','aaaa',2),(4,'cccc','cccc',2),(5,'bbbb','bbbb',2),(6,'大大','bbbbb',2),(11,'sb','hgfjg',1),(12,'adad','adad',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
