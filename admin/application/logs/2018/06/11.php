<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-11 21:37:48 --- ERROR: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php:88
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/kohana/kohana/exception.php [ 88 ]
2018-06-11 21:37:48 --- STRACE: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php:88
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/kohana/kohana/exception.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2018-06-11 21:42:31 --- ERROR: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php:88
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/kohana/kohana/exception.php [ 88 ]
2018-06-11 21:42:31 --- STRACE: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php:88
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/kohana/kohana/exception.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2018-06-11 21:43:24 --- ERROR: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::text() must be an instance of Exception, instance of Error given, called in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php on line 130 and defined in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php:209
Stack trace:
#0 /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php(130): Kohana_Kohana_Exception::text(Object(Error))
#1 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#2 {main}
  thrown ~ SYSPATH/classes/kohana/kohana/exception.php [ 209 ]
2018-06-11 21:43:24 --- STRACE: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::text() must be an instance of Exception, instance of Error given, called in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php on line 130 and defined in /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php:209
Stack trace:
#0 /home2/tuulscom/public_html/admin/system/classes/kohana/kohana/exception.php(130): Kohana_Kohana_Exception::text(Object(Error))
#1 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#2 {main}
  thrown ~ SYSPATH/classes/kohana/kohana/exception.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2018-06-11 21:43:45 --- ERROR: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2018-06-11 21:43:45 --- STRACE: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 /home2/tuulscom/public_html/admin/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home2/tuulscom/public_html/admin/application/classes/controller/login.php(23): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#2 [internal function]: Controller_Login->before()
#3 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(104): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#7 {main}
2018-06-11 21:44:45 --- ERROR: Error [ 0 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2018-06-11 21:44:45 --- STRACE: Error [ 0 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 /home2/tuulscom/public_html/admin/application/classes/controller/login.php(23): Kohana_Database::instance()
#1 [internal function]: Controller_Login->before()
#2 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(104): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#6 {main}
2018-06-11 21:44:57 --- ERROR: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
2018-06-11 21:44:57 --- STRACE: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH/database/classes/kohana/database/mysql.php [ 59 ]
--
#0 /home2/tuulscom/public_html/admin/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home2/tuulscom/public_html/admin/application/classes/controller/login.php(23): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#2 [internal function]: Controller_Login->before()
#3 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(104): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#7 {main}