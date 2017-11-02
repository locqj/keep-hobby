CREATE TABLE IF NOT EXISTS `sign` ( 
 `uid` int(11) NOT NULL, 
 `dateline` varchar(10) COLLATE utf8_bin NOT NULL, PRIMARY KEY (`uid`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `sign` (`uid`, `dateline`) VALUES (1, ‘1389072071‘), (2, ‘1389072735‘); 

CREATE TABLE IF NOT EXISTS `user` ( 
 `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ‘USERID‘, 
 `username` varchar(35) COLLATE utf8_bin NOT NULL COMMENT ‘username‘, 
 `signdays` int(11) NOT NULL COMMENT ‘签到天数‘, PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

INSERT INTO `user` (`id`, `username`, `signdays`) VALUES (1, ‘ggbound‘, 4), (2, ‘other‘, 1);