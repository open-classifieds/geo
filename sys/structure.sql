CREATE TABLE IF NOT EXISTS `locations` (
  `id_location` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_location_parent` int(11) unsigned DEFAULT NULL,
  `iso` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `type` char(2) DEFAULT NULL,
  `parent_deep` int(11) NOT NULL DEFAULT '0',
  `geo_lat` double(18,11) DEFAULT NULL,
  `geo_lng` double(18,11) DEFAULT NULL,
  PRIMARY KEY (`id_location`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `names` (
  `id_name` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_location` int(11) unsigned DEFAULT NULL,
  `locale` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id_name`),

) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `locales` (
  `locale` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


