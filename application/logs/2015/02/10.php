<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-10 13:39:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Template' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2015-02-10 13:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 13:39:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/worlddb/system/classes/Kohana/View.php:145
2015-02-10 13:39:47 --- DEBUG: #0 /var/www/worlddb/system/classes/Kohana/View.php(145): Kohana_View->set_filename('main')
#1 /var/www/worlddb/system/classes/Kohana/View.php(30): Kohana_View->__construct('main', NULL)
#2 /var/www/worlddb/application/classes/Controller/Template.php(35): Kohana_View::factory('main')
#3 /var/www/worlddb/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#9 {main} in /var/www/worlddb/system/classes/Kohana/View.php:145
2015-02-10 14:24:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/Controller/API.php [ 26 ] in /var/www/worlddb/application/classes/Controller/API.php:26
2015-02-10 14:24:15 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/API.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/worldd...', 26, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(87): Controller_API->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/API.php:26
2015-02-10 14:24:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: locations ~ APPPATH/classes/Controller/API.php [ 35 ] in /var/www/worlddb/application/classes/Controller/API.php:35
2015-02-10 14:24:25 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/API.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/worldd...', 35, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(87): Controller_API->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/API.php:35
2015-02-10 14:24:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: locations ~ APPPATH/classes/Controller/API.php [ 30 ] in /var/www/worlddb/application/classes/Controller/API.php:30
2015-02-10 14:24:40 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/API.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/worldd...', 30, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(87): Controller_API->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/API.php:30
2015-02-10 14:24:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: locations ~ APPPATH/classes/Controller/API.php [ 30 ] in /var/www/worlddb/application/classes/Controller/API.php:30
2015-02-10 14:24:54 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/API.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/worldd...', 30, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(87): Controller_API->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/API.php:30
2015-02-10 14:25:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: locations ~ APPPATH/classes/Controller/API.php [ 30 ] in /var/www/worlddb/application/classes/Controller/API.php:30
2015-02-10 14:25:03 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/API.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/worldd...', 30, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(87): Controller_API->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/API.php:30
2015-02-10 16:47:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method URL::current() ~ APPPATH/classes/Core.php [ 119 ] in file:line
2015-02-10 16:47:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 16:48:21 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/countries.php [ 3 ] in /var/www/worlddb/application/views/countries.php:3
2015-02-10 16:48:21 --- DEBUG: #0 /var/www/worlddb/application/views/countries.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/worldd...', 3, Array)
#1 /var/www/worlddb/system/classes/Kohana/View.php(62): include('/var/www/worldd...')
#2 /var/www/worlddb/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/worldd...', Array)
#3 /var/www/worlddb/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/worlddb/application/views/main.php(127): Kohana_View->__toString()
#5 /var/www/worlddb/system/classes/Kohana/View.php(62): include('/var/www/worldd...')
#6 /var/www/worlddb/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/worldd...', Array)
#7 /var/www/worlddb/application/classes/Controller/Template.php(72): Kohana_View->render()
#8 /var/www/worlddb/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#11 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#14 {main} in /var/www/worlddb/application/views/countries.php:3
2015-02-10 17:11:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function mod() ~ APPPATH/views/countries.php [ 25 ] in file:line
2015-02-10 17:11:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 17:18:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: A ~ APPPATH/classes/Controller/Location.php [ 12 ] in /var/www/worlddb/application/classes/Controller/Location.php:12
2015-02-10 17:18:40 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Location.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/worldd...', 12, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_countries()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Location.php:12
2015-02-10 17:19:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: letter ~ APPPATH/views/countries.php [ 11 ] in /var/www/worlddb/application/views/countries.php:11
2015-02-10 17:19:19 --- DEBUG: #0 /var/www/worlddb/application/views/countries.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/worldd...', 11, Array)
#1 /var/www/worlddb/system/classes/Kohana/View.php(62): include('/var/www/worldd...')
#2 /var/www/worlddb/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/worldd...', Array)
#3 /var/www/worlddb/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/worlddb/application/views/main.php(128): Kohana_View->__toString()
#5 /var/www/worlddb/system/classes/Kohana/View.php(62): include('/var/www/worldd...')
#6 /var/www/worlddb/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/worldd...', Array)
#7 /var/www/worlddb/application/classes/Controller/Template.php(72): Kohana_View->render()
#8 /var/www/worlddb/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#11 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#14 {main} in /var/www/worlddb/application/views/countries.php:11
2015-02-10 17:20:52 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Location.php [ 12 ] in /var/www/worlddb/application/classes/Controller/Location.php:12
2015-02-10 17:20:52 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Location.php(12): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/worldd...', 12, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_countries()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Location.php:12
2015-02-10 17:23:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: A ~ APPPATH/classes/Controller/Location.php [ 13 ] in /var/www/worlddb/application/classes/Controller/Location.php:13
2015-02-10 17:23:17 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Location.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/worldd...', 13, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_countries()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Location.php:13
2015-02-10 17:23:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: A ~ APPPATH/classes/Controller/Location.php [ 13 ] in /var/www/worlddb/application/classes/Controller/Location.php:13
2015-02-10 17:23:42 --- DEBUG: #0 /var/www/worlddb/application/classes/Controller/Location.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/worldd...', 13, Array)
#1 /var/www/worlddb/system/classes/Kohana/Controller.php(84): Controller_Location->action_countries()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/worlddb/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Location))
#4 /var/www/worlddb/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/worlddb/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/worlddb/www/index.php(112): Kohana_Request->execute()
#7 {main} in /var/www/worlddb/application/classes/Controller/Location.php:13