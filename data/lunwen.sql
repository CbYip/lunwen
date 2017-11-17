-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?11 �?17 �?11:19
-- 服务器版本: 5.5.40
-- PHP 版本: 5.5.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lunwen`
--

-- --------------------------------------------------------

--
-- 表的结构 `jzk_accept`
--

CREATE TABLE IF NOT EXISTS `jzk_accept` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `WID` int(10) NOT NULL COMMENT '微信ID',
  `order` int(20) NOT NULL COMMENT '订单编号',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `jzk_accept`
--

INSERT INTO `jzk_accept` (`ID`, `WID`, `order`) VALUES
(1, 1000001, 2147483647);

-- --------------------------------------------------------

--
-- 表的结构 `jzk_address`
--

CREATE TABLE IF NOT EXISTS `jzk_address` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '电话号码',
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '所选省市县',
  `citydetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '详细地址',
  `wuliu` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '期望物流',
  `wu` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '物流',
  `wuliuid` int(11) NOT NULL COMMENT '物流编号',
  `WID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `jzk_address`
--

INSERT INTO `jzk_address` (`ID`, `name`, `tel`, `city`, `citydetail`, `wuliu`, `wu`, `wuliuid`, `WID`) VALUES
(14, '随便', '15521261234', '广东省,汕头市,濠江区', '随便', '输的', '', 0, 1514587),
(10, '哈说', '2147483647', '广西壮族自治区,崇左市,龙州县 ', '白色', '神武', '', 0, 1338317),
(12, '杨老师', '17051056565', '浙江省,杭州市,萧山区 ', '文昌大厦', '', '', 0, 1765747),
(13, '你就', '15812341235', '广东省,深圳市,南山区', '你就', '顺丰', '', 0, 1224945);

-- --------------------------------------------------------

--
-- 表的结构 `jzk_admin`
--

CREATE TABLE IF NOT EXISTS `jzk_admin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `acount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jzk_admin`
--

INSERT INTO `jzk_admin` (`ID`, `acount`, `password`, `time`, `email`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2017-09-07', '1234@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_buyshoporder`
--

CREATE TABLE IF NOT EXISTS `jzk_buyshoporder` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `temp` int(10) NOT NULL COMMENT '购买商品的id',
  `num` int(10) NOT NULL COMMENT '商品数量',
  `total` decimal(10,2) NOT NULL COMMENT '商品总价',
  `score` int(10) NOT NULL COMMENT '商品总积分',
  `flag` int(10) NOT NULL COMMENT '0未付款1已付款',
  `shopflag` int(10) NOT NULL COMMENT '0未发货1已发货2已收货',
  `WID` int(20) NOT NULL COMMENT '微信会员id',
  `ordernumber` varchar(30) NOT NULL COMMENT '订单编号',
  `time` datetime NOT NULL COMMENT '生成时间',
  `addid` int(10) NOT NULL COMMENT '收货地址id',
  `size` varchar(255) NOT NULL COMMENT '尺寸',
  `color` varchar(255) NOT NULL COMMENT '颜色',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `jzk_buyshoporder`
--

INSERT INTO `jzk_buyshoporder` (`ID`, `temp`, `num`, `total`, `score`, `flag`, `shopflag`, `WID`, `ordernumber`, `time`, `addid`, `size`, `color`) VALUES
(5, 6, 3, '564.00', 150, 0, 0, 1514587, '201709148447', '2017-09-14 17:31:36', 0, 'XL', '白色');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_cate`
--

CREATE TABLE IF NOT EXISTS `jzk_cate` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `typename` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '品牌名称',
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT '父分类ID',
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '添加作者',
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '添加时间',
  `delete` int(10) NOT NULL DEFAULT '0' COMMENT '删除标记(0未删除1删除)',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- 转存表中的数据 `jzk_cate`
--

INSERT INTO `jzk_cate` (`ID`, `typename`, `pid`, `author`, `time`, `delete`) VALUES
(47, '论文代金券', 0, 'admin', '1504784794', 0),
(46, '积分礼品', 0, 'admin', '1504784794', 0),
(45, '业务折扣卡', 0, 'admin', '1504784794', 0),
(53, '论文检测码', 0, 'admin', '1507814517', 0),
(52, '期刊样刊', 0, 'admin', '1505477554', 0);

-- --------------------------------------------------------

--
-- 表的结构 `jzk_comment`
--

CREATE TABLE IF NOT EXISTS `jzk_comment` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `order` varchar(30) NOT NULL COMMENT '订单编号',
  `WID` varchar(20) NOT NULL COMMENT '微信会员编号',
  `comment` text NOT NULL COMMENT '评论内容',
  `headimg` varchar(150) NOT NULL COMMENT '头像',
  `goodsname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `time` date NOT NULL COMMENT '日期',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `jzk_comment`
--

INSERT INTO `jzk_comment` (`ID`, `order`, `WID`, `comment`, `headimg`, `goodsname`, `username`, `time`) VALUES
(4, '201710106712', '1514587', '这个商品很好！', 'http://wx.qlogo.cn/mmopen/vi_32/RqAIt1x7pOh5RFCXWA0BpO0TPkX5cgIyRGV7VH73ibOgiceItRicRuGZ8opXhPblgfWNKsrEmQl4fdctW2MJAxCAA/0', '100元话费', '叶陈彬', '2017-10-11'),
(5, '201710124178', '1765747', '好评', 'http://wx.qlogo.cn/mmopen/vi_32/Q3auHgzwzM53ibLyMoicYK27AdpySXeBtashLQH9QRLpvBElA5kKckRh2kwEsMqY99Gic8oOOeOAFpCo4602bNQoA/0', '100元话费', '「易起论文」', '2017-10-12');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_extend`
--

CREATE TABLE IF NOT EXISTS `jzk_extend` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EventKey` varchar(255) NOT NULL COMMENT '推荐人的ID',
  `Fopenid` varchar(255) NOT NULL COMMENT '扫码人的openid',
  `Etime` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `jzk_extend`
--

INSERT INTO `jzk_extend` (`ID`, `EventKey`, `Fopenid`, `Etime`) VALUES
(16, '14', 'ojWxNwgW4m2Gs3O2uoec5C_9p6ow', '2017-10-09'),
(18, '14', 'ojWxNwk0hpqs29cLtmz5gEPQumtc', '2017-10-11'),
(17, '14', 'ojWxNwrvFAUcXU2zMCFQu9tazudM', '2017-10-11'),
(19, '7', 'ojWxNwib2O42r3oxn5CdnVsABhrk', '2017-10-13'),
(20, '7', 'ojWxNwuF-SaxITQwAmu9v74AfDjo', '2017-10-14'),
(21, '14', 'ojWxNwhANuXkVvIMycIbfux2Lzf0', '2017-10-14'),
(22, '39', 'ojWxNwqSPEuplM6W5DLM-y1F3gjM', '2017-10-17');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_goods`
--

CREATE TABLE IF NOT EXISTS `jzk_goods` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名称',
  `goodsnum` int(10) NOT NULL COMMENT '库存',
  `goodsprice` decimal(10,2) NOT NULL COMMENT '商品价格',
  `score` int(10) NOT NULL COMMENT '商品积分',
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品品牌',
  `sales` int(10) NOT NULL COMMENT '商品销量',
  `orders` int(10) NOT NULL COMMENT '商品订单量',
  `comment` int(10) NOT NULL COMMENT '评论量',
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '尺寸',
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '颜色',
  `delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '快递费用',
  `detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT '商品详情',
  `flag` int(11) NOT NULL DEFAULT '0' COMMENT '商品状态(0未上架1上架)',
  `photo` text COLLATE utf8_unicode_ci NOT NULL COMMENT '商品图片上传',
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `jzk_goods`
--

INSERT INTO `jzk_goods` (`ID`, `goodsname`, `goodsnum`, `goodsprice`, `score`, `type`, `sales`, `orders`, `comment`, `size`, `color`, `delivery`, `detail`, `flag`, `photo`, `time`) VALUES
(7, '100元代金券', 100, '1.00', 500, '47', 2, 2, 0, '0', '0', '包邮', '此代金券可用于我们的论文服务项目，满200元即可使用。单次业务仅限使用一张。下单后联系客服使用。', 1, '/public/uploads/20171015/67ce425fcd964d5bccecd680fa2f59bf.jpg', '1506409837'),
(8, '100元话费', 49, '1.00', 666, '46', 1, 3, 0, 'L、X', '全色', '包邮', '此商品为话费100元，移动、联通、电信手机号码均可充值。拍下后把需要充值的手机号码发送到本微信公众号，由我们工作人员代为充值。', 1, '/public/uploads/20171010/7217ba857e822d6ad2d323dadf4769f1.jpg', '1506479683'),
(9, '知网VIP检测码', 99, '199.00', 380, '53', 1, 1, 0, 'L、', '全色', '包邮', '中国知网CNKI的VIP5.1检测码，TMLC2学术不端行为检测码。获取检测码后，请到我们的知网专属通道提交检测，检测网址：http://vip.yqlw.cn ，查重结果保证正品，可以到知网的官方网站验证结果。\r\n本商品适合：博硕毕业论文的查重。', 1, '/public/uploads/20171012/4245174da8688eb7c1813b173dfede08.jpg', '1506490837'),
(10, '万方论文查重码', 996, '1.50', 20, '53', 4, 1, 0, '单次卡', '全色', '包邮', '万方论文相似性检测适用于对毕业论文、新投稿论文等进行检测，检测范围有中国学术期刊数据库（CSPD）、中国学位论文全文数据库（CDDB）、中国学术会议论文数据库（CCPD）、中国学术网页数据库（CSWD）等。自主研发的“基于滑动窗口的低频特征部分匹配算法”，能准确识别细微改动，兼顾查全、查准 ，特点检测速度快，期刊论文检测仅需一秒，由于速度快，检测范围广，价格实惠，一般用于初期论文定稿修改使用。\r\n\r\n打开检测网址：http://wf.yqlw.cn 把论文题目、作者、论文内容复制进去后，点下一步，按提示要求的件数拍下相应件数，我们会发送检测码给您。您即可自助检测。', 1, '/public/uploads/20171012/63a9fc7fd571931c8647193b884314bb.jpg', '1506491247'),
(12, 'PaperPass论文查重码', 1000, '1.00', 50, '53', 0, 0, 0, '单件', '无色', '包邮', '    此商品为Paperpass论文通行证的查重检测码，拍付后联系客服索取检测码。论文检测通道：http://pp.yqlw.cn 输入论文点下一步输入检测码即可自助查重。\r\n    Paperpass论文通行证 全球首个中文文献相似度比对系统，运营多年来，已经发展成为最权威、最可信赖的中文原创性检查和预防剽窃的在线网站。系统自主研发的动态指纹越级扫描检测技术，已经领先于国内外其它检测系统所用技术，成为了论文抄袭检测技术的领导者。', 1, '/public/uploads/20171015/3861e3432d3261852d8392cd799bbd5a.jpg', '1508032926'),
(13, '200元论文代金券', 100, '1.00', 1288, '47', 0, 0, 0, '全码', '无色', '包邮', '本商品为易起论文网论文业务代金券，可在新购论文业务中使用。价格满500元即可使用，单次业务仅限一张。具体使用事宜请联系客服。', 1, '/public/uploads/20171015/8e73c0dc657b6985f24c1684a69a0a6e.png', '1508033855'),
(14, '陕西红富士苹果', 100, '20.00', 300, '46', 0, 0, 0, '5公斤装', '红色', '包邮', '编辑自家的苹果熟了，皮薄，脆甜，现摘现卖，送家人，送朋友，送同事，都是很不错的选择，纯天然的有机水果，包邮，一箱10斤装。原产地发货。现在20元现金加300积分换购一箱。如果要直接现金购买则是50元一箱。', 1, '/public/uploads/20171026/3c033e961fa55f4334944aacbb2bdda8.JPG', '1509008082');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_jifen`
--

CREATE TABLE IF NOT EXISTS `jzk_jifen` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `shop` varchar(20) NOT NULL COMMENT '购物返利积分比',
  `tuijian` varchar(20) NOT NULL COMMENT '推荐人购物返利',
  `qiandao` int(10) NOT NULL COMMENT '签到积分',
  `lunwen` varchar(20) NOT NULL COMMENT '论文订单返积分',
  `welcome` varchar(255) NOT NULL COMMENT '微信公众号欢迎语',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `jzk_jifen`
--

INSERT INTO `jzk_jifen` (`ID`, `shop`, `tuijian`, `qiandao`, `lunwen`, `welcome`) VALUES
(1, '3', '6', 10, '6', '欢迎您的关注，易起论文致力于提供科研工作者关心的各类学术论文相关资讯与服务，帮助科研工作者更好的写作与发表学术论文。此外，经常有各种优惠活动等着你噢！');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_keywords`
--

CREATE TABLE IF NOT EXISTS `jzk_keywords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(255) NOT NULL COMMENT '关键字',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `time` varchar(255) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `jzk_keywords`
--

INSERT INTO `jzk_keywords` (`id`, `keywords`, `content`, `time`) VALUES
(1, '8', '转发往期精彩里的图文到朋友圈即可获得100元论文服务抵用券一张。凭截图联系客服号（lunwen）索取或在本公众号回复email地址，我们稍后发送，谢谢。', '1508979573'),
(2, '1', '论文轻松写作的“秘诀”就是点击公众号下方的“论文服务”菜单，再点击“发起订单”子菜单，填写你的要求，接下来就交给我们啦 ：）', '1508979573'),
(3, '3', '2', '1508979573'),
(4, '4', '3', '1508979573'),
(5, '5', '4', '1508979573');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_order`
--

CREATE TABLE IF NOT EXISTS `jzk_order` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `order` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单编号',
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `usertel` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '联系方式',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '联系邮箱',
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '微信名',
  `WID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '微信会员ID',
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单服务类型(1代写2发表3修改4包发)',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '题目',
  `word` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '论文字数',
  `ctime` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '完成时间',
  `fatime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '发表时间',
  `ftime` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单提交时间',
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文稿类型',
  `major` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '专业方向',
  `require` text COLLATE utf8_unicode_ci NOT NULL COMMENT '论文需求',
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '期刊级别(0省级1国家级2科技3中文4css5EI6暂不)',
  `price` decimal(10,2) DEFAULT '0.00' COMMENT '金额',
  `flag` int(10) NOT NULL COMMENT '订单状态(0已付款1未付款2待审核)',
  `complete` int(10) NOT NULL COMMENT '项目进度(文稿、修改：0未开工1开工2完初3反馈4完成；发表：0未送核1稿件送审2已录用3待出刊4已出刊5返修6退稿；包写发：0项目未开工1写作中2完成3送审4已录用5待出刊6已出刊)',
  `modify` int(10) DEFAULT '0' COMMENT '论文修改类型(0修改内容1降低重复2修改格式3整体润色4其他修改)',
  `nowrep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '当前重复率',
  `repeat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '修改后的重复率或重复率要求',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `jzk_order`
--

INSERT INTO `jzk_order` (`ID`, `order`, `username`, `usertel`, `email`, `nickname`, `WID`, `service`, `title`, `word`, `ctime`, `fatime`, `ftime`, `type`, `major`, `require`, `level`, `price`, `flag`, `complete`, `modify`, `nowrep`, `repeat`) VALUES
(53, '201710267001', '麻旭娥', '13615788289', '878148012@qq.com', '九日', '1103927', '1', '你们定', '2000到3000', '1510243200', NULL, '1509002674', '高中德育案例', '德育案例', '已经发给客服', NULL, '850.00', 0, 4, NULL, NULL, '20'),
(52, '201710259639', '张纪轩', '13775127663', '1062503510@qq.com', '似水流年', '1427310', '4', '人力资源', '5000', '0', '3个月内', '1508928086', NULL, NULL, '人民论坛 转让，总价2.9万，先付定金5000元。', NULL, '5000.00', 0, 1, NULL, NULL, NULL),
(46, '201710153109', '李帅', '15802355657', '1475354992@qq.com', '逝去的青春', '1725643', '1', '装饰设计在室内的地位及作用', '8000', '1508256000', NULL, '1508063334', '毕业论文', '环境艺术设', '', NULL, '900.00', 1, 0, NULL, NULL, '重复率低于15%'),
(39, '201710137192', '晓婷', '13916909548', '935719149@qq.com', '❤️晓婷✨이종석', '1245733', '1', '', '5000', '1512835200', NULL, '1507897034', '毕业论文', '护理', '正文3500字加开题报告', NULL, '2000.00', 0, 1, NULL, NULL, '。'),
(51, '201710253787', '王彬', '13997047850', '15408292@qq.com', '暮杉', '1518853', '4', '水工环专业方面', '3000字左右', '0', '一年内发表', '1508901085', NULL, NULL, '总价2.5万 版面费自理，已收定金5000', NULL, '5000.00', 0, 0, NULL, NULL, NULL),
(45, '201710142444', '王静', '18561251186', 'whwjykwj@163.com', '揽不住要走的风', '1958856', '4', '', '2000字左右', '0', '3个月', '1507990686', NULL, NULL, '高中数学解题的小技巧的应用', NULL, '1500.00', 0, 5, NULL, NULL, NULL),
(41, '201710142020', '宋刚', '18903386893', '32367263@qq.com', '宋刚', '1504104', '2', '在建工程消防安全管理工作探析', '1900', '0', '一个月以内', '1507945088', NULL, NULL, '《消防界》', NULL, '900.00', 0, 3, NULL, NULL, NULL),
(48, '201710169762', '张代', '15896451161', 'zhang.daimin@yahoo.com', '张代民', '1844021', '4', '', '3000', '0', '2个月', '1508166085', NULL, NULL, '高中语文教学（苏教版，或人教版）方面的。2篇', NULL, '2000.00', 0, 4, NULL, NULL, NULL),
(54, '201710304250', '鲁冰兵', '13021313520', '524059638@qq.com', '荡意平心', '1295254', '2', '臧力学教授治疗原发性痛经验案一则', '2000左右', '0', '1个月左右', '1509373230', NULL, NULL, '', NULL, '600.00', 0, 3, NULL, NULL, NULL),
(55, '201711086676', '杨磊', '15824808696', '529630351@qq.com', '丫丫', '1107443', '2', '经济管理，财会', '3000', '0', '一年内', '1510136814', NULL, NULL, '期刊需要知网，万方收录 两篇论文都财讯 理财 等期刊', NULL, '1000.00', 0, 0, NULL, NULL, NULL),
(56, '201711097067', '江珊珊', '13735892035', '13735892035@163.com', '三仨 ', '1472436', '2', '教育教学', '2500字符内', '0', '', '1510221102', NULL, NULL, '双11活动，299元一版。', NULL, '299.00', 0, 3, NULL, NULL, NULL),
(57, '201711102724', '赵茵', '13861000333', '673345023@qq.com', '赵', '1307586', '2', '未定', '2500字符', '0', '', '1510325399', NULL, NULL, '299元发一版。双十一论文活动', NULL, '299.00', 0, 0, NULL, NULL, NULL),
(58, '201711147915', '孙曦', '18670020919', '313437993@qq.com', 'CICI', '1646157', '1', '互联网金融', '6000-8000', '1511280000', NULL, '1510648154', '参赛', '金融', '', NULL, '1000.00', 0, 1, NULL, NULL, '低于百分之二十');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_qiandao`
--

CREATE TABLE IF NOT EXISTS `jzk_qiandao` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `WID` int(20) NOT NULL COMMENT '签到的用户微信ID',
  `time` date NOT NULL COMMENT '签到的时间',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `jzk_qiandao`
--

INSERT INTO `jzk_qiandao` (`ID`, `WID`, `time`) VALUES
(9, 171838, '2017-10-09'),
(4, 1758941, '2017-09-14'),
(5, 1514587, '2017-10-14'),
(6, 1224945, '2017-09-14'),
(7, 1765747, '2017-10-30'),
(10, 1958856, '2017-11-10'),
(11, 1242053, '2017-10-14'),
(12, 1504104, '2017-10-14'),
(13, 1679638, '2017-10-16'),
(14, 1882446, '2017-10-16'),
(15, 1322802, '2017-10-16'),
(16, 1245349, '2017-10-16'),
(17, 1591198, '2017-10-17'),
(18, 1878765, '2017-10-17'),
(19, 1535964, '2017-10-19'),
(20, 1576037, '2017-10-22'),
(21, 1778433, '2017-10-31'),
(22, 1646157, '2017-11-14');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_set`
--

CREATE TABLE IF NOT EXISTS `jzk_set` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL COMMENT '内容',
  `date` date NOT NULL COMMENT '生成日期',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `jzk_set`
--

INSERT INTO `jzk_set` (`ID`, `content`, `date`) VALUES
(5, '["<h3 style=\\"text-align:center\\">\\n    <strong><span style=\\"font-family: \\u5b8b\\u4f53;font-size: 21px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\u6613\\u8d77\\u8bba\\u6587\\u7f51\\u53ef\\u53d1\\u8868\\u671f\\u520a<\\/span><\\/span><\\/strong><strong><span style=\\"font-family: &#39;Times New Roman&#39;;font-size: 21px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\u76ee\\u5f55<\\/span><\\/span><\\/strong>\\n<\\/h3>\\n<h3 style=\\"text-align:center\\">\\n    <strong><span style=\\"font-family: &#39;Times New Roman&#39;;font-size: 21px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\uff08<\\/span>201<\\/span><\\/strong><strong><span style=\\"font-family: \\u5b8b\\u4f53;font-size: 21px\\">7<\\/span><\\/strong><strong><span style=\\"font-family: \\u5b8b\\u4f53;font-size: 21px\\">-201<\\/span><\\/strong><strong><span style=\\"font-family: \\u5b8b\\u4f53;font-size: 21px\\">8<\\/span><\\/strong><strong><span style=\\"font-family: &#39;Times New Roman&#39;;font-size: 21px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\u5e74\\uff09<\\/span><\\/span><\\/strong>\\n<\\/h3>\\n<p style=\\"text-align:center\\">\\n    <span style=\\";font-family:\\u5b8b\\u4f53;color:rgb(255,0,0);font-size:14px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\u6b22\\u8fce\\u52a0\\u6613\\u8d77\\u8bba\\u6587\\u5fae\\u4fe1\\u53f7\\uff1a<\\/span>lunwen\\uff0c\\u83b7\\u53d6\\u6700\\u65b0\\u6838\\u5fc3\\u671f\\u520a\\u8bba\\u6587\\u8f6c\\u8ba9\\u4fe1\\u606f\\u3002<\\/span>\\n<\\/p>\\n<p>\\n    <img src=\\"\\/public\\/uploads\\/20171027\\/1509074554646896.gif\\" title=\\"1509074554646896.gif\\" alt=\\"\\u6613\\u8d77\\u8bba\\u6587\\u7f51\\u671f\\u520a\\u5217\\u8868\\uff08\\u65b0\\uff09_02.gif\\" width=\\"100%\\"\\/>\\n<\\/p>\\n<p>\\n    <span style=\\"font-family: \\u5b8b\\u4f53;font-size: 14px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\u6613\\u8d77\\u8bba\\u6587\\u7f51<\\/span> <\\/span><a href=\\"http:\\/\\/www.17net.net\\"><span style=\\"text-decoration:underline;\\"><span style=\\"font-family: \\u5b8b\\u4f53;color: rgb(0, 0, 255);font-size: 14px\\">www.17net.net<\\/span><\\/span><\\/a><span style=\\"font-family: \\u5b8b\\u4f53;font-size: 14px\\">&nbsp;since2003\\uff0c\\u4e13\\u4e1a\\u8bba\\u6587\\u5199\\u4f5c\\u4e0e\\u53d1\\u8868\\u670d\\u52a1!<\\/span>\\n<\\/p>\\n<p>\\n    <span style=\\"font-family: \\u5b8b\\u4f53;font-size: 14px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\u52a0\\u6613\\u8d77\\u8bba\\u6587\\u5fae\\u4fe1\\u53f7\\uff1a<\\/span>lunwen\\uff0c\\u83b7\\u53d6\\u6700\\u65b0\\u6838\\u5fc3\\u671f\\u520a\\u8bba\\u6587\\u8f6c\\u8ba9\\u4fe1\\u606f\\u3002<\\/span>\\n<\\/p>\\n<p>\\n    <span style=\\";font-family:\\u5b8b\\u4f53;font-size:16px\\"><span style=\\"font-family:\\u5b8b\\u4f53\\">\\u6768\\u8001\\u5e08<\\/span> QQ 8651658\\uff0c\\u5fae\\u4fe1\\uff1alunwen\\uff0c\\u90ae\\u7bb1\\uff1a<\\/span><a href=\\"mailto:yqlw@vip.qq.com\\"><span style=\\"text-decoration:underline;\\"><span style=\\"font-family: \\u5b8b\\u4f53;color: rgb(0, 0, 255)\\">yqlw@vip.qq.com<\\/span><\\/span><\\/a><span style=\\";font-family:\\u5b8b\\u4f53;font-size:16px\\">&nbsp;<span style=\\"font-family:\\u5b8b\\u4f53\\">\\uff0c<\\/span> <span style=\\"font-family:\\u5b8b\\u4f53\\">\\u7535\\u8bdd<\\/span>1<\\/span><span style=\\";font-family:\\u5b8b\\u4f53;font-size:16px\\">7051056565<\\/span>\\n<\\/p>\\n<p>\\n    <br\\/>\\n<\\/p>"]', '2017-10-08'),
(6, '["<p style=\\"text-align: center;\\"><strong><span style=\\"font-size: 20px;\\"><span style=\\"font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1, \\">&nbsp;\\u6613\\u8d77\\u8bba\\u6587\\u5ba2\\u670d<\\/span>\\uff1a<\\/span><\\/strong><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp;\\u5fae\\u4fe1\\u5ba2\\u670d\\uff1alunwen<\\/span><br\\/><\\/p><p style=\\"text-align: center;\\">&nbsp;<img src=\\"\\/public\\/uploads\\/20171007\\/1507365055118677.jpg\\" title=\\"1507365055118677.jpg\\" alt=\\"lianxi.jpg\\" width=\\"307\\" height=\\"431\\"\\/><\\/p><p><br\\/><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp;\\u5ba2\\u670d\\u7535\\u8bdd\\uff1a170-5105-6565<\\/span><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp;\\u5ba2\\u670dQQ\\uff1a8651658\\uff08\\u6768\\u8001\\u5e08\\uff09&nbsp;&nbsp;<\\/span><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp; &nbsp; 8917651\\uff08\\u674e\\u8001\\u5e08\\uff09<\\/span><\\/p><p><br\\/><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp;E-mail\\uff1a yqlw@vip.qq.com\\uff08\\u6768\\u8001\\u5e08\\uff09<\\/span><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp; &nbsp; &nbsp; &nbsp; qikan51@qq.com\\uff08\\u674e\\u8001\\u5e08\\uff09<br\\/><\\/span><\\/p><p><br\\/><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp;\\u5fae\\u4fe1\\u516c\\u4f17\\u53f7\\uff1alunwenchina<br\\/><\\/span><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp;\\u65b0\\u6d6a\\u5fae\\u535a\\uff1a&nbsp;<span style=\\"font-size: 16px; font-family: arial, helvetica, sans-serif;\\"><a href=\\"http:\\/\\/weibo.com\\/315636888\\">http:\\/\\/weibo.com\\/315636888<\\/a>&nbsp; &nbsp;&nbsp;<\\/span><\\/span><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\">&nbsp;\\u5b98\\u65b9\\u7f51\\u7ad9\\uff1a <span style=\\"font-size: 16px; font-family: arial, helvetica, sans-serif;\\"><a href=\\"http:\\/\\/www.17net.net\\" target=\\"_self\\">www.17net.net<\\/a>&nbsp; \\u6216&nbsp; <a href=\\"http:\\/\\/www.yqlw.cn\\">www.yqlw.cn<\\/a><\\/span><\\/span><\\/p><p style=\\"text-align: center;\\"><span style=\\"font-size: 16px;\\"><br\\/><\\/span><\\/p><p><br\\/><\\/p><p><br\\/><\\/p><p><\\/p><p><section>\\n\\t\\t\\t\\t\\t<section><img src=\\"\\/public\\/uploads\\/20171026\\/1508988090664410.png\\" title=\\"1508988090664410.png\\" alt=\\"QQ\\u56fe\\u724720171026111743.png\\"\\/><\\/section><\\/section><\\/p><p><\\/p><p><br\\/><\\/p><p><br\\/><\\/p><p style=\\"white-space: normal; text-align: center;\\"><strong><span style=\\"font-size: 20px;\\">\\u6613\\u8d77\\u8bba\\u6587\\u6c47\\u6b3e\\u65b9\\u5f0f\\uff1a<\\/span><\\/strong><\\/p><p style=\\"white-space: normal; text-align: center;\\">&nbsp;\\u9664\\u4e86\\u81ea\\u5e26\\u5fae\\u4fe1\\u652f\\u4ed8\\u5916\\uff0c\\u8fd9\\u91cc\\u8fd8\\u5217\\u4e3e\\u94f6\\u884c\\u6c47\\u6b3e\\uff0c\\u652f\\u4ed8\\u5b9d\\u652f\\u4ed8\\uff0c\\u5fae\\u4fe1\\u8f6c\\u8d26\\u7b49\\u6c47\\u6b3e \\u65b9\\u5f0f\\u3002\\u6ce8\\uff1a\\u8f6c\\u8d26\\u8bf7\\u5907\\u6ce8\\u4e2a\\u4eba\\u4fe1\\u606f\\u3001\\u8ba2\\u5355\\u7f16\\u53f7\\u7b49\\u76f8\\u5173\\u4fe1\\u606f\\u3002<\\/p><p style=\\"white-space: normal;\\"><br\\/><\\/p><p style=\\"white-space: normal; text-align: center;\\"><span style=\\"font-size: 18px;\\"><strong>&nbsp;\\u652f\\u4ed8\\u5b9d\\u652f\\u4ed8\\uff1a<\\/strong><\\/span><\\/p><p style=\\"white-space: normal; text-align: center;\\">&nbsp;\\u652f\\u4ed8\\u5b9d\\u8f6c\\u8d26\\uff1a 8651658@qq.com<\\/p><p style=\\"white-space: normal; text-align: center;\\">&nbsp;\\u652f\\u4ed8\\u5b9d\\u626b\\u7801\\u652f\\u4ed8\\uff1a<br\\/><\\/p><p style=\\"white-space: normal; text-align: center;\\">&nbsp;<img src=\\"http:\\/\\/lunwen.jiezanke.com\\/public\\/uploads\\/20171008\\/1507424519621938.png\\" title=\\"1507424519621938.png\\" alt=\\"zhifubao.png\\" width=\\"358\\" height=\\"436\\"\\/><\\/p><p style=\\"white-space: normal;\\"><br\\/><\\/p><p style=\\"white-space: normal; text-align: center;\\"><strong>&nbsp;<\\/strong><\\/p><p style=\\"white-space: normal; text-align: center;\\"><strong>&nbsp;\\u5fae\\u4fe1\\u8f6c\\u8d26\\uff1a<\\/strong><\\/p><p style=\\"white-space: normal; text-align: center;\\">&nbsp;\\u52a0\\u6613\\u8d77\\u8bba\\u6587\\u5ba2\\u670d\\u5fae\\u4fe1\\u53f7\\uff1alunwen \\u8f6c\\u8d26<\\/p><p style=\\"white-space: normal; text-align: center;\\">&nbsp;<img src=\\"http:\\/\\/lunwen.jiezanke.com\\/public\\/uploads\\/20171008\\/1507426951371751.jpg\\" title=\\"1507426951371751.jpg\\" alt=\\"lianxi.jpg\\" width=\\"304\\" height=\\"409\\"\\/><\\/p><p style=\\"white-space: normal;\\"><br\\/><\\/p><p style=\\"white-space: normal; text-align: center;\\"><strong style=\\"font-size: 18px;\\">&nbsp;\\u5bf9\\u516c\\u8d26\\u53f7\\u8f6c\\u8d26\\uff1a<\\/strong><\\/p><p style=\\"white-space: normal; text-align: center;\\">\\u4e2d\\u56fd\\u5efa\\u8bbe\\u94f6\\u884c\\u676d\\u5dde\\u5e86\\u6625\\u652f\\u884c<\\/p><p style=\\"white-space: normal; text-align: center;\\">\\u6237\\u540d\\uff1a\\u676d\\u5dde\\u664b\\u5347\\u6587\\u5316\\u4f20\\u64ad\\u6709\\u9650\\u516c\\u53f8<\\/p><p style=\\"white-space: normal; text-align: center;\\">\\u8d26\\u6237\\uff1a33050161782700000152<\\/p><p style=\\"white-space: normal;\\"><br\\/><\\/p><p><br\\/><\\/p><p><br\\/><\\/p><p><br\\/><\\/p><p><br\\/><\\/p><p><br\\/><\\/p>"]', '2017-10-08'),
(7, '["<section><section><section><section><p><span style=\\"font-family: \\u9ed1\\u4f53, SimHei;\\">\\u6613\\u8d77\\u8bba\\u6587\\u7f51\\uff08www.17net.net\\uff09\\u521b\\u529e\\u4e8e2003\\u5e74\\uff0c\\u662f\\u4e00\\u5bb6\\u7efc\\u5408\\u6027\\u8bba\\u6587\\u670d\\u52a1\\u7f51\\u7ad9\\uff0c\\u901a\\u8fc7\\u5341\\u51e0\\u5e74\\u7684\\u53d1\\u5c55\\uff0c\\u79ef\\u7d2f\\u4e86\\u4e30\\u5bcc\\u7684\\u4eba\\u8109\\u8d44\\u6e90\\u3002\\u6211\\u4eec\\u4ee5\\u4f18\\u8d28\\u3001\\u8bda\\u4fe1\\u7684\\u670d\\u52a1\\u8d62\\u5f97\\u4e86\\u5e7f\\u5927\\u7528\\u6237\\u7684\\u597d\\u8bc4\\uff01\\u6211\\u4eec\\u5c06\\u4e0d\\u5fd8\\u521d\\u5fc3\\uff0c\\u7ee7\\u7eed\\u4e3a\\u5927\\u5bb6\\u63d0\\u4f9b\\u66f4\\u4f18\\u8d28\\u7684\\u8bba\\u6587\\u670d\\u52a1\\uff0c\\u975e\\u5e38\\u611f\\u8c22\\u60a8\\u7684\\u652f\\u6301\\uff01<\\/span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br\\/>\\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<\\/p><p style=\\"text-align: center;\\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br\\/><\\/p><p style=\\"text-align: center;\\"><span style=\\"text-align: center;\\"><img src=\\"\\/public\\/uploads\\/20171031\\/1509448429435524.jpg\\" title=\\"1509448429435524.jpg\\" alt=\\"ywjs.JPG\\" width=\\"399\\" height=\\"55\\"\\/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<\\/span>\\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<\\/p><\\/section><\\/section><\\/section><\\/section><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\"><span style=\\"color: rgb(255, 0, 0);\\"><strong>\\u4e00\\u3001\\u8bba\\u6587\\u5199\\u4f5c\\u670d\\u52a1<\\/strong><\\/span><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; \\u8bba\\u6587\\u5199\\u4f5c\\u662f\\u79d1\\u7814\\u5de5\\u4f5c\\u8005\\u9700\\u8981\\u638c\\u63e1\\u7684\\u57fa\\u672c\\u6280\\u80fd\\u3002\\u5982\\u6709\\u5199\\u4f5c\\u9700\\u6c42\\u8bf7\\u76f4\\u63a5\\u63d0\\u4ea4\\u8ba2\\u5355\\u6216\\u4e0e\\u5ba2\\u670d\\u8054\\u7cfb\\u3002<\\/p><p><br\\/><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal;  color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\"><strong><span style=\\"color: rgb(255, 0, 0);\\">\\u4e8c\\u3001\\u8bba\\u6587\\u53d1\\u8868\\u670d\\u52a1<\\/span><\\/strong><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal;  color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;1\\u3001\\u6211\\u4eec\\u63d0\\u4f9b\\u4e2d\\u6587\\u6838\\u5fc3\\u671f\\u520a\\u3001CSSCI\\u6838\\u5fc3\\u671f\\u520a\\u3001\\u79d1\\u6280\\u7edf\\u8ba1\\u6e90\\u6838\\u5fc3\\u671f\\u520a\\u3001\\u56fd\\u5bb6\\u7ea7\\u671f\\u520a\\u3001\\u7701\\u7ea7\\u671f\\u520a\\u3001\\u9ad8\\u6821\\u5b66\\u62a5\\u3001\\u62a5\\u520a\\u5b66\\u672f\\u7248\\u7b49\\u5404\\u7c7b\\u671f\\u520a\\u62a5\\u520a\\u8bba\\u6587\\u4ee3\\u53d1\\u670d\\u52a1\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;2\\u3001\\u6211\\u4eec\\u63d0\\u4f9b\\u9ad8\\u7ea7\\u804c\\u79f0\\u8bba\\u6587\\u3001\\u4e2d\\u7ea7\\u804c\\u79f0\\u8bba\\u6587\\u5199\\u53d1\\u4e00\\u6761\\u9f99\\u670d\\u52a1\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal;color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;3\\u3001\\u6211\\u4eec\\u63d0\\u4f9b\\u8bfe\\u9898\\u8bba\\u6587\\u521b\\u4f5c\\u4e0e\\u53d1\\u8868\\u4e00\\u6761\\u9f99\\u670d\\u52a1\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;4\\u3001\\u6211\\u4eec\\u63d0\\u4f9bSCI\\u3001EI\\u3001\\u56fd\\u9645\\u671f\\u520a\\u53d1\\u8868\\u670d\\u52a1\\u3002<\\/p><p><strong style=\\"color: rgb(255, 0, 0); font-family: \\u5b8b\\u4f53; font-size: 14px;\\"><br\\/><\\/strong><\\/p><p><strong style=\\"color: rgb(255, 0, 0); font-family: \\u5b8b\\u4f53; font-size: 14px;\\">\\u4e09\\u3001\\u516c\\u6587\\u670d\\u52a1<\\/strong><br\\/><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal;color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; \\u6211\\u4eec\\u63d0\\u4f9b\\u5404\\u7c7b\\u5de5\\u4f5c\\u603b\\u7ed3\\u3001\\u8c03\\u67e5\\u62a5\\u544a\\u3001\\u6f14\\u8bb2\\u7a3f\\u3001\\u53d1\\u8a00\\u7a3f\\u3001\\u5fc3\\u5f97\\u4f53\\u4f1a\\u3001\\u6cd5\\u5f8b\\u6587\\u4e66\\u3001\\u4e13\\u5229\\u6750\\u6599\\u7b49\\u516c\\u6587\\u670d\\u52a1\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal;color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp;&nbsp;<\\/p><p><strong style=\\"color: rgb(255, 0, 0); font-family: \\u5b8b\\u4f53; font-size: 14px;\\">\\u56db\\u3001\\u8bba\\u6587\\u67e5\\u91cd\\u670d\\u52a1<\\/strong><br\\/><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; 1\\u3001\\u6211\\u4eec\\u63d0\\u4f9b\\u4e2d\\u56fd\\u77e5\\u7f51\\u3001\\u4e07\\u65b9\\u3001\\u7ef4\\u666e\\u3001PAPERPASS\\u3001CHECKPASS\\u7b49\\u5404\\u7c7b\\u8bba\\u6587\\u590d\\u5236\\u7387\\u67e5\\u91cd\\u68c0\\u6d4b\\u670d\\u52a1\\uff0c\\u5177\\u4f53\\u8bf7\\u8054\\u7cfb\\u5ba2\\u670d\\u83b7\\u53d6\\u68c0\\u6d4b\\u67e5\\u91cd\\u7801\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal;  color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; 2\\u3001\\u63d0\\u4f9b\\u8bba\\u6587\\u964d\\u4f4e\\u6284\\u88ad\\u590d\\u5236\\u7387\\u7684\\u8bba\\u6587\\u4fee\\u6539\\u670d\\u52a1\\uff0c\\u53ef\\u6839\\u636e\\u8981\\u6c42\\u5728\\u4e0d\\u6539\\u53d8\\u539f\\u610f\\u60c5\\u51b5\\u4e0b\\u628a\\u8bba\\u6587\\u590d\\u5236\\u7387\\u964d\\u4f4e\\u5230\\u5408\\u7406\\u8303\\u56f4\\u5185\\u3002<\\/p><p><br\\/><\\/p><p style=\\"padding: 0px; color: rgb(68, 68, 68); white-space: normal; \\"><span style=\\"font-family: \\u9ed1\\u4f53, sans-serif;\\"><strong><strong><strong style=\\"color: rgb(255, 0, 0); font-family: \\u5b8b\\u4f53; font-size: 14px;\\">\\u4e94\\u3001\\u8457\\u4f5c\\u51fa\\u7248\\u670d\\u52a1<\\/strong><\\/strong><\\/strong><\\/span><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal;  color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;1\\u3001\\u6211\\u4eec\\u63d0\\u4f9b\\u4e66\\u7a3f\\u7f16\\u64b0\\u3001\\u8d2d\\u4e70\\u4e66\\u53f7\\u3001\\u5370\\u5237\\u51fa\\u7248\\u4e00\\u6761\\u9f99\\u670d\\u52a1\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 14px; white-space: normal; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;2\\u3001\\u6211\\u4eec\\u4e5f\\u53ef\\u4ee5\\u5e2e\\u5fd9\\u8054\\u7cfb\\u51fa\\u7248\\u793e\\uff0c\\u63d0\\u4f9b\\u4ee3\\u51fa\\u4e66\\u670d\\u52a1\\u3002<\\/p><p><br\\/><\\/p><p style=\\"white-space: normal; padding: 0px; color: rgb(68, 68, 68);\\"><span style=\\"font-family: \\u9ed1\\u4f53, sans-serif;\\"><strong><strong><strong style=\\"color: rgb(255, 0, 0); font-family: \\u5b8b\\u4f53; font-size: 14px;\\">\\u516d\\u3001\\u8bba\\u6587\\u7ffb\\u8bd1\\u670d\\u52a1<\\/strong><\\/strong><\\/strong><\\/span><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; font-size: 14px; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;1\\u3001\\u6211\\u4eec\\u63d0\\u4f9b\\u8bba\\u6587\\u4e92\\u8bd1\\u670d\\u52a1\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; font-size: 14px; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\">&nbsp; &nbsp;2\\u3001\\u6587\\u732e\\u8d44\\u6599\\u7ffb\\u8bd1\\u670d\\u52a1\\u3002<\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; font-size: 14px; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\"><br\\/><\\/p><p style=\\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; font-size: 14px; color: rgb(33, 33, 33); line-height: 25px; font-family: \\u5b8b\\u4f53;\\"><br\\/><\\/p><p>\\u516c\\u4f17\\u53f7\\u4f7f\\u7528\\u8bf4\\u660e\\uff1a<span style=\\"text-decoration: underline; color: rgb(0, 112, 192);\\"><a href=\\"https:\\/\\/mp.weixin.qq.com\\/s?__biz=MzI1OTg1Mzk2NQ==&mid=2247483654&idx=1&sn=22e2c05b6e31b7a01a2948b17403b157&chksm=ea73dae4dd0453f2ced2a97663d316c6dec11daf1504f4af87ccdf7ac99b7e16a2c36a223d53#rd\\" target=\\"_blank\\" style=\\"text-decoration: underline; color: rgb(0, 112, 192);\\">\\u70b9\\u51fb\\u67e5\\u770b<\\/a><\\/span><\\/p><p><img src=\\"http:\\/\\/lunwen.jiezanke.com\\/public\\/uploads\\/20171031\\/1509430397386640.jpg\\" title=\\"1509430397386640.jpg\\" alt=\\"fjx2.JPG\\" width=\\"100%\\" height=\\"48\\"\\/><\\/p><p><br\\/><\\/p><p><br\\/><\\/p>"]', '2017-10-08');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_shopcart`
--

CREATE TABLE IF NOT EXISTS `jzk_shopcart` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `WID` int(20) NOT NULL,
  `goodsid` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品ID',
  `num` int(10) NOT NULL COMMENT '商品数量',
  `score` int(10) NOT NULL COMMENT '商品积分',
  `price` decimal(10,2) NOT NULL COMMENT '商品单价',
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '尺寸',
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品颜色',
  `shopflag` int(11) NOT NULL DEFAULT '1' COMMENT '商品状态(0未上架1上架)',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- 表的结构 `jzk_shoporder`
--

CREATE TABLE IF NOT EXISTS `jzk_shoporder` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '购买商品的名称',
  `photo` text COLLATE utf8_unicode_ci NOT NULL COMMENT '商品图片信息',
  `goodsprice` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品单价',
  `goodsscore` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品单积分',
  `num` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品对应的数量',
  `total` decimal(10,2) NOT NULL COMMENT '总价',
  `yunfei` decimal(10,2) NOT NULL COMMENT '商品运费',
  `score` int(12) NOT NULL COMMENT '总积分',
  `flag` int(10) NOT NULL DEFAULT '0' COMMENT '订单状态(0未付款1已付款)',
  `shopflag` int(10) NOT NULL DEFAULT '0' COMMENT '0未发货1已发货2已收货',
  `WID` int(15) NOT NULL,
  `ordernumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单编号',
  `time` datetime NOT NULL COMMENT '日期',
  `addname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '收货人姓名',
  `addtel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '联系人电话',
  `addcity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '收货人省市',
  `addcitydetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '详细地址',
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` int(11) NOT NULL DEFAULT '0' COMMENT '0未评论1已评论',
  `wuliu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '期望物流',
  `wu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '发货物流',
  `wuliunum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '物流编号',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- 转存表中的数据 `jzk_shoporder`
--

INSERT INTO `jzk_shoporder` (`ID`, `goodsname`, `photo`, `goodsprice`, `goodsscore`, `num`, `total`, `yunfei`, `score`, `flag`, `shopflag`, `WID`, `ordernumber`, `time`, `addname`, `addtel`, `addcity`, `addcitydetail`, `size`, `color`, `comment`, `wuliu`, `wu`, `wuliunum`) VALUES
(54, '100元话费', '/public/uploads/20171010/7217ba857e822d6ad2d323dadf4769f1.jpg', '0.01', '666', '1', '0.01', '0.00', 666, 1, 2, 1765747, '201710124178', '2017-10-12 21:36:58', '杨老师', '17051056565', '浙江省,杭州市,萧山区 ', '文昌大厦', 'L', '全色', 1, '', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `jzk_user`
--

CREATE TABLE IF NOT EXISTS `jzk_user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `WID` int(30) NOT NULL COMMENT '微信会员ID',
  `openid` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '注册姓名',
  `nickname` varchar(255) NOT NULL COMMENT '微信姓名',
  `tel` varchar(15) NOT NULL COMMENT '注册电话',
  `headimgurl` varchar(255) NOT NULL COMMENT '微信头像',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `score` int(30) NOT NULL COMMENT '积分',
  `email` varchar(255) NOT NULL COMMENT '注册邮箱',
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=65 ;

--
-- 转存表中的数据 `jzk_user`
--

INSERT INTO `jzk_user` (`ID`, `WID`, `openid`, `name`, `nickname`, `tel`, `headimgurl`, `balance`, `score`, `email`, `date`) VALUES
(14, 1514587, 'ojWxNwhdIBAsdkH35UVuNRBjbhtY', '福鼎市', '叶陈彬', '15818311234', 'http://wx.qlogo.cn/mmopen/vi_32/RqAIt1x7pOh5RFCXWA0BpO0TPkX5cgIyRGV7VH73ibOgiceItRicRuGZ8opXhPblgfWNKsrEmQl4fdctW2MJAxCAA/0', '0.00', 8220, '444@qq.com', '2017-09-14'),
(7, 1765747, 'ojWxNwpnuMbkEmjWW0XF6wjJKT3k', '易起', '「易起论文」', '17051056565', 'http://wx.qlogo.cn/mmopen/vi_32/Q3auHgzwzM53ibLyMoicYK27AdpySXeBtashLQH9QRLpvBElA5kKckRh2kwEsMqY99Gic8oOOeOAFpCo4602bNQoA/0', '0.00', 50, 'yqlw@vip.qq.com', '2017-09-12'),
(21, 1778433, 'ojWxNwrvFAUcXU2zMCFQu9tazudM', '曾尚杰', '曾尚杰 微信超級會員', '13423230504', 'http://wx.qlogo.cn/mmopen/vi_32/fLyyRxDu0Aw6qWEdy0IZx8AIBcTTPho6qLUGO1uWwUMiaRbPoqsGzBlzKIDAkLzRQhGYTPGahsaAeWmXnPlK5Gg/0', '0.00', 10, '6256588894@qq.com', '2017-10-11'),
(16, 1882446, 'ojWxNwi8m0So8dxASqklW4OZRlDc', '徐先生', 'Yeco～', '13248413721', 'http://wx.qlogo.cn/mmopen/vi_32/Q3auHgzwzM5u4rb5HHJRYYQSYaic87KQAAelvfmXdG1575MgezJ4cib6aF2pJjuMCwbkJ8dMkomhSHaZicoQGfC9w/0', '0.00', 10, 'yecocn@qq.com', '2017-09-18'),
(17, 1464691, 'ojWxNwtNzv9laWrl_7cOtOrwccHE', '诸葛胜', '诸葛༒莫愁༻', '13587663668', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83erOUqC7b66RmGesESjv9avZ1gSFXrkjsibxIxicTGMKdsqqtzTZJS8jiay7ORxCZtmzPiafCMOgSUY8rQ/0', '0.00', 0, 'wzvtc@126.com', '2017-09-28'),
(20, 181451, 'ojWxNwgW4m2Gs3O2uoec5C_9p6ow', '黄咯哈', '江六斤????', '13712341234', 'http://wx.qlogo.cn/mmopen/vi_32/k6ibq9k3DsHhZShn51GVJ9ypfqcNDzIW8Og3mZvVTxnXNbsD3EphQRiadUdtYNkQ9PIiaYuGicXVXft7jOIQnzWu3g/0', '0.00', 0, '2546@gg', '2017-10-09'),
(22, 1245733, 'ojWxNwib2O42r3oxn5CdnVsABhrk', '晓婷', '❤️晓婷✨이종석', '13916909548', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eodvgD5BFKoREEicicyLzKyOWeXn9aVbp4PHnsFaNGGMlhAssWvlPAAJ1QmjAdNF2XbVibn6v6OicWEDA/0', '0.00', 100, '935719149@qq.com', '2017-10-13'),
(23, 1958856, 'ojWxNwkAjNqiHPBo3fe4FGli9_mg', '王静', '揽不住要走的风', '18561251186', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJ5KcXpC9UviaXdLwmAqCZabn5a0LBFC7tABCCKh5Bw3SBnbLJkV7VwLcw3MlsiaQTCvgFqWnvI9DMw/0', '0.00', 120, 'whwjykwj@163.com', '2017-10-13'),
(24, 1503253, 'ojWxNwqgxmzWzPOGhGEJT1C2rSFE', '王文博', '岁月匆匆', '17719942590', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLptarRKqviaOdZQibgnT7YETpXZbos5t4lswjibLFNe8EibFtkTZPLym7TdoY2nWXj4zGuxHxSO9oaCw/0', '0.00', 0, '542199615@qq.com', '2017-10-13'),
(25, 1844021, 'ojWxNwo2RcHVg0h9d5d39DR5RQVk', '张代', '张代民', '15896451161', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIgSAoTTQZ4nicK9XJoJRgwicnEOZDDWyqfJW4cMev2J9OllibZWibmCMuwkia5mWE5Kic7dYdiaxDdAABgg/0', '0.00', 108, 'zhang.daimin@yahoo.com', '2017-10-14'),
(26, 1242053, 'ojWxNwlAUxIRwCAGPvT8TLxpOXL4', '洪陈侃', '糖果????麻麻', '15925710854', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKJmauHMicicibjvRdlHhBKGEicXlhbxmFRfiaGuVOIiaHWKczSuBAPgdFib8MEtO75hbQR0HLiaMG3HvKjwg/0', '0.00', 10, '', '2017-10-14'),
(27, 1504104, 'ojWxNwuF-SaxITQwAmu9v74AfDjo', '宋刚', '宋刚', '18903386893', 'http://wx.qlogo.cn/mmopen/vi_32/b1tbAibFj036wcZjYyHRPAazEVzpdvjBicaSwjTlvfQcGibVvicgBkradCBg6DBibCnRtm0OekKBlIklG13xPXicodKA/0', '0.00', 100, '32367263@qq.com', '2017-10-14'),
(28, 1390780, 'ojWxNwhANuXkVvIMycIbfux2Lzf0', '测试', '詹永昌', '15818348046', 'http://wx.qlogo.cn/mmopen/vi_32/3HYLHV93PJiadXZOiaiacq8lpiaAToeKj24W0zB0upkiamUgawvDgLgNyeAJGNruavs82y1EDXJx7b9ORPGJocZz2Yw/0', '0.00', 150, '挺浓', '2017-10-14'),
(29, 1322802, 'ojWxNwsrOKbSPhNbRSgIRxvj2QIA', '张洁', '玫瑰普洱', '13961701117', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIOu6t51JMgOPhb3ksx2X7UfCrmA9NgoXficYxFvcOojZw4cs7veqAPbtgjGFPPLiaj2iaO2tId7w0kw/0', '0.00', 310, '5496254@qq.com', '2017-10-14'),
(30, 1475347, 'ojWxNwnKDAsK0-2hAD0th-T4q6zg', '王荻秋', '小秋', '13615111020', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKH9SfCKJx3gPdPSR3lVZYcSHGGJ8CiamiajUxibdibsuwSiaxnsyKibZG15DJCZRhQggURnAicLsYEbd96Q/0', '0.00', 0, '1261169804@qq.com', '2017-10-14'),
(31, 1725643, 'ojWxNwnuExA3yrGFVLG2-W6V4Qf0', '李帅', '逝去的青春', '15802355657', 'http://wx.qlogo.cn/mmopen/vi_32/gch6rXI1gU7UcNZHuqyK83IlPAz1An0DicbsvBibsaFRibn23ShA7mv6dsAGfYuJVsDBPuOvjKNQNEoGFsePZ4T8g/0', '0.00', 0, '1475354992@qq.com', '2017-10-15'),
(32, 1746325, 'ojWxNwpdtfqBoYzqtDfTkALu2cec', '弥勒', '皓', '13575361222', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83epKjicAPCN9T99s1ccSopG2hZ92SvLLhfYvLicRzNib4F2uYtOOBCt2ENA83kWc8u7XbUicziaeOeiagpZg/0', '0.00', 0, '15529553@qq.com', '2017-10-16'),
(33, 1679638, 'ojWxNwjFXpyR9pLFy9ILse-OSJmI', '祁萍萍', '祁萍萍', '13426183227', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJoJwS6lKrmtbA5xYWQ6lViab40Bp7icYH5f8ib0KkwnxS4YvKYibgzUibZqAon0HSsQJjgicPbeynDVfrQ/0', '0.00', 10, '108758116@qq.com', '2017-10-16'),
(34, 1988464, 'ojWxNwh8HYe1v9O8UInjZ-RtPYj8', '郑老师', '鹦午', '15188317528', 'http://wx.qlogo.cn/mmopen/vi_32/PiajxSqBRaEKAM2UIicLEz9H4DxdjR2oyUHpoFdR6fhpk22ZcUpHibmgH5XQCrLdIbwHMP2mQwrqzbJ8hAHs1oMTg/0', '0.00', 0, '363699143@qq.com', '2017-10-16'),
(35, 1245349, 'ojWxNwnaLRa_bp1JtSgdgNsRcHBs', '姓名：欣欣然', '欣欣然', '电话：13757092062', 'http://wx.qlogo.cn/mmopen/vi_32/4dqLZkwAaqSHuW05Ihr7nG6ia5ErwsgUlibxDoPqu9Yy2S8xA4wW3vOQT821TAlkosicN5PicNJZEOlbiaJhbKcKPdg/0', '0.00', 10, '112739963@qq.com', '2017-10-16'),
(36, 1238894, 'ojWxNwsif-Q1t4Uxa_A4tXZU-20I', '吕方舟', '风', '13527990854', '/0', '0.00', 0, '243477505@qq.com', '2017-10-17'),
(37, 1591198, 'ojWxNwsk9udM27rG4aR5AZ55JKuw', '刘阳阳', 'Jane', '15007921115', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJvxTO5l5tNHTwkia2fknf1Lfo98m4AY1tQiclwaicjphsOwTd5w303mb5iaGeeCAm7qoHMAsSgHTCd1A/0', '0.00', 10, '54123014@qq.com', '2017-10-17'),
(38, 1862698, 'ojWxNwhWbD9uHCGL938bmBzZgUzI', '龚勇', '龚勇', '15021219843', 'http://wx.qlogo.cn/mmopen/vi_32/QZf0ticibFTmmsgE0OicdR9NxL8ObtDPictwibVkP0ty88nh0KWDdVID6oxKiccMjBrgsCwl8jwOLaOIweicjaKgsuFtA/0', '0.00', 0, '700gongy@sina.com', '2017-10-17'),
(39, 1878765, 'ojWxNwsmWwMTp8wkJ39zT6S7sh7M', '金茂森', '金茂森', '15771396199', 'http://wx.qlogo.cn/mmopen/vi_32/RP0wSb8GYkNAW4iae3SicDWAia2Q6JjictIld6uQ9qjJvkiaPxZEOvHoaeW5dichVHicV8bqYBBIY8toGGfM90q8ocEvw/0', '0.00', 10, 'xydjms@163.com', '2017-10-17'),
(40, 1207611, 'ojWxNwlAl9BOyzVUWUvNCFc4xLLA', '钱钱', '钱钱', '15991090109', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLwDtK3XjB6zSXEukbI8ux40Srrqxf6l9paZ79L9gf9AuK3ExQMTSFBH8nruPHByjtVyM187B90LQ/0', '0.00', 0, '694628868@qq.com', '2017-10-17'),
(41, 1961795, 'ojWxNwnyMYIfmQeBbK2wO3Y6EIls', '吴峰', '无风', '15990478820', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJr0ja0wmQgZYia3vOFicL3KHPPJr0k0F1B0VoV3uyyJfXiaZvq5G6cPJeIG1KmibXtfSXcZZfjegKHicw/0', '0.00', 0, 'wu4423@126.com', '2017-10-18'),
(42, 1865087, 'ojWxNwnUoMVNmjYNKhOfzkTbV21A', '张伟', '小翁', '15759750396', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKhXx0Cjtntia6lMQk0upNtrULu4SeCAiaLlObN5vgkpaQrDsSprgicHtovs7XREQMlR4sZxMZdVhAZA/0', '0.00', 0, '1609923963@qq.com', '2017-10-18'),
(43, 1847125, 'ojWxNwqGoKxf88M8hl-EYWw5Yoyo', '一把六六', '????', '18661866186', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eq6jAhLWYJae4YiakIdTZrAibYsd4asicFTccMNKxvcHeCLP0Rj03PlG0bzOLx5HRib8wjF2GtRDNOtuQ/0', '0.00', 0, '194309486@qq.com', '2017-10-18'),
(44, 1630007, 'ojWxNwoFnaGEaa9nUdbelS8akNwM', '张继超', '张继超', '15256024671', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKssekbMnOJM7Lm9zq7qVkmWePPzrxtiaLib9sR1mia7RiaeKXh2ulaiaGcOxzibhBja8JQFs1q6xZhPT7A/0', '0.00', 0, '', '2017-10-18'),
(45, 1138809, 'ojWxNwibTaIlKO4HN7Orj5d_ljUo', '白云霞', '白云霞', '13995007718', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIDFYQckmicX5ouhxbMR0VMu7MkGEaovia7UUHUeWkrCabWdPRKicQM1mZYeNoezF4uJ0TkAOhYV1FRw/0', '0.00', 0, 'baiyx_0521@126.com', '2017-10-19'),
(46, 1155151, 'ojWxNwv_KPU_mAPHDIcOkekRq-Sw', '徐应昌', '浩如烟海', '18959608980', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eoXNoib9yTtqsvV6A3ZLMMtwvqt3LuXDEULV6EvicACTas9QzgFia9kgGlUPrKPx6jwKaWzia7aonVe5g/0', '0.00', 0, '18959608980@189.cn', '2017-10-19'),
(47, 1535964, 'ojWxNwjjGWvvSmetwZBHMdHT4efs', '小微', '小魏', '13919401305', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83epShduM0p3mp5ficUPJTSB0yZzQL40GUrFT0M5TqTXYDIicQiaX6JmmrVILh3FnxYKGwx7GgV8tPOk1Q/0', '0.00', 10, '94434975@qq.com', '2017-10-19'),
(48, 1812875, 'ojWxNwlbJKGs07Ajj_qJLlTJJu60', '周号培', '蛋蛋', '13661396793', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eqT1ykjFve5LDvJ9O6yLLZiaqzCvemdWeHklc35cGq6ic1k8gga5GPLsrZPU3bDe666zBOia5kmHiaUWA/0', '0.00', 0, '284476686@qq.com', '2017-10-20'),
(49, 1686422, 'ojWxNwhYTbLdoj1JCJtO2aPRsDoo', '马岩', 'Mr    Nobody', '18931977372', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83epzr1Z4cspYakicL00rFZLps0yqsxUd75fnIOibQ9xz01GshD3aiaR5JygfKp2mC1S0uHZobjKoHxSQQ/0', '0.00', 0, '771173218', '2017-10-22'),
(50, 1360733, 'ojWxNwo8gxzhLlcCip-yFtrU6O78', '邬双月', '白白', '15538032823', 'http://wx.qlogo.cn/mmopen/vi_32/ajGibWl8a5cQg0AIM3yZfY4Yh6Wa5lLplr5cw2iaMradzj85ZAMvaliao4icXrS2dRfAic8TibssNRibJEUTC0q1Shichg/0', '0.00', 0, '792817346@qq.com', '2017-10-22'),
(51, 1576037, 'ojWxNwkjhaKLvyi9FfpqMbaWG9EE', '李斌', '腾飞', '15990807521', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJQk6hVMavVy25VoycbyfrEB9ZOxfV4HicWphkcb0xHibYRkjDCls6NzwQ9Yt4OXyYdUE1RfL1a5JRA/0', '0.00', 10, '240819798@qq.com', '2017-10-22'),
(52, 1107443, 'ojWxNwl3r6ARW0Nsppy5UWD6lT8w', '丫丫', '丫丫', '15824808696', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKzrRJqdQ1edswbkf8X6D7X9qpw1YSeIheVO3l266P2YN4BGkyW0Itxlyz1VogOibFtxBiaeOt4DHag/0', '0.00', 60, '529630351@qq.com', '2017-10-23'),
(53, 1518853, 'ojWxNwlUfvwNuiCPIfalTOw7L2fE', '王彬', '暮杉', '13997047820', 'http://wx.qlogo.cn/mmhead/Q3auHgzwzM4WUDrUcZOLeGPlbACzdwgvRgibhMdKlFibbKMicvTHibmukw/0', '0.00', 0, '15408292@qq.com', '2017-10-25'),
(54, 1742700, 'ojWxNwlUfvwNuiCPIfalTOw7L2fE', '王彬', '暮杉', '13997047850', 'http://wx.qlogo.cn/mmhead/Q3auHgzwzM4WUDrUcZOLeGPlbACzdwgvRgibhMdKlFibbKMicvTHibmukw/0', '0.00', 0, '15408292@qq.com', '2017-10-25'),
(55, 1427310, 'ojWxNwkxMGOyfMDB_ZT2Ui2vRvz8', '张纪轩', '似水流年', '13775127663', 'http://wx.qlogo.cn/mmhead/7j1UQofaR9c04szINboppJXO5CJWRP332Kzuw1hA7J82p68KJbicFIg/0', '0.00', 300, '1062503510@qq.com', '2017-10-25'),
(56, 1103927, 'ojWxNwtuZTE8CMd3RslijXUYMAzo', '麻旭娥', '九日', '13615788289', 'http://wx.qlogo.cn/mmhead/Q3auHgzwzM4wdLPYPxeYgcv8sib6DoKBBsmXrknwzmdhSufNp4eD0Xw/0', '0.00', 51, '878148012@QQ.com', '2017-10-26'),
(57, 1295254, 'ojWxNwsSmNKGFnXtAdBBmx72iCIM', '鲁冰兵', '荡意平心', '13021313520', 'http://wx.qlogo.cn/mmhead/SshmQaPAdolSjNJngsc9Rr1skxFo4xOmLkvcM3MoQIo/0', '0.00', 36, '524059638@qq.com', '2017-10-30'),
(58, 1938558, 'ojWxNwtBeBmCQ1_d5AEKggNXpUxc', '黄海燕', '黄海燕', '13083986021', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIleB7ribGFFGj8ZjOicEvPwwMnicf2bciawSm2hhlYLg3xFTLA7Q5H87svmse6BIz1SJkUJicPo3Ncruw/0', '0.00', 0, '529257869@qq.com', '2017-11-03'),
(59, 1208517, 'ojWxNwv58Vs3O_yXOkSy8bG_QVck', '杜棣', '棠棣之华', '13629645190', 'http://wx.qlogo.cn/mmopen/vi_32/ibShRLSGiaJud78Jle3ovc3k4DQqHwHkA1Liby6eK3QVyxgz5OiaRpT6p6wbaqhLyTkicYcliahTJhFlyyNBv9oyVdIQ/0', '0.00', 0, '22236536@qq.com', '2017-11-08'),
(60, 1689141, 'ojWxNwhaQM-sAirF_ojRdtsLBRXQ', '张明军', '子瑜爹', '18753964369', 'http://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83erOSmXcu7yd6bSGHJ322T4Ntf313fqgLQTFeHvYfYxRtyNAX2texnkOpJLz0QaibwPich18TCdHpEwA/0', '0.00', 0, '381773992@qq.com', '2017-11-08'),
(61, 1472436, 'ojWxNwqmVUf9jyYvAGhzx3hllGDE', '江珊珊', '三仨 ', '13735892035', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKxvUQicjqskw2FQRNLI6e3TPrPHia273Q6JUiaZNI8Kn8mw1bKTVZuno0uJxWbTiczdP0QiaKUz4oQ5qw/0', '0.00', 18, '13735892035@163.com', '2017-11-09'),
(62, 1307586, 'ojWxNwjU_qHqvByQSWdKoz5Cge5k', '赵茵', '赵', '13861000333', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLtn20j4PibtBFJiaDwWcsnHkNhosOqpVd4hibeS9Xia84rAQiaokdPMs4VSwOEKzcE2zfiaFb6QJnvic2dA/0', '0.00', 18, '673345023@qq.com', '2017-11-10'),
(63, 1646157, 'ojWxNwrapW_V_YqQ_CVyVtV1i7bU', '孙曦', 'CICI????', '18670020919', 'http://wx.qlogo.cn/mmopen/vi_32/XZC4tPU5SftQpgUyGZP6NMKgNbTXZRA87F3kxRPpJwEgGjcpGh0ibzddnW4cpg6GXShXoDWQYXublgm4icBDskUg/0', '0.00', 70, '313437993@qq.com', '2017-11-14'),
(64, 1561453, 'ojWxNwpWeVnw0mSzkTvVk5rJfiSg', '大狗', '含艳????????', '17306799392', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKicPIuZUz27wMBiaDdKrSOzVJnQYQibzibPBRXzUM0MefPhiaiaevCkjUkZlf7ex8LspDCCqJcqhgQwiaWw/0', '0.00', 0, '', '2017-11-16');

-- --------------------------------------------------------

--
-- 表的结构 `jzk_weixin`
--

CREATE TABLE IF NOT EXISTS `jzk_weixin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '自动回复标题',
  `content` varchar(255) NOT NULL COMMENT '自动回复内容',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `jzk_weixin`
--

INSERT INTO `jzk_weixin` (`ID`, `title`, `content`) VALUES
(1, '1', '测试1'),
(2, '2', '测试2'),
(3, '3', '测试3'),
(4, '4', '测试4'),
(5, '5', '测试5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
