CREATE TABLE `tree_reason` (
  `reason_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '遺址發掘原因編號',
  `reason_content` text NOT NULL COMMENT '遺址發掘原因',
   PRIMARY KEY (`reason_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tree_action` (
  `action_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '一起考古去編號',
  `action_content` text NOT NULL COMMENT '一起考古去',
  PRIMARY KEY (`action_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tree_appearance` (
  `appearance_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '史前人模樣編號',
  `appearance_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `appearance_title` varchar(255) NOT NULL COMMENT '史前人標題',
  `appearance_content` text NOT NULL COMMENT '史前人標內容',
  `tree_appearance_date` datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`appearance_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tree_more` (
  `more_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '史前人模樣編號',
  `more_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `more_title` varchar(255) NOT NULL COMMENT '史前人標題',
  `more_content` text NOT NULL COMMENT '史前人標內容',
  `tree_more_date`datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`more_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tree_toolbox` (
  `toolbox_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '老師工具箱編號',
  `toolbox_title` varchar(255) NOT NULL COMMENT '老師工具箱標題',
  `toolbox_introduction` varchar(255) NOT NULL COMMENT '老師工具箱簡介',
  `toolbox_download` text NOT NULL COMMENT '老師工具箱下載',
  `tree_toolbox_date` datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`toolbox_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tiger_reason` (
  `reason_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '遺址發掘原因編號',
  `reason_content` text NOT NULL COMMENT '遺址發掘原因',
   PRIMARY KEY (`reason_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tiger_action` (
  `action_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '一起考古去編號',
  `action_content` text NOT NULL COMMENT '一起考古去',
  PRIMARY KEY (`action_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `tiger_appearance` (
  `appearance_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '史前人模樣編號',
  `appearance_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `appearance_title` varchar(255) NOT NULL COMMENT '史前人標題',
  `appearance_content` text NOT NULL COMMENT '史前人標內容',
  `tiger_appearance_date` datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`appearance_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tiger_more` (
  `more_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '史前人模樣編號',
  `more_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `more_title` varchar(255) NOT NULL COMMENT '史前人標題',
  `more_content` text NOT NULL COMMENT '史前人標內容',
  `tiger_more_date` datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`more_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tiger_toolbox` (
  `toolbox_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '老師工具箱編號',
  `toolbox_title` varchar(255) NOT NULL COMMENT '老師工具箱標題',
  `toolbox_introduction`  varchar(255) NOT NULL COMMENT '老師工具箱簡介',
  `toolbox_download` text NOT NULL COMMENT '老師工具箱下載',
  `tiger_toolbox_date` datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`toolbox_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `user_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '使用者編號',
  `user_name` varchar(255) NOT NULL COMMENT '使用者姓名',
  `user_id` varchar(255) NOT NULL COMMENT '使用者帳號',
  `user_passwd` varchar(255) NOT NULL COMMENT '使用者密碼',
  PRIMARY KEY (`user_sn`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
