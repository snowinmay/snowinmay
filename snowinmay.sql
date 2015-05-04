-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-05-02 09:57:43
-- 服务器版本: 5.5.41-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `snowinmay`
--

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_about`
--

CREATE TABLE IF NOT EXISTS `oecmspre_about` (
  `abid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `catid` mediumint(8) unsigned DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `intro` text,
  `content` text,
  `thumbfiles` varchar(255) DEFAULT NULL,
  `uploadfiles` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `metakeyword` varchar(500) DEFAULT NULL,
  `metadescription` varchar(500) DEFAULT NULL,
  `tplname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`abid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_about`
--

INSERT INTO `oecmspre_about` (`abid`, `modalias`, `treeid`, `catid`, `title`, `intro`, `content`, `thumbfiles`, `uploadfiles`, `tags`, `metakeyword`, `metadescription`, `tplname`) VALUES
(2, 'about', 6, 25, '公司介绍', '', '<p>\r\n	OE技术专注于网络信息化及网络营销领域，通过整合团队专业的市场营销理念与网络技术为客户提供优质的网络营销服务。\r\n</p>\r\n<p>\r\n	OE技术的主要业务包括：网站系统开发、网站建设、网站推广、空间域名以及网络营销策划与运行。\r\n</p>\r\n<p>\r\n	OE技术自主产品包括：OEcms(企业网站系统)、OElove(婚恋交友系统)、OESOP(业务管理系统)；\r\n</p>\r\n<p>\r\n	OEcms(企业网站系统)采用PHP+Mysql+Smarty，采用OE自主研发开发框架OEPHP，MVC开发模式，轻巧、灵活，易用、易于二次开发。\r\n</p>\r\n<p>\r\n	OEcms新版支持7种模型：文章模型、产品模型、图库模型、下载模型、招聘模型、单页模型和外部模型，支持自定义字段。用户可在后台添加、修改、删除模型，随心所遇建立属于自己的企业网站。\r\n</p>\r\n<p>\r\n	OE技术秉承“为合作伙伴创造价值”的核心价值观，并以“诚实、宽容、创新、服务”为企业精神，通过自主创新和真诚合作为电子商务及信息服务行业创造价值。\r\n</p>\r\n<p>\r\n	关于“为合作伙伴创造价值”\r\n</p>\r\n<p>\r\n	OE技术认为客户、供应商、公司股东、公司员工等一切和自身有合作关系的单位和个人都是自己的合作伙伴，并只有通过努力为合作伙伴创造价值，才能体现自身的价值并获得发展和成功。\r\n</p>\r\n<p>\r\n	关于“诚实、宽容、创新、服务”\r\n</p>\r\n<p>\r\n	OE技术认为诚信是一切合作的基础，宽容是解决问题的前提，创新是发展事业的利器，服务是创造价值的根本。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '', '', '内容,呀', '这里是meta关键字', '这里是meta描述', ''),
(3, 'about', 6, 26, '联系我们', '联系我们', '<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	业务邮箱：<a href="mailto:phpcoo@qq.com">phpcoo@qq.com</a> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	业务 QQ：944811833 Email：<a href="mailto:phpcoo@foxmail.com">phpcoo@foxmail.com</a> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	官方技术讨论群\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	222098532 OEcms技术交流群（欢迎加入）\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	联系地址：广州市天河区天河东路242号\r\n</p>', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_admin`
--

CREATE TABLE IF NOT EXISTS `oecmspre_admin` (
  `adminid` mediumint(8) unsigned NOT NULL,
  `adminname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `groupid` mediumint(8) unsigned DEFAULT '0',
  `super` tinyint(1) unsigned DEFAULT '0',
  `timeline` int(10) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `logintimeline` int(10) unsigned DEFAULT '0',
  `logintimes` int(10) unsigned DEFAULT '0',
  `loginip` varchar(50) DEFAULT NULL,
  `memo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`adminid`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_admin`
--

INSERT INTO `oecmspre_admin` (`adminid`, `adminname`, `password`, `groupid`, `super`, `timeline`, `flag`, `logintimeline`, `logintimes`, `loginip`, `memo`) VALUES
(1, 'admin', '910076785580f2772727d3d3a810c88f', 0, 1, 1430212530, 1, 1430383489, 4, '127.0.0.1', '超级管理员');

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_article`
--

CREATE TABLE IF NOT EXISTS `oecmspre_article` (
  `articleid` int(10) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `catid` mediumint(8) unsigned DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `thumbfiles` varchar(255) DEFAULT NULL,
  `uploadfiles` varchar(255) DEFAULT NULL,
  `summary` varchar(500) DEFAULT NULL,
  `content` text,
  `istop` tinyint(1) unsigned DEFAULT '0',
  `elite` tinyint(1) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '1',
  `adduser` varchar(50) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT '0',
  `updatetime` int(10) unsigned DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `linktype` tinyint(1) unsigned DEFAULT '0',
  `linkurl` varchar(255) DEFAULT NULL,
  `purview` smallint(2) unsigned DEFAULT '0',
  `tags` varchar(255) DEFAULT NULL,
  `metakeyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(500) DEFAULT NULL,
  `tplname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`articleid`),
  KEY `modalias` (`modalias`),
  KEY `treeid` (`treeid`),
  KEY `catid` (`catid`),
  KEY `flag` (`flag`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_article_attr`
--

CREATE TABLE IF NOT EXISTS `oecmspre_article_attr` (
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `aid` mediumint(8) unsigned DEFAULT '0',
  `extvalue` text,
  `relid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`),
  KEY `relid` (`relid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_authgroup`
--

CREATE TABLE IF NOT EXISTS `oecmspre_authgroup` (
  `groupid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `groupname` varchar(255) DEFAULT NULL,
  `auths` text,
  `rootid` mediumint(8) unsigned DEFAULT '0',
  `depth` mediumint(8) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `addtime` int(10) unsigned DEFAULT '0',
  `orders` smallint(2) unsigned DEFAULT '0',
  `intro` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_category`
--

CREATE TABLE IF NOT EXISTS `oecmspre_category` (
  `catid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `catname` varchar(100) DEFAULT NULL,
  `asname` varchar(100) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `rootid` mediumint(8) unsigned DEFAULT '0',
  `depth` mediumint(8) unsigned DEFAULT '0',
  `childs` varchar(255) DEFAULT NULL,
  `flag` tinyint(1) unsigned DEFAULT '0',
  `orders` mediumint(8) unsigned DEFAULT '0',
  `dirname` varchar(100) DEFAULT NULL,
  `dirpath` varchar(200) DEFAULT NULL,
  `catpic` varchar(255) DEFAULT NULL,
  `intro` varchar(500) DEFAULT NULL,
  `metatitle` varchar(255) DEFAULT NULL,
  `metakeyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(255) DEFAULT NULL,
  `tplindex` varchar(255) DEFAULT NULL,
  `tpllist` varchar(255) DEFAULT NULL,
  `tpldetail` varchar(255) DEFAULT NULL,
  `ismenu` tinyint(1) unsigned DEFAULT '0',
  `isaccessory` tinyint(1) unsigned DEFAULT '0',
  `showpart` tinyint(1) unsigned DEFAULT '0',
  `orderby` tinyint(1) unsigned DEFAULT '0',
  `pagemax` smallint(1) unsigned DEFAULT '0',
  `linktype` tinyint(1) unsigned DEFAULT '1',
  `outurl` varchar(255) DEFAULT NULL,
  `purview` mediumint(8) unsigned DEFAULT '0',
  `issystem` tinyint(1) unsigned DEFAULT '0',
  `relid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`catid`),
  KEY `rootid` (`rootid`),
  KEY `dirname` (`dirname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_category`
--

INSERT INTO `oecmspre_category` (`catid`, `modalias`, `catname`, `asname`, `treeid`, `rootid`, `depth`, `childs`, `flag`, `orders`, `dirname`, `dirpath`, `catpic`, `intro`, `metatitle`, `metakeyword`, `metadescription`, `tplindex`, `tpllist`, `tpldetail`, `ismenu`, `isaccessory`, `showpart`, `orderby`, `pagemax`, `linktype`, `outurl`, `purview`, `issystem`, `relid`) VALUES
(1, 'product', '我的作品', 'works_category', 0, 0, 0, NULL, 1, 1, 'works_category', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0),
(2, 'product', 'hsl作品', 'tutorials', 1, 1, 1, NULL, 1, 1, 'hsl', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0),
(3, 'product', '六房作品', 'infomation', 1, 1, 1, NULL, 1, 2, '6rooms', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0),
(4, 'article', '我的简历', 'resume', 0, 0, 0, NULL, 1, 2, 'resume', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0),
(5, 'article', '基本信息', 'base_info', 4, 4, 1, NULL, 1, 1, 'base_info', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0),
(6, 'article', '专业技能', 'technical', 4, 4, 1, NULL, 1, 2, 'technical', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0),
(7, 'article', '项目经验', 'project', 4, 4, 1, NULL, 1, 3, 'project', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0),
(8, 'article', '主要经历', 'experience', 4, 4, 1, NULL, 1, 4, 'experience', NULL, '', NULL, '', '', '', '', '', '', 1, 0, 0, 0, 0, 1, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_download`
--

CREATE TABLE IF NOT EXISTS `oecmspre_download` (
  `downid` int(10) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `catid` mediumint(8) unsigned DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `thumbfiles` varchar(255) DEFAULT NULL,
  `uploadfiles` varchar(255) DEFAULT NULL,
  `filesize` int(10) unsigned DEFAULT '0',
  `fileurl` varchar(255) DEFAULT NULL,
  `summary` varchar(500) DEFAULT NULL,
  `content` text,
  `istop` tinyint(1) unsigned DEFAULT '0',
  `elite` tinyint(1) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `adduser` varchar(50) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT '0',
  `updatetime` int(10) unsigned DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `downs` int(10) unsigned DEFAULT '0',
  `linktype` tinyint(1) unsigned DEFAULT '0',
  `linkurl` varchar(255) DEFAULT NULL,
  `purview` smallint(2) unsigned DEFAULT '0',
  `tags` varchar(255) DEFAULT NULL,
  `metakeyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(500) DEFAULT NULL,
  `tplname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`downid`),
  KEY `modalias` (`modalias`),
  KEY `treeid` (`treeid`),
  KEY `catid` (`catid`),
  KEY `flag` (`flag`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_download_attr`
--

CREATE TABLE IF NOT EXISTS `oecmspre_download_attr` (
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `aid` mediumint(8) unsigned DEFAULT '0',
  `extvalue` text,
  `relid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`),
  KEY `relid` (`relid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_friendlink`
--

CREATE TABLE IF NOT EXISTS `oecmspre_friendlink` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `orders` int(10) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `addtime` int(10) unsigned DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_guestbook`
--

CREATE TABLE IF NOT EXISTS `oecmspre_guestbook` (
  `gid` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` int(10) unsigned DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` int(10) unsigned DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `flag` tinyint(1) unsigned DEFAULT '0',
  `qq` varchar(50) DEFAULT NULL,
  `msn` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `replyflag` tinyint(1) unsigned DEFAULT '0',
  `replycontent` text,
  `replyuser` varchar(50) DEFAULT NULL,
  `replytime` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`gid`),
  KEY `userid` (`userid`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_hr`
--

CREATE TABLE IF NOT EXISTS `oecmspre_hr` (
  `hrid` int(10) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `catid` mediumint(8) unsigned DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `number` smallint(2) unsigned DEFAULT '0',
  `workarea` varchar(50) DEFAULT NULL,
  `thumbfiles` varchar(255) DEFAULT NULL,
  `uploadfiles` varchar(255) DEFAULT NULL,
  `summary` varchar(500) DEFAULT NULL,
  `content` text,
  `hrcontact` varchar(255) DEFAULT NULL,
  `istop` tinyint(1) unsigned DEFAULT '0',
  `elite` tinyint(1) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `adduser` varchar(50) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT '0',
  `updatetime` int(10) unsigned DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `linktype` tinyint(1) unsigned DEFAULT '0',
  `linkurl` varchar(255) DEFAULT NULL,
  `purview` smallint(2) unsigned DEFAULT '0',
  `metakeyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(500) DEFAULT NULL,
  `tplname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hrid`),
  KEY `modalias` (`modalias`),
  KEY `treeid` (`treeid`),
  KEY `catid` (`catid`),
  KEY `flag` (`flag`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_hr_attr`
--

CREATE TABLE IF NOT EXISTS `oecmspre_hr_attr` (
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `aid` mediumint(8) unsigned DEFAULT '0',
  `extvalue` text,
  `relid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`),
  KEY `relid` (`relid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_htmllabel`
--

CREATE TABLE IF NOT EXISTS `oecmspre_htmllabel` (
  `labelid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `labelname` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `flag` tinyint(1) unsigned DEFAULT '0',
  `timeline` int(10) unsigned DEFAULT '0',
  `issystem` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`labelid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_htmllabel`
--

INSERT INTO `oecmspre_htmllabel` (`labelid`, `labelname`, `description`, `content`, `flag`, `timeline`, `issystem`) VALUES
(1, 'about', '关于我们', 'OE技术专注于网络信息化及网络营销领域，通过整合团队专业的市场营销理念与网络技术为客户提供优质的网络营销服务。 OE技术的主要业务包括：网站系统开发、网站建设、网站推广、空间域名以及网络营销策划与运行。 OE技术自主产品包括：OEcms(企业网站系统)、OElove(婚恋交友系统)、OESOP(业务管理系统)； OEcms(企业网站系统)采用PHP+Mysql+Smarty，采用OE自主研发开发框架OEPHP，MVC开发模式，轻巧、灵活，易用、易于二次开发。 OEcms新版支持7种模型：文章模型、产品模型、图库模型、下载模型、招聘模型、单页模型和外部模型，支持自定义字段。用户可在后台添加、修改、删除模型，随心所遇建立属于自己的企业网站。 OE技术秉承“为合作伙伴创造价值”的核心价值观，并以“诚实、宽容、创新、服务”为企业精神，通过自主创新和真诚合作为电子商务及信息服务行业创造价值。 关于“为合作伙伴创造价值” OE技术认为客户、供应商、公司股东、公司员工等一切和自身有合作关系的单位和个人都是自己的合作伙伴，并只有通过努力为合作伙伴创造价值，才能体现自身的价值并获得发展和成功。', 1, 1332149854, 0),
(2, 'contact', '联系方式', '<p>\r\n	关于OEcms产品的相关疑问与建议可以在论坛发帖咨询\r\n</p>\r\n<p>\r\n	论坛地址： <a href="http://bbs.phpcoo.com/">http://bbs.phpcoo.com/</a> \r\n</p>\r\n<p>\r\n	客服邮箱： <a href="mailto:phpcoo@qq.com">phpcoo@qq.com</a> \r\n</p>\r\n<p>\r\n	若您对OEcms产品有任何疑惑与问题，请咨询我们，我们将给您最佳解答！\r\n</p>\r\n<p>\r\n	工作时间：周一至周五 9：30-18：30 （周末时间只在Q群答疑）\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	公司地址：广州市天河区天河东路242号\r\n</p>', 1, 1332149868, 0),
(3, 'toptips', '头部提示', 'OEcms开源、免费企业网站系统，欢迎下载使用！', 1, 1335938806, 0);

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_log`
--

CREATE TABLE IF NOT EXISTS `oecmspre_log` (
  `logid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `logtype` tinyint(1) unsigned DEFAULT '1',
  `timeline` int(10) unsigned DEFAULT '0',
  `success` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_log`
--

INSERT INTO `oecmspre_log` (`logid`, `username`, `ip`, `content`, `logtype`, `timeline`, `success`) VALUES
(1, 'admin', '127.0.0.1', '登录成功', 1, 1430212547, 1),
(2, 'admin', '127.0.0.1', '修改模型-id=Array', 1, 1430213336, 1),
(3, 'admin', '127.0.0.1', '修改模型-id=Array', 1, 1430213471, 1),
(4, 'admin', '127.0.0.1', '添加栏目', 1, 1430213564, 1),
(5, 'admin', '127.0.0.1', '修改栏目-id=1', 1, 1430213797, 1),
(6, 'admin', '127.0.0.1', '添加栏目', 1, 1430213923, 1),
(7, 'admin', '127.0.0.1', '添加栏目', 1, 1430213969, 1),
(8, 'admin', '127.0.0.1', '添加产品', 1, 1430214243, 1),
(9, 'admin', '127.0.0.1', '修改产品-id=1', 1, 1430214459, 1),
(10, 'admin', '127.0.0.1', '添加产品', 1, 1430214797, 1),
(11, 'admin', '127.0.0.1', '修改模型-id=Array', 1, 1430217626, 1),
(12, 'admin', '127.0.0.1', '登录成功', 1, 1430225591, 1),
(13, 'admin', '127.0.0.1', '登录成功', 1, 1430264389, 1),
(14, 'admin', '127.0.0.1', '修改产品-id=2', 1, 1430264435, 1),
(15, 'admin', '127.0.0.1', '修改产品-id=2', 1, 1430264868, 1),
(16, 'admin', '127.0.0.1', '修改产品-id=1', 1, 1430264904, 1),
(17, 'admin', '127.0.0.1', '添加产品', 1, 1430265023, 1),
(18, 'admin', '127.0.0.1', '修改栏目-id=2', 1, 1430266015, 1),
(19, 'admin', '127.0.0.1', '修改栏目-id=3', 1, 1430266037, 1),
(20, 'admin', '127.0.0.1', '修改产品-id=3', 1, 1430272444, 1),
(21, 'admin', '127.0.0.1', '修改产品-id=1', 1, 1430272469, 1),
(22, 'admin', '127.0.0.1', '修改产品-id=2', 1, 1430272491, 1),
(23, 'admin', '127.0.0.1', '修改产品-id=3', 1, 1430274062, 1),
(24, 'admin', '127.0.0.1', '修改产品-id=3', 1, 1430278843, 1),
(25, 'admin', '127.0.0.1', '修改产品-id=1', 1, 1430279088, 1),
(26, 'admin', '127.0.0.1', '修改产品-id=2', 1, 1430279119, 1),
(27, 'admin', '127.0.0.1', '添加产品', 1, 1430279617, 1),
(28, 'admin', '127.0.0.1', '添加产品', 1, 1430279707, 1),
(29, 'admin', '127.0.0.1', '添加产品', 1, 1430279895, 1),
(30, 'admin', '127.0.0.1', '修改产品-id=6', 1, 1430279938, 1),
(31, 'admin', '127.0.0.1', '登录成功', 1, 1430383490, 1),
(32, 'admin', '127.0.0.1', '添加栏目', 1, 1430384432, 1),
(33, 'admin', '127.0.0.1', '删除栏目-id=4', 1, 1430384687, 1),
(34, 'admin', '127.0.0.1', '添加栏目', 1, 1430384781, 1),
(35, 'admin', '127.0.0.1', '修改栏目-id=4', 1, 1430384801, 1),
(36, 'admin', '127.0.0.1', '添加栏目', 1, 1430386248, 1),
(37, 'admin', '127.0.0.1', '添加栏目', 1, 1430386400, 1),
(38, 'admin', '127.0.0.1', '删除栏目-id=6', 1, 1430386478, 1),
(39, 'admin', '127.0.0.1', '添加栏目', 1, 1430386541, 1),
(40, 'admin', '127.0.0.1', '添加栏目', 1, 1430386820, 1),
(41, 'admin', '127.0.0.1', '删除栏目-id=7', 1, 1430387078, 1),
(42, 'admin', '127.0.0.1', '添加栏目', 1, 1430387122, 1),
(43, 'admin', '127.0.0.1', '添加栏目', 1, 1430387194, 1),
(44, 'admin', '127.0.0.1', '添加文章', 1, 1430389042, 1),
(45, 'admin', '127.0.0.1', '修改文章-id=1', 1, 1430389107, 1),
(46, 'admin', '127.0.0.1', '删除文章-id=Array', 1, 1430390038, 1);

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_menu`
--

CREATE TABLE IF NOT EXISTS `oecmspre_menu` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `orders` int(10) unsigned DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `parentid` int(10) unsigned DEFAULT '0',
  `target` tinyint(1) unsigned DEFAULT '0',
  `currentmark` varchar(50) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_module`
--

CREATE TABLE IF NOT EXISTS `oecmspre_module` (
  `modid` smallint(2) unsigned NOT NULL,
  `modname` varchar(50) DEFAULT NULL,
  `alias` varchar(50) NOT NULL DEFAULT '',
  `color` varchar(20) DEFAULT NULL,
  `tplindex` varchar(100) DEFAULT NULL,
  `tpllist` varchar(100) DEFAULT NULL,
  `tpldetail` varchar(100) DEFAULT NULL,
  `posts` mediumint(8) unsigned DEFAULT '0',
  `comments` mediumint(8) unsigned DEFAULT '0',
  `pv` int(10) unsigned DEFAULT '0',
  `sort` tinyint(2) unsigned DEFAULT '0',
  `enabled` tinyint(1) unsigned DEFAULT '1',
  `intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`modid`),
  UNIQUE KEY `modelid` (`modid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_module`
--

INSERT INTO `oecmspre_module` (`modid`, `modname`, `alias`, `color`, `tplindex`, `tpllist`, `tpldetail`, `posts`, `comments`, `pv`, `sort`, `enabled`, `intro`) VALUES
(1, '文章模型', 'article', '#000000', 'article_index', 'article_list', 'article_detail', 0, 0, 0, 0, 1, NULL),
(2, '产品模型', 'product', '#008000', 'works', 'product_list', 'product_detail', 0, 0, 0, 0, 1, NULL),
(3, '图库模型', 'photo', '#ff8000', 'photo_index', 'photo_list', 'photo_detail', 0, 0, 0, 0, 1, NULL),
(4, '下载模型', 'download', '#0000ff', 'download_index', 'download_list', 'download_detail', 0, 0, 0, 0, 1, NULL),
(5, '招聘模型', 'hr', '#a52a2a', 'hr_index', 'hr_list', 'hr_detail', 0, 0, 0, 0, 1, NULL),
(6, '单页模型', 'about', '#008080', '', '', 'about_detail', 0, 0, 0, 0, 1, NULL),
(7, '外部模型', 'outside', '#ff0000', '', '', '', 0, 0, 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_module_attr`
--

CREATE TABLE IF NOT EXISTS `oecmspre_module_attr` (
  `aid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `typename` varchar(50) DEFAULT NULL,
  `typeremark` varchar(255) DEFAULT NULL,
  `attrname` varchar(50) DEFAULT NULL,
  `inputtype` varchar(20) DEFAULT NULL,
  `attrvalue` text,
  `attrwidth` smallint(2) unsigned DEFAULT '0',
  `attrheight` smallint(2) unsigned DEFAULT '0',
  `isvalid` tinyint(1) unsigned DEFAULT '0',
  `validtext` varchar(200) DEFAULT NULL,
  `orders` mediumint(8) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `issystem` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `modalias` (`modalias`),
  KEY `flag` (`flag`),
  KEY `treeid` (`treeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_myads`
--

CREATE TABLE IF NOT EXISTS `oecmspre_myads` (
  `aid` mediumint(8) unsigned NOT NULL,
  `zoneid` mediumint(8) unsigned DEFAULT '0',
  `catid` int(10) unsigned DEFAULT '0',
  `tagname` varchar(100) DEFAULT NULL,
  `adname` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `target` tinyint(1) unsigned DEFAULT '1',
  `orders` mediumint(8) unsigned DEFAULT '0',
  `timeset` tinyint(2) unsigned DEFAULT '0',
  `starttime` int(10) unsigned DEFAULT '0',
  `endtime` int(10) unsigned DEFAULT '0',
  `normbody` varchar(1000) DEFAULT NULL,
  `flag` tinyint(1) unsigned DEFAULT '0',
  `issystem` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `zoneid` (`zoneid`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_myads`
--

INSERT INTO `oecmspre_myads` (`aid`, `zoneid`, `catid`, `tagname`, `adname`, `url`, `target`, `orders`, `timeset`, `starttime`, `endtime`, `normbody`, `flag`, `issystem`) VALUES
(1, 1, 0, 'index_huandeng_01', '幻灯片1', '#', 1, 1, 0, 0, 0, 'a:5:{s:4:"type";s:7:"picture";s:11:"uploadfiles";s:46:"data/attachment/201302/05/af62a35726795784.jpg";s:5:"title";s:0:"";s:5:"width";i:990;s:6:"height";i:200;}', 1, 0),
(2, 1, 0, 'index_huandeng_02', '幻灯片2', '#', 1, 2, 0, 0, 0, 'a:5:{s:4:"type";s:7:"picture";s:11:"uploadfiles";s:46:"data/attachment/201302/05/0f65de6555314ec4.jpg";s:5:"title";s:0:"";s:5:"width";i:990;s:6:"height";i:200;}', 1, 0),
(3, 0, 0, 'banner_001', '全局banner图', '#', 1, 1, 0, 0, 0, 'a:5:{s:4:"type";s:7:"picture";s:11:"uploadfiles";s:46:"data/attachment/201302/05/33e935449e670be2.jpg";s:5:"title";s:0:"";s:5:"width";i:990;s:6:"height";i:200;}', 1, 0),
(4, 0, 0, 'index_ads_01', '首页公司简介广告图', '#', 1, 2, 0, 0, 0, 'a:5:{s:4:"type";s:7:"picture";s:11:"uploadfiles";s:46:"data/attachment/201302/05/377392c4b3e7fdb8.jpg";s:5:"title";s:0:"";s:5:"width";i:160;s:6:"height";i:120;}', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_mynav`
--

CREATE TABLE IF NOT EXISTS `oecmspre_mynav` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `orders` int(10) unsigned DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT '0',
  `icon` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_options`
--

CREATE TABLE IF NOT EXISTS `oecmspre_options` (
  `id` mediumint(8) unsigned NOT NULL,
  `optionname` varchar(255) DEFAULT NULL,
  `optionvalue` text,
  `optiondesc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_options`
--

INSERT INTO `oecmspre_options` (`id`, `optionname`, `optionvalue`, `optiondesc`) VALUES
(1, 'active_plugins', 'a:4:{i:2;s:4:"link";i:4;s:7:"runtime";i:5;s:8:"datatool";i:6;s:6:"online";}', '插件'),
(2, 'nonce_templet', 'default', '当前模板'),
(3, 'site_base', 'a:8:{s:8:"sitename";s:9:"snowinmay";s:7:"siteurl";s:27:"http://localhost/snowinmay/";s:4:"logo";s:46:"data/attachment/201302/05/7ce13035b241c2bd.png";s:9:"logowidth";i:129;s:10:"logoheight";i:66;s:8:"timezone";i:8;s:7:"icpcode";s:20:"粤ICP备10217863号";s:6:"tjcode";s:0:"";}', '站点基本设置'),
(4, 'site_footer', '24 小时服务热线 020-12345678', '站点底部信息设置'),
(5, 'site_rewrite', 'a:1:{s:9:"urlsuffix";s:3:"php";}', '站点伪静态设置'),
(6, 'upload_config', 'a:12:{s:13:"uploadmaxsize";d:2;s:13:"maxthumbwidth";i:700;s:14:"maxthumbheight";i:680;s:10:"thumbwidth";i:139;s:11:"thumbheight";i:139;s:17:"productthumbwidth";i:180;s:18:"productthumbheight";i:180;s:15:"photothumbwidth";i:300;s:16:"photothumbheight";i:300;s:13:"watermarkflag";i:0;s:13:"watermarkfile";s:0:"";s:12:"watermarkpos";i:4;}', '上传图片设置'),
(7, 'index_style', 'a:10:{s:10:"articlenum";i:10;s:10:"articlelen";i:15;s:10:"productnum";i:12;s:10:"productlen";i:15;s:8:"photonum";i:10;s:8:"photolen";i:15;s:7:"downnum";i:10;s:7:"downlen";i:17;s:5:"hrnum";i:10;s:5:"hrlen";i:20;}', '首页参数设置'),
(8, 'main_style', 'a:5:{s:15:"articlepagesize";i:15;s:15:"productpagesize";i:12;s:13:"photopagesize";i:12;s:12:"downpagesize";i:10;s:10:"hrpagesize";i:15;}', '界面参数设置');

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_photo`
--

CREATE TABLE IF NOT EXISTS `oecmspre_photo` (
  `photoid` int(10) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `catid` mediumint(8) unsigned DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `thumbfiles` varchar(255) DEFAULT NULL,
  `uploadfiles` varchar(255) DEFAULT NULL,
  `albums` text,
  `summary` varchar(500) DEFAULT NULL,
  `content` text,
  `istop` tinyint(1) unsigned DEFAULT '0',
  `elite` tinyint(1) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `adduser` varchar(50) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT '0',
  `updatetime` int(10) unsigned DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `linktype` tinyint(1) unsigned DEFAULT '0',
  `linkurl` varchar(255) DEFAULT NULL,
  `purview` smallint(2) unsigned DEFAULT '0',
  `tags` varchar(255) DEFAULT NULL,
  `metakeyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(500) DEFAULT NULL,
  `tplname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`photoid`),
  KEY `modalias` (`modalias`),
  KEY `treeid` (`treeid`),
  KEY `catid` (`catid`),
  KEY `flag` (`flag`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_photo_attr`
--

CREATE TABLE IF NOT EXISTS `oecmspre_photo_attr` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `aid` mediumint(8) unsigned DEFAULT '0',
  `extvalue` text,
  `relid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`),
  KEY `relid` (`relid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_product`
--

CREATE TABLE IF NOT EXISTS `oecmspre_product` (
  `productid` int(10) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `treeid` mediumint(8) unsigned DEFAULT '0',
  `catid` mediumint(8) unsigned DEFAULT '0',
  `productsn` varchar(50) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `oprice` decimal(18,2) unsigned DEFAULT '0.00',
  `bprice` decimal(18,2) unsigned DEFAULT '0.00',
  `thumbfiles` varchar(255) DEFAULT NULL,
  `uploadfiles` varchar(255) DEFAULT NULL,
  `albums` text,
  `summary` varchar(500) DEFAULT NULL,
  `content` text,
  `istop` tinyint(1) unsigned DEFAULT '0',
  `elite` tinyint(1) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `adduser` varchar(50) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT '0',
  `updatetime` int(10) unsigned DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `linktype` tinyint(1) unsigned DEFAULT '1',
  `linkurl` varchar(255) DEFAULT NULL,
  `purview` smallint(2) unsigned DEFAULT '0',
  `tags` varchar(255) DEFAULT NULL,
  `metakeyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(500) DEFAULT NULL,
  `tplname` varchar(255) DEFAULT NULL,
  `isorder` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`productid`),
  KEY `treeid` (`treeid`),
  KEY `modalias` (`modalias`),
  KEY `catid` (`catid`),
  KEY `flag` (`flag`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_product`
--

INSERT INTO `oecmspre_product` (`productid`, `modalias`, `treeid`, `catid`, `productsn`, `productname`, `oprice`, `bprice`, `thumbfiles`, `uploadfiles`, `albums`, `summary`, `content`, `istop`, `elite`, `flag`, `adduser`, `addtime`, `updatetime`, `hits`, `linktype`, `linkurl`, `purview`, `tags`, `metakeyword`, `metadescription`, `tplname`, `isorder`) VALUES
(1, 'product', 1, 2, 'tutorials', '杭州大厦快抢', 0.00, 0.00, '', '', '', '杭州大厦快抢游戏', '杭州大厦快抢游戏', 1, 0, 1, NULL, 1430214005, 1430214243, 2, 1, '', 0, '', '', 'http://snowinmay.net/works/kuaiqiang/banner.html', '', 0),
(3, 'product', 1, 2, 'tutorials', '杭州大厦寻宝', 0.00, 0.00, '', '', '', '杭州大厦寻宝游戏', '杭州大厦寻宝游戏', 1, 1, 1, NULL, 1429545600, 1430265023, 0, 1, '', 0, '', '', 'http://snowinmay.net/works/xunbao/beacon_templates/show.html', '', 0),
(2, 'product', 1, 3, 'infomation', '服饰装扮', 0.00, 0.00, '', '', '', '类似QQ秀的虚拟形象娃娃购买装扮的平台', '类似QQ秀的虚拟形象娃娃购买装扮的平台', 1, 1, 1, NULL, 1430214762, 1430214797, 0, 1, '', 0, '', '', 'http://v.6.cn/user/shopClothes.php', '', 0),
(4, 'product', 1, 2, 'infomation', '杭州大厦微信商城', 0.00, 0.00, '', '', '', '杭州大厦微信商城', '杭州大厦微信商城', 0, 0, 1, NULL, 1427946722, 1430279617, 0, 1, '', 0, '', '', 'http://snowinmay.net/works/wechat_mall', '', 0),
(5, 'product', 1, 2, 'infomation', '华数多账号绑定', 0.00, 0.00, '', '', '', '华数多账号绑定', '<span style="font-family:monospace;font-size:medium;line-height:normal;">华数多账号绑定</span>', 0, 0, 1, NULL, 1430279651, 1430279707, 0, 1, '', 0, '', '', 'http://snowinmay.net/works/huashu/p.html', '', 0),
(6, 'product', 1, 2, 'infomation', 'crm常用素材', 0.00, 0.00, '', '', '', 'crm常用素材', 'crm常用素材', 1, 0, 1, NULL, 1429502109, 1430279895, 0, 1, '', 0, '', '', 'http://snowinmay.net/works/crm_html', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_product_attr`
--

CREATE TABLE IF NOT EXISTS `oecmspre_product_attr` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `modalias` varchar(50) DEFAULT NULL,
  `aid` mediumint(8) unsigned DEFAULT '0',
  `extvalue` text,
  `relid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`),
  KEY `relid` (`relid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_relatedlink`
--

CREATE TABLE IF NOT EXISTS `oecmspre_relatedlink` (
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `linktag` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `target` tinyint(1) unsigned DEFAULT '1',
  `nofollow` tinyint(1) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '1',
  `timeline` int(10) unsigned DEFAULT '0',
  `article` tinyint(1) unsigned DEFAULT '1',
  `product` tinyint(1) unsigned DEFAULT '1',
  `photo` tinyint(1) unsigned DEFAULT '1',
  `download` tinyint(1) unsigned DEFAULT '1',
  `about` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_seo`
--

CREATE TABLE IF NOT EXISTS `oecmspre_seo` (
  `id` smallint(2) unsigned NOT NULL DEFAULT '0',
  `idmark` varchar(100) DEFAULT NULL,
  `chname` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `keyword` varchar(500) DEFAULT NULL,
  `intro` varchar(500) DEFAULT NULL,
  `orders` smallint(2) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_seo`
--

INSERT INTO `oecmspre_seo` (`id`, `idmark`, `chname`, `title`, `description`, `keyword`, `intro`, `orders`) VALUES
(1, 'ch_index', '首页', 'OECMS v4.0企业网站演示站', 'OECMS V4开源免费企业建站系统，全新MVC架构，简单实用，方便二次开发。官方网站：www.phpcoo.com', 'OECMS,OEcms v4', NULL, 1),
(2, 'ch_product_index', '产品首页', '{cat.name}-产品首页_{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 2),
(3, 'ch_product_list', '产品列表页', '{cat.name}-列表-第{page}页-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 3),
(4, 'ch_product_detail', '产品内容页', '{title}-{cat.name}-{sitename}', '{metadescription}', '{metakeyword}', NULL, 4),
(5, 'ch_product_search', '产品搜索', '产品搜索-{sitename}', '', '', NULL, 5),
(6, 'ch_article_index', '文章首页', '{cat.name}-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 6),
(7, 'ch_article_list', '文章列表页', '{cat.name}-列表-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 7),
(8, 'ch_article_detail', '文章内容页', '{title}-{cat.name}-{sitename}', '{metadescription}', '{metakeyword}', NULL, 8),
(9, 'ch_article_search', '文章搜索', '文章搜索-{sitename}', '', '', NULL, 9),
(10, 'ch_photo_index', '图库首页', '{cat.name}-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 10),
(11, 'ch_photo_list', '图库列表页', '{cat.name}-列表-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 11),
(12, 'ch_photo_detail', '图库内容页', '{title}-{cat.name}-{sitename}', '{metadescription}', '{metakeyword}', NULL, 12),
(13, 'ch_photo_search', '图库搜索', '图库搜索-{sitename}', '', '', NULL, 13),
(14, 'ch_download_index', '下载首页', '{cat.name}-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 14),
(15, 'ch_download_list', '下载列表页', '{cat.name}-列表-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 15),
(16, 'ch_download_detail', '下载内容页', '{title}-{cat.name}-{sitename}', '{metadescription}', '{metakeyword}', NULL, 16),
(17, 'ch_download_search', '下载搜索', '下载搜索-{sitename}', '', '', NULL, 17),
(18, 'ch_hr_index', '招聘首页', '{cat.name}-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 18),
(19, 'ch_hr_list', '招聘列表页', '{cat.name}-列表-{sitename}', '{cat.metadescription}', '{cat.metakeyword}', NULL, 19),
(20, 'ch_hr_detail', '招聘内容页', '{title}-{cat.name}-{sitename}', '{metadescription}', '{metakeyword}', NULL, 20),
(21, 'ch_hr_search', '招聘搜索', '招聘搜索-{sitename}', '', '', NULL, 21),
(22, 'ch_about_detail', '单页内容页', '{title}-{cat.name}-{sitename}', '{metadescription}', '{metadescription}', NULL, 22),
(23, 'ch_guestbook', '在线留言', '在线留言-{sitename}', '', '', NULL, 23);

-- --------------------------------------------------------

--
-- 表的结构 `oecmspre_zone`
--

CREATE TABLE IF NOT EXISTS `oecmspre_zone` (
  `zoneid` mediumint(8) unsigned NOT NULL,
  `zonename` varchar(100) DEFAULT NULL,
  `idmark` varchar(100) DEFAULT NULL,
  `sort` varchar(10) DEFAULT NULL,
  `zonewidth` smallint(2) unsigned DEFAULT '0',
  `zoneheight` smallint(2) unsigned DEFAULT '0',
  `flag` tinyint(1) unsigned DEFAULT '0',
  `issystem` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`zoneid`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oecmspre_zone`
--

INSERT INTO `oecmspre_zone` (`zoneid`, `zonename`, `idmark`, `sort`, `zonewidth`, `zoneheight`, `flag`, `issystem`) VALUES
(1, '首页幻灯片', 'index_slide_banner', 'slide', 990, 200, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
