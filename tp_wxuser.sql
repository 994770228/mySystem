/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : tpadmin

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-10-09 13:46:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_wxuser
-- ----------------------------
DROP TABLE IF EXISTS `tp_wxuser`;
CREATE TABLE `tp_wxuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `mobile` varchar(11) DEFAULT NULL COMMENT '注册时填写的手机号码',
  `name` varchar(30) DEFAULT NULL COMMENT '注册时的姓名',
  `openid` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '网页内获取的用户openid',
  `nickname` varchar(30) DEFAULT NULL COMMENT '用户的昵称',
  `imgurl` varchar(500) CHARACTER SET utf8 DEFAULT NULL COMMENT '用户的头像url',
  `sex` int(1) DEFAULT NULL COMMENT '性别，值为1时是男性，值为2时是女性，值为0时是未知',
  `province` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '用户个人资料填写的省份',
  `city` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '普通用户个人资料填写的城市',
  `country` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '国家，如中国为CN',
  `createtime` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `openid` (`openid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tp_wxuser
-- ----------------------------
INSERT INTO `tp_wxuser` VALUES ('39', '13456567878', '李璐', 'o-AOIwu5Wy_JyYxcCjLkfeFAOOmw', 'ﺭ并亲了你一口ﺭ康康', 'ibLButGMnqJPquHAl0NWUYTjmcJuX7XeuIML6p2AyF5wsHa6R3mDgJbqpEdr2lAy1cPJvl03a1lvuiaSlFlCXqicXabfdYHFCRg/0', '1', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('40', '13423456765', '张华', 'o-AOIwrb2aYtQUfwaNjNXKw9bY90', '刚好遇见你', 'g28L8h572kBssQotCDkhsoUQ7WmmxPiaMCickXGZmEciboNniaZ6iaBKyHfFqdHjwsk7GF9ISVBPFHyD2EK9A6kl7CU5JMW8wOX5E/0', '1', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('41', '13656789876', '临沂', 'o-AOIwlZC6cdr3cjDXCaZkMQ9LDA', '洋葱妹苹果', 'g28L8h572kB78x4vQmlw4zy4SFWMwMAMwbquN3PeV0LxkzriaXkOmib9I2O8dEHDiaibFk8eV25nZmcGOujzUdysP5lqXErFzqwK/0', '2', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('43', '13222445656', '孙总', 'o-AOIwjZkzDc2_fQ4KMCdqSBWt6E', '乐鹏', 'g28L8h572kBssQotCDkhsiaaO8wfnl88MOO0f4VT9ZIRyofkH4GBA65D6fzbLY2cEOB9z8jQEfsgiaRSkEbdaagXlo4D7f6HGM/0', '1', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('53', '18325679854', '王鑫', 'o-AOIwsPxyF6grvlQ3srSL0auc-U', '祁小仙', 'ajNVdqHZLLDgpPZUOA1u4rvezHTH52ibCYUrlK1Kj8Bawzcp8g2ibjddabuj6XDmVTpP0oicf9TUzXBbqrHueZ6mg/0', '2', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('54', null, null, 'o-AOIwn-yeRL_u3mkJUJBQpf3j5o', '朱仁派', 'PiajxSqBRaEJzlJxasqwTJpQKuULH0Gv4OdsfrW7eMvibVng2uc9z47srBHibk9mAibxBYZhz3MceDhaVRVGcNgQDA/0', '1', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('55', '15625541256', '周四', 'o-AOIwiXxX_7XQ1xM0_gLEH-TAKY', '孙健', 'ZgNOvxl6zrWhXamknqJ3GVQ7DH3FzLJH8rroPeRlc1gppicEhSy9cXoPBnA5AWIS2Z2TVRljIP7iclWic5RpCuGvTDOlibh0HNWB/0', '1', '江苏', '扬州', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('56', '13621656786', '李二', 'o-AOIwjlXvhFRsF3pYWTVGOgldhU', '踏雪寻梅', 'g28L8h572kBssQotCDkhsuATXfAbPYGFBHa4cBgP6Q9xLsnOLiaSBA6IReKxYWT1icicZz6prwicxEYtHL3OkqyZQ3N1kKOkiaCOd/0', '1', '', '', '阿鲁巴', null);
INSERT INTO `tp_wxuser` VALUES ('57', '13898567898', '凤羽', 'o-AOIwqyKL1Yh4GBNVF_mQOlT08Q', '独行', 'ibLButGMnqJPE8uARhFsmia7fu6U7vy1v2nQymyb2Xofgm9sD5o2GbTgNuXT6aCs1zuZhRaSsMsQnwvicFnutLOEgoR5UbdtzAp/0', '1', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('58', '13216756589', '李宇春', 'o-AOIwjzrWRgQ9A_3u-XI-xL62vI', '蓝胖子的时光机', 'PiajxSqBRaEKRwH5gENtwElgyMJNk5ZFGhGy0MvqKj1OwIKZ6wz9YBUc1uEvt620r3XFWk6iclbnpia0hV1l5qBZg/0', '2', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('63', null, null, 'o-AOIwo5JSG__CmjR883vQVTE2vw', 'Mega ', 'uaWz6P0Wriav2cZebJUFqurTCzSRdU15ObNCyt36jOTM9PWYs9FQcTYicBCgYB89j6kkT1IsYFI22BI9YjQ9V39hpskmiapkolj/0', '1', '北京', '海淀', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('64', null, null, 'o-AOIwtcmr7fCpej5MMV9UFhTDRk', '鹿大大种仙人掌????', 'ajNVdqHZLLDbB2SWib1JicXfNThql4LeCHdJobZmj5L1QV1sNhBWZwI2VIx5JfrCSrCm0LiaicDySjcnhPMU5q1ImA/0', '2', '江苏', '南京', '中国', null);
INSERT INTO `tp_wxuser` VALUES ('65', null, null, 'o-AOIwghttXZ116LVsrOybaPhX2A', '幸运', 'uaWz6P0WriavYr5iaVTHsuTwU6GwN0PGXOasxLYsh4UkA2RJA8WaeIeqo0N5z6yWAqG4ESSbiapdGcrEm5ibZshWISEgpJplGa44/0', '1', '', '', '安道尔', null);
