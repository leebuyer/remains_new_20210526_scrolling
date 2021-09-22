CREATE TABLE `tree` (
  `tree_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '遺址發掘原因編號',
  `reason_content` text NOT NULL COMMENT '遺址發掘原因',
  `action_content` text NOT NULL COMMENT '一起考古去',
  `appearance_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `appearance_title` varchar(255) NOT NULL COMMENT '史前人標題',
  `appearance_content` text NOT NULL COMMENT '史前人標內容',
  `more_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `more_title` varchar(255) unsigned NOT NULL COMMENT '史前人標題',
  `more_content` text NOT NULL COMMENT '史前人標內容',
  `toolbox_title` varchar(255) unsigned NOT NULL COMMENT '老師工具箱標題',
  `toolbox_introduction` varchar(255) NOT NULL COMMENT '老師工具箱簡介',
  `tree_date` datetime NOT NULL COMMENT '上架日期',
   PRIMARY KEY (`tree_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `tiger` (
  `tiger_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '遺址發掘原因編號',
  `reason_content` text NOT NULL COMMENT '遺址發掘原因',
  `action_content` text NOT NULL COMMENT '一起考古去',
   `appearance_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `appearance_title` varchar(255) unsigned NOT NULL COMMENT '史前人標題',
  `appearance_content` text NOT NULL COMMENT '史前人標內容',
  `more_introduction` varchar(255) NOT NULL COMMENT '史前人介紹',
  `more_title` varchar(255) unsigned NOT NULL COMMENT '史前人標題',
  `more_content` text NOT NULL COMMENT '史前人標內容',
   `toolbox_title` varchar(255) unsigned NOT NULL COMMENT '老師工具箱標題',
  `toolbox_introduction`  varchar(255) NOT NULL COMMENT '老師工具箱簡介',
  `tiger_date` datetime NOT NULL COMMENT '上架日期',
   PRIMARY KEY (`tiger_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `users` (
  `user_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '使用者編號',
  `user_name` varchar(255) NOT NULL COMMENT '使用者姓名',
  `user_id` varchar(255) NOT NULL COMMENT '使用者帳號',
  `user_passwd` varchar(255) NOT NULL COMMENT '使用者密碼',
  PRIMARY KEY (`user_sn`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
