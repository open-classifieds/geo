<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-09 02:33:09 --- EMERGENCY: Database_Exception [ 1317 ]: [1317] Query execution was interrupted ( SELECT `name`.`id_name` AS `id_name`, `name`.`ID` AS `ID`, `name`.`code` AS `code`, `name`.`id_location` AS `id_location`, `name`.`locale` AS `locale`, `name`.`name` AS `name` FROM `names` AS `name` WHERE `name` = 'Barcelona' AND `locale` = 'en_US' ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 182 ] in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-09 02:33:09 --- DEBUG: #0 /var/www/worlddb/application/classes/Database/Query.php(52): Kohana_Database_MySQLi->query(1, 'SELECT `name`.`...', 'Model_Name', Array)
#1 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1063): Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/worlddb/application/classes/Controller/Welcome.php(11): Kohana_ORM->find_all()
#4 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#10 {main} in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-09 02:33:09 --- EMERGENCY: Database_Exception [ 1317 ]: [1317] Query execution was interrupted ( SELECT `name`.`id_name` AS `id_name`, `name`.`ID` AS `ID`, `name`.`code` AS `code`, `name`.`id_location` AS `id_location`, `name`.`locale` AS `locale`, `name`.`name` AS `name` FROM `names` AS `name` WHERE `name` = 'Barcelona' AND `locale` = 'en_US' ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 182 ] in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-09 02:33:09 --- DEBUG: #0 /var/www/worlddb/application/classes/Database/Query.php(52): Kohana_Database_MySQLi->query(1, 'SELECT `name`.`...', 'Model_Name', Array)
#1 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1063): Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/worlddb/application/classes/Controller/Welcome.php(11): Kohana_ORM->find_all()
#4 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#10 {main} in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-09 02:33:09 --- EMERGENCY: Database_Exception [ 1317 ]: [1317] Query execution was interrupted ( SELECT `name`.`id_name` AS `id_name`, `name`.`ID` AS `ID`, `name`.`code` AS `code`, `name`.`id_location` AS `id_location`, `name`.`locale` AS `locale`, `name`.`name` AS `name` FROM `names` AS `name` WHERE `name` = 'Barcelona' ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 182 ] in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-09 02:33:09 --- DEBUG: #0 /var/www/worlddb/application/classes/Database/Query.php(52): Kohana_Database_MySQLi->query(1, 'SELECT `name`.`...', 'Model_Name', Array)
#1 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1063): Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/worlddb/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/worlddb/application/classes/Controller/Welcome.php(11): Kohana_ORM->find_all()
#4 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#10 {main} in /var/www/worlddb/application/classes/Database/Query.php:52
2015-02-09 10:27:01 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /var/www/worlddb/application/classes/Controller/Welcome.php:7
2015-02-09 10:27:01 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Welcome.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/worldd...', 7, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Welcome.php:7
2015-02-09 10:27:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$template ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /var/www/worlddb/application/classes/Controller/Welcome.php:7
2015-02-09 10:27:48 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/worldd...', 7, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Welcome.php:7
2015-02-09 10:27:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$template ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /var/www/worlddb/application/classes/Controller/Welcome.php:7
2015-02-09 10:27:48 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/worldd...', 7, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Welcome.php:7
2015-02-09 10:45:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/home.php [ 114 ] in file:line
2015-02-09 10:45:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 11:17:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: regions_array ~ APPPATH/classes/Controller/Chained.php [ 65 ] in /var/www/worlddb/application/classes/Controller/Chained.php:65
2015-02-09 11:17:03 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Chained.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/worldd...', 65, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Chained->action_cities()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chained))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Chained.php:65