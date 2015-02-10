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
  `ID` int(8) unsigned DEFAULT NULL,
  `code` char(2) DEFAULT NULL,
  `id_location` int(11) unsigned DEFAULT NULL,
  `locale` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id_name`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


---UPDATES THE COUNTRY region and cities
UPDATE locations l 
    INNER JOIN locations r
    using (id_location)
    SET l.country_code = r.iso 
WHERE l.parent_deep=1;

UPDATE locations l 
    INNER JOIN locations r 
    ON l.id_location_parent=r.id_location
    SET l.country_code = r.country_code
WHERE l.parent_deep=2;


DELETE FROM names WHERE name in (select name from locations)

-------------move to table names


INSERT INTO names (code,locale,name)
(SELECT c.code,locale,n.name FROM `countries` c inner join countryNames n using (code))


INSERT INTO names (ID,code,locale,name)
(SELECT r.ID,r.code,locale,n.name FROM `regions` r inner join regionNames n using (ID))

INSERT INTO names (ID,code,locale,name)
(SELECT r.ID,r.country,locale,n.name FROM `cities` r inner join cityNames n using (ID))


----------------------countries

#update locations l SET seoname = (select url from countries c where l.iso=c.code ) WHERE parent_deep=0

UPDATE `names` as n SET id_location = (SELECT id_location FROM locations l WHERE l.iso=n.code AND parent_deep=0 LIMIT 1) WHERE code is not NULL;



----------------regions

#ALTER TABLE `regions` ADD `id_location` INT NOT NULL ;


UPDATE `regions` as r 
    SET id_location = (SELECT id_location FROM locations l where r.name=l.name AND type='RE' LIMIT 1) 
WHERE name is not NULL AND code is not NULL;


update locations l SET seoname = (select url from regions c where l.id_location=c.id_location limit 1 ) WHERE parent_deep=1


UPDATE `names` as n SET id_location = (SELECT id_location FROM regions l where n.ID=l.ID LIMIT 1) WHERE id_location is NULL;


------------------city
#didnt work!! fuck

#ALTER TABLE `cities` ADD `id_location` INT NOT NULL ;


UPDATE `cities` as r 
    SET id_location = (SELECT id_location FROM locations l where l.name=r.name AND l.parent_deep=2 AND l.country_code=r.country  LIMIT 1) 


update locations l SET seoname = (select url from cities c where l.id_location=c.id_location limit 1 ) WHERE parent_deep=2


UPDATE `names` as n SET id_location = (SELECT id_location FROM cities l where n.ID=l.ID LIMIT 1) WHERE (id_location = 0 OR id_location is NULL) ;