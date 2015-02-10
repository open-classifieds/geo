<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-08 11:32:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function d() ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in file:line
2015-02-08 11:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 11:38:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Core' not found ~ APPPATH/bootstrap.php [ 149 ] in file:line
2015-02-08 11:38:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 11:38:49 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$_GET_ORIG ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in file:line
2015-02-08 11:38:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 12:06:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-08 12:06:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 12:08:31 --- EMERGENCY: Database_Exception [ 1146 ]: [1146] Table 'worlddb.locations' doesn't exist ( SHOW FULL COLUMNS FROM `locations` ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 182 ] in /var/www/worlddb/modules/mysqli/classes/Kohana/Database/MySQLi.php:349
2015-02-08 12:08:31 --- DEBUG: #0 /var/www/worlddb/modules/mysqli/classes/Kohana/Database/MySQLi.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('locations')
#2 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/worlddb/application/classes/Controller/Welcome.php(7): Kohana_ORM->__construct()
#6 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#12 {main} in /var/www/worlddb/modules/mysqli/classes/Kohana/Database/MySQLi.php:349
2015-02-08 12:08:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 200 ] in file:line
2015-02-08 12:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 12:10:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The lat property does not exist in the Model_Location class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/worlddb/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 12:10:38 --- DEBUG: #0 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('lat')
#1 /var/www/worlddb/application/classes/Controller/Welcome.php(10): Kohana_ORM->__get('lat')
#2 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#8 {main} in /var/www/worlddb/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 15:45:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Theme' not found ~ APPPATH/classes/Controller.php [ 47 ] in file:line
2015-02-08 15:45:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 15:59:01 --- EMERGENCY: Database_Exception [ 1054 ]: [1054] Unknown column 'deep' in 'where clause' ( SELECT `location`.`id_location` AS `id_location`, `location`.`id_location_parent` AS `id_location_parent`, `location`.`iso` AS `iso`, `location`.`name` AS `name`, `location`.`seoname` AS `seoname`, `location`.`type` AS `type`, `location`.`parent_deep` AS `parent_deep`, `location`.`geo_lat` AS `geo_lat`, `location`.`geo_lng` AS `geo_lng` FROM `locations` AS `location` WHERE `deep` = '0' ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 182 ] in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-08 15:59:01 --- DEBUG: #0 /var/www/worlddb/application/classes/Database/Query.php(52): Kohana_Database_MySQLi->query(1, 'SELECT `locatio...', 'Model_Location', Array)
#1 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1063): Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/worlddb/application/classes/Controller/Location.php(8): Kohana_ORM->find_all()
#4 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#7 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#10 {main} in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-08 15:59:29 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /var/www/worlddb/system/classes/Kohana/Response.php:160
2015-02-08 15:59:29 --- DEBUG: #0 /var/www/worlddb/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/worldd...', 160, Array)
#1 /var/www/worlddb/application/classes/Controller/Location.php(13): Kohana_Response->body(Array)
#2 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#5 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#8 {main} in /var/www/worlddb/system/classes/Kohana/Response.php:160
2015-02-08 16:11:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The * property does not exist in the Model_Location class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/worlddb/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 16:11:56 --- DEBUG: #0 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('*')
#1 /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php(138): Kohana_ORM->__get('*')
#2 /var/www/worlddb/application/classes/Controller/Location.php(16): Kohana_Database_Result->as_array('*')
#3 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#6 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#9 {main} in /var/www/worlddb/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 16:13:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::get_columns() ~ APPPATH/classes/Controller/Location.php [ 16 ] in file:line
2015-02-08 16:13:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 16:13:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::list_columns() ~ APPPATH/classes/Controller/Location.php [ 16 ] in file:line
2015-02-08 16:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 16:13:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::list_columns() ~ APPPATH/classes/Controller/Location.php [ 16 ] in file:line
2015-02-08 16:13:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 16:15:05 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/database/classes/Kohana/Database/Result.php [ 138 ] in /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php:138
2015-02-08 16:15:05 --- DEBUG: #0 /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php(138): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/worldd...', 138, Array)
#1 /var/www/worlddb/application/classes/Controller/Location.php(22): Kohana_Database_Result->as_array(Array)
#2 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#5 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#8 {main} in /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php:138
2015-02-08 16:20:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The 'id_location','id_location_parent','iso','name','seoname','type','parent_deep','geo_lat','geo_lng' property does not exist in the Model_Location class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/worlddb/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 16:20:11 --- DEBUG: #0 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get(''id_location','...')
#1 /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php(138): Kohana_ORM->__get(''id_location','...')
#2 /var/www/worlddb/application/classes/Controller/Location.php(25): Kohana_Database_Result->as_array(''id_location','...')
#3 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#6 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#9 {main} in /var/www/worlddb/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 16:32:42 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/database/classes/Kohana/Database/Result.php [ 157 ] in /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php:157
2015-02-08 16:32:42 --- DEBUG: #0 /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php(157): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/worldd...', 157, Array)
#1 /var/www/worlddb/application/classes/Controller/Location.php(11): Kohana_Database_Result->as_array('id_location', Array)
#2 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#5 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#8 {main} in /var/www/worlddb/modules/database/classes/Kohana/Database/Result.php:157