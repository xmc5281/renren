<?php
pdo_query("

DROP TABLE IF EXISTS `ims_ewei_shop_member_message_template_type`;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_message_template_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `typecode` varchar(255) DEFAULT NULL,
  `templatecode` varchar(255) DEFAULT NULL,
  `templateid` varchar(255) DEFAULT NULL,
  `templatename` varchar(255) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `showtotaladd` tinyint(1) DEFAULT '0',
  `typegroup` varchar(255) DEFAULT '',
  `groupname` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('1', '订单付款通知', 'saler_pay', 'OPENTM405584202', '', '订单付款通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('2', '自提订单提交成功通知', 'carrier', 'OPENTM201594720', '', '订单付款通知', '{{first.DATA}}自提码：{{keyword1.DATA}}商品详情：{{keyword2.DATA}}提货地址：{{keyword3.DATA}}提货时间：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('3', '订单取消通知', 'cancel', 'OPENTM201764653', '', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('4', '订单即将取消通知', 'willcancel', 'OPENTM201764653', '', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('5', '订单支付成功通知', 'pay', 'OPENTM405584202', '', '订单支付通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('6', '订单发货通知', 'send', 'OPENTM401874827', '', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('7', '自动发货通知(虚拟物品及卡密)', 'virtualsend', 'OPENTM207793687', '', '自动发货通知', '{{first.DATA}}商品名称：{{keyword1.DATA}}订单号：{{keyword2.DATA}}订单金额：{{keyword3.DATA}}卡密信息：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('8', '订单状态更新(修改收货地址)(修改价格)', 'orderstatus', 'TM00017', '', '订单付款通知', '{{first.DATA}}订单编号:{{OrderSn.DATA}}订单状态:{{OrderStatus.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('9', '退款成功通知', 'refund1', 'TM00430', '', '退款成功通知', '{{first.DATA}}退款金额：{{orderProductPrice.DATA}}商品详情：{{orderProductName.DATA}}订单编号：{{orderName.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('10', '换货成功通知', 'refund3', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('11', '退款申请驳回通知', 'refund2', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('12', '充值成功通知', 'recharge_ok', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('13', '提现成功通知', 'withdraw_ok', 'OPENTM207422808', '', '提现通知', '{{first.DATA}}申请提现金额：{{keyword1.DATA}}取提现手续费：{{keyword2.DATA}}实际到账金额：{{keyword3.DATA}}提现渠道：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('14', '会员升级通知(任务处理通知)', 'upgrade', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('15', '充值成功通知（后台管理员手动）', 'backrecharge_ok', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('16', '积分变动提醒', 'backpoint_ok', 'OPENTM207509450', '', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('17', '换货发货通知', 'refund4', 'OPENTM401874827', '', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('18', '砍价活动通知', 'bargain_message', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'bargain', '砍价消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('19', '拼团活动通知', 'groups', null, null, null, null, '0', 'groups', '拼团消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('20', '人人分销通知', 'commission', null, null, null, null, '0', 'commission', '分销消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('21', '商品付款通知', 'saler_goodpay', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('22', '砍到底价通知', 'bargain_fprice', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'bargain', '砍价消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('23', '订单收货通知(卖家)', 'saler_finish', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('24', '余额兑换成功通知', 'exchange_balance', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'exchange', '兑换中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('25', '积分兑换成功通知', 'exchange_score', 'OPENTM207509450', '', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', '0', 'exchange', '兑换中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('26', '兑换中心余额充值通知', 'exchange_recharge', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'exchange', '兑换中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('27', '游戏中心通知', 'lottery_get', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'lottery', '抽奖消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('35', '库存预警通知', 'saler_stockwarn', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('36', '卖家核销商品核销通知', 'o2o_sverify', 'OPENTM409521536', '', '核销成功提醒', '{{first.DATA}}核销项目：{{keyword1.DATA}}核销时间：{{keyword2.DATA}}核销门店：{{keyword3.DATA}}{{remark.DATA}}', '0', 'o2o', 'O2O消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('37', '核销商品核销通知', 'o2o_bverify', 'OPENTM409521536', '', '核销成功提醒', '{{first.DATA}}核销项目：{{keyword1.DATA}}核销时间：{{keyword2.DATA}}核销门店：{{keyword3.DATA}}{{remark.DATA}}', '0', 'o2o', 'O2O消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('38', '卖家商品预约通知', 'o2o_snorder', 'OPENTM202447657', '', '预约成功提醒', '{{first.DATA}}预约项目：{{keyword1.DATA}}预约时间：{{keyword2.DATA}}{{remark.DATA}}', '0', 'o2o', 'O2O消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('39', '商品预约成功通知', 'o2o_bnorder', 'OPENTM202447657', '', '预约成功提醒', '{{first.DATA}}预约项目：{{keyword1.DATA}}预约时间：{{keyword2.DATA}}{{remark.DATA}}', '0', 'o2o', 'O2O消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('42', '商品下单通知', 'saler_goodsubmit', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('50', '维权订单通知', 'saler_refund', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('43', '任务接取通知', 'task_pick', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'task', '任务中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('44', '任务进度通知', 'task_progress', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'task', '任务中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('45', '任务完成通知', 'task_finish', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'task', '任务中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('46', '任务海报接取通知', 'task_poster_pick', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'task', '任务中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('47', '任务海报进度通知', 'task_poster_progress', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'task', '任务中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('48', '任务海报完成通知', 'task_poster_finish', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'task', '任务中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('49', '任务海报扫描通知', 'task_poster_scan', 'OPENTM400232285', null, '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', 'task', '任务中心消息通知');


DROP TABLE IF EXISTS `ims_ewei_shop_plugin`;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `displayorder` int(11) DEFAULT '0',
  `identity` varchar(50) DEFAULT '',
  `category` varchar(255) DEFAULT '',
  `name` varchar(50) DEFAULT '',
  `version` varchar(10) DEFAULT '',
  `author` varchar(20) DEFAULT '',
  `status` int(11) DEFAULT '0',
  `thumb` varchar(255) DEFAULT '',
  `desc` text,
  `iscom` tinyint(3) DEFAULT '0',
  `deprecated` tinyint(3) DEFAULT '0',
  `isv2` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_displayorder` (`displayorder`),
  KEY `idx_identity` (`identity`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

INSERT INTO `ims_ewei_shop_plugin` (`id`, `displayorder`, `identity`, `name`, `version`, `author`, `status`, `category`, `isv2`, `thumb`, `desc`, `iscom`, `deprecated`) VALUES
(1, 1, 'qiniu', '七牛存储', '1.0', '官方', 1, 'tool', 0, '../addons/ewei_shopv2/static/images/qiniu.jpg', NULL, 1, 0),
(2, 2, 'taobao', '商品助手', '1.0', '官方', 1, 'tool', 0, '../addons/ewei_shopv2/static/images/taobao.jpg', '', 0, 0),
(3, 3, 'commission', '人人分销', '1.0', '官方', 1, 'biz', 0, '../addons/ewei_shopv2/static/images/commission.jpg', '', 0, 0),
(4, 4, 'poster', '超级海报', '1.2', '官方', 1, 'sale', 0, '../addons/ewei_shopv2/static/images/poster.jpg', '', 0, 0),
(5, 5, 'verify', 'O2O核销', '1.0', '官方', 1, 'biz', 0, '../addons/ewei_shopv2/static/images/verify.jpg', NULL, 1, 0),
(6, 6, 'tmessage', '会员群发', '1.0', '官方', 1, 'tool', 0, '../addons/ewei_shopv2/static/images/tmessage.jpg', NULL, 1, 0),
(7, 7, 'perm', '分权系统', '1.0', '官方', 1, 'help', 0, '../addons/ewei_shopv2/static/images/perm.jpg', NULL, 1, 0),
(8, 8, 'sale', '营销宝', '1.0', '官方', 1, 'sale', 0, '../addons/ewei_shopv2/static/images/sale.jpg', NULL, 1, 0),
(9, 9, 'designer', '店铺装修V1', '1.0', '官方', 1, 'help', 0, '../addons/ewei_shopv2/static/images/designer.jpg', NULL, 0, 1),
(10, 10, 'creditshop', '积分商城', '1.0', '官方', 1, 'biz', 0, '../addons/ewei_shopv2/static/images/creditshop.jpg', '', 0, 0),
(11, 11, 'virtual', '虚拟物品', '1.0', '官方', 1, 'biz', 0, '../addons/ewei_shopv2/static/images/virtual.jpg', NULL, 1, 0),
(12, 11, 'article', '文章营销', '1.0', '官方', 1, 'help', 0, '../addons/ewei_shopv2/static/images/article.jpg', '', 0, 0),
(13, 13, 'coupon', '超级券', '1.0', '官方', 1, 'sale', 0, '../addons/ewei_shopv2/static/images/coupon.jpg', NULL, 1, 0),
(14, 14, 'postera', '活动海报', '1.0', '官方', 1, 'sale', 0, '../addons/ewei_shopv2/static/images/postera.jpg', '', 0, 0),
(15, 16, 'system', '系统工具', '1.0', '官方', 0, 'help', 0, '../addons/ewei_shopv2/static/images/system.jpg', NULL, 0, 1),
(16, 15, 'diyform', '自定表单', '1.0', '官方', 1, 'help', 0, '../addons/ewei_shopv2/static/images/diyform.jpg', '', 0, 0),
(17, 16, 'exhelper', '快递助手', '1.0', '官方', 1, 'help', 0, '../addons/ewei_shopv2/static/images/exhelper.jpg', '', 0, 0),
(18, 19, 'groups', '人人拼团', '1.0', '官方', 1, 'biz', 0, '../addons/ewei_shopv2/static/images/groups.jpg', '', 0, 0),
(19, 20, 'diypage', '店铺装修', '2.0', '官方', 1, 'help', 0, '../addons/ewei_shopv2/static/images/designer.jpg', '', 0, 0),
(20, 22, 'globonus', '全民股东', '1.0', '官方', 1, 'biz', 0, '../addons/ewei_shopv2/static/images/globonus.jpg', '', 0, 0),
(21, 23, 'merch', '多商户', '1.0', '官方', 1, 'biz', 1, '../addons/ewei_shopv2/static/images/merch.jpg', '', 0, 0),
(22, 26, 'qa', '帮助中心', '1.0', '官方', 1, 'help', 1, '../addons/ewei_shopv2/static/images/qa.jpg', '', 0, 0),
(24, 27, 'sms', '短信提醒', '1.0', '官方', 1, 'tool', 1, '../addons/ewei_shopv2/static/images/sms.jpg', '', 1, 0),
(25, 29, 'sign', '积分签到', '1.0', '官方', 1, 'tool', 1, '../addons/ewei_shopv2/static/images/sign.jpg', '', 0, 0),
(26, 30, 'sns', '全民社区', '1.0', '官方', 1, 'sale', 1, '../addons/ewei_shopv2/static/images/sns.jpg', '', 0, 0),
(27, 33, 'wap', '全网通', '1.0', '官方', 1, 'tool', 1, '', '', 1, 0),
(28, 34, 'h5app', 'H5APP', '1.0', '官方', 1, 'tool', 1, '', '', 1, 0),
(29, 26, 'abonus', '区域代理', '1.0', '官方', 1, 'biz', 1, '../addons/ewei_shopv2/static/images/abonus.jpg', '', 0, 0),
(30, 33, 'printer', '小票打印机', '1.0', '官方', 1, 'tool', 1, '', '', 1, 0),
(31, 34, 'bargain', '砍价活动', '1.0', '官方', 1, 'tool', 1, '../addons/ewei_shopv2/static/images/bargain.jpg', '', 0, 0),
(32, 35, 'task','任务中心','1.0','官方',1,'sale',1,'../addons/ewei_shopv2/static/images/task.jpg','',0,0),
(33, 36, 'cashier','收银台','1.0','官方',1,'biz',1,'../addons/ewei_shopv2/static/images/cashier.jpg','',0,0),
(34, 37, 'messages', '消息群发', '1.0','官方', 1, 'tool',1,'../addons/ewei_shopv2/static/images/messages.jpg','',0,0),
(35, 38, 'seckill','整点秒杀','1.0','官方',1,'sale',1,'../addons/ewei_shopv2/static/images/seckill.jpg','',0,0),
(36, 39, 'exchange','兑换中心','1.0','官方',1,'biz',1,'../addons/ewei_shopv2/static/images/exchange.jpg','',0,0),
(37, 40, 'lottery', '游戏营销', '1.0', '官方', 1, 'biz', 1, '../addons/ewei_shopv2/static/images/lottery.jpg', '', 0, 0),
(38, 41, 'wxcard', '微信卡券', '1.0', '官方', 1, 'sale', 1,'', '', 1, 0),
(39, 42, 'quick', '快速购买', '1.0', '官方', 1, 'biz', 1,'../addons/ewei_shopv2/static/images/quick.jpg', '', 0, 0),
(40, 43, 'mmanage', '手机端商家管理中心', '1.0', '官方', 1, 'tool',1, '../addons/ewei_shopv2/static/images/mmanage.jpg', '', 0, 0),
(41, 44, 'pc', 'PC端', '1.0', '二开', '1', 'tool', 0,'../addons/ewei_shopv2/static/images/pc.jpg', '',  0, 0),
(42, 45, 'live', '互动直播', '1.0', '官方', 1, 'sale',1, '../addons/ewei_shopv2/static/images/live.jpg', '', 0, 0),
(43, 46, 'invitation', '邀请卡', '1.0', '官方', 1, 'sale',1, '../addons/ewei_shopv2/static/images/invitation.png', '', 0, 0),
(44, 47, 'app', '小程序', '1.0', '官方', 1, 'help',1, '../addons/ewei_shopv2/static/images/app.jpg', '', '0', '0');


DROP TABLE IF EXISTS `ims_ewei_shop_exhelper_esheet`;
CREATE TABLE `ims_ewei_shop_exhelper_esheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `express` varchar(50) DEFAULT '',
  `code` varchar(20) NOT NULL DEFAULT '',
  `datas` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('1', '顺丰', '', 'SF', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}i:1;a:4:{s:5:\"style\";s:9:\"三联210\";s:4:\"spec\";s:38:\"（宽100mm 高210mm 切点90/60/60）\";s:4:\"size\";s:3:\"210\";s:9:\"isdefault\";i:0;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('2', '百世快递', '', 'HTKY', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:0;}i:1;a:4:{s:5:\"style\";s:9:\"二联183\";s:4:\"spec\";s:37:\"（宽100mm 高183mm 切点87/5/91）\";s:4:\"size\";s:3:\"183\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('3', '韵达', '', 'YD', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:0;}i:1;a:4:{s:5:\"style\";s:9:\"二联203\";s:4:\"spec\";s:36:\"（宽100mm 高203mm 切点152/51）\";s:4:\"size\";s:3:\"203\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('4', '申通', '', 'STO', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}i:1;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:35:\"（宽100mm 高150mm 切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:0;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('5', '圆通', '', 'YTO', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('6', 'EMS', '', 'EMS', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('7', '中通', '', 'ZTO', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('8', '德邦', '', 'DBL', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联177\";s:4:\"spec\";s:34:\"（宽100mm高177mm切点107/70）\";s:4:\"size\";s:3:\"177\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('9', '优速', '', 'UC', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('10', '宅急送', '', 'ZJS', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联120\";s:4:\"spec\";s:33:\"（宽100mm高116mm切点98/10）\";s:4:\"size\";s:3:\"120\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('11', '京东', '', 'JD', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联110\";s:4:\"spec\";s:33:\"（宽100mm高110mm切点60/50）\";s:4:\"size\";s:3:\"110\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('12', '信丰', '', 'XFEX', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('13', '全峰', '', 'QFKD', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('14', '跨越速运', '', 'KYSY', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联137\";s:4:\"spec\";s:34:\"（宽100mm高137mm切点101/36）\";s:4:\"size\";s:3:\"137\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('15', '安能', '', 'ANE', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"三联180\";s:4:\"spec\";s:37:\"（宽100mm高180mm切点110/30/40）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('16', '快捷', '', 'FAST', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('17', '国通', '', 'GTO', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('18', '天天', '', 'HHTT', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('19', '中铁快运', '', 'ZTKY', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('20', '邮政快递包裹', '', 'YZPY', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');



insert into `ims_ewei_shop_task_type`(`id`,`type_key`,`type_name`,`description`,`verb`,`numeric`,`unit`,`goods`,`theme`,`once`) values
('1','poster','任务海报','把生成的海报并分享给朋友，朋友扫描并关注公众号即可获得奖励。','转发海报并吸引','1','人关注','0','primary','0'),
('2','info_phone','绑定手机','在个人中心中，绑定手机号，即可完成任务获得奖励。','绑定手机','0','','0','warning','0'),
('3','order_first','首次购物','在商城中首次下单，即可获得奖励，必须确认收货。','首次在商城中下单购物','0','','0','warning','0'),
('4','recharge_full','单笔充值满额','在商城中充值余额，单笔充值满额，即可获得奖励。','单笔充值满','1','元','0','success','1'),
('5','order_full','单笔满额','在商城中下单，单笔满额即可获得奖励，必须确认收货。','单笔订单满','1','元','0','success','1'),
('6','order_all','累计消费','在商城中购物消费，累计满额即可获得奖励，无需确认收货。','购物总消费额达到','1','元','0','success','0'),
('7','pyramid_money','分销佣金','只有分销商可接此任务。累计分销佣金满额，即可完成任务。','分销商获得佣金金额达','1','元','0','primary','0'),
('8','pyramid_num','下级人数','只有分销商可接此任务。累计下级人数达标，即可完成任务。','分销商推荐下级人数达','1','人','0','primary','0'),
('9','comment','商品好评','任意给一个商品五星好评，即可完成任务获得奖励。','给商品好评','0','','0','warning','0'),
('10','post','社区发帖','在社区中发表指定篇帖子，即可完成任务获得奖励。','在论坛中发表','1','篇帖子','0','warning','0'),
('11','goods','购买指定商品','购买指定商品后即可完成任务，必须确认收货。','购买指定商品','0','','1','info','0'),
('12','recharge_count','累计充值满额','在商城中充值余额，累计充值满额，即可获得奖励。','累计充值满','1','元','0','success','0');


");

