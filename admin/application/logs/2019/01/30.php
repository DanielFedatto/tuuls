<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-01-30 21:28:13 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2019-01-30 21:28:13 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tuulscom_tuuls')
#1 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\tuuls\admin\application\classes\controller\login.php(27): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 [internal function]: Controller_Login->before()
#4 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\tuuls\admin\index.php(109): Kohana_Request->execute()
#8 {main}
2019-01-30 21:28:14 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2019-01-30 21:28:14 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tuulscom_tuuls')
#1 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\tuuls\admin\application\classes\controller\login.php(27): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 [internal function]: Controller_Login->before()
#4 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\tuuls\admin\index.php(109): Kohana_Request->execute()
#8 {main}
2019-01-30 21:28:42 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2019-01-30 21:28:42 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tuulscom_tuuls')
#1 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\tuuls\admin\application\classes\controller\login.php(27): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 [internal function]: Controller_Login->before()
#4 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\tuuls\admin\index.php(109): Kohana_Request->execute()
#8 {main}
2019-01-30 21:49:09 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2019-01-30 21:49:09 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tuulscom_tuuls')
#1 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\tuuls\admin\application\classes\model\modulos.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\tuuls\admin\modules\orm\classes\kohana\orm.php(39): Model_Modulos->__construct(NULL)
#4 C:\xampp\htdocs\tuuls\admin\application\classes\controller\index.php(101): Kohana_ORM::factory('modulos')
#5 [internal function]: Controller_Index->before()
#6 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\tuuls\admin\index.php(109): Kohana_Request->execute()
#10 {main}
2019-01-30 21:50:05 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2019-01-30 21:50:05 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tuulscom_tuuls')
#1 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\tuuls\admin\application\classes\model\modulos.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\tuuls\admin\modules\orm\classes\kohana\orm.php(39): Model_Modulos->__construct(NULL)
#4 C:\xampp\htdocs\tuuls\admin\application\classes\controller\index.php(101): Kohana_ORM::factory('modulos')
#5 [internal function]: Controller_Index->before()
#6 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\tuuls\admin\index.php(109): Kohana_Request->execute()
#10 {main}
2019-01-30 21:50:06 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2019-01-30 21:50:06 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tuulscom_tuuls')
#1 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\tuuls\admin\application\classes\model\modulos.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\tuuls\admin\modules\orm\classes\kohana\orm.php(39): Model_Modulos->__construct(NULL)
#4 C:\xampp\htdocs\tuuls\admin\application\classes\controller\index.php(101): Kohana_ORM::factory('modulos')
#5 [internal function]: Controller_Index->before()
#6 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\tuuls\admin\index.php(109): Kohana_Request->execute()
#10 {main}
2019-01-30 21:50:06 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2019-01-30 21:50:06 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tuulscom_tuuls')
#1 C:\xampp\htdocs\tuuls\admin\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\tuuls\admin\application\classes\model\modulos.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\tuuls\admin\modules\orm\classes\kohana\orm.php(39): Model_Modulos->__construct(NULL)
#4 C:\xampp\htdocs\tuuls\admin\application\classes\controller\index.php(101): Kohana_ORM::factory('modulos')
#5 [internal function]: Controller_Index->before()
#6 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\tuuls\admin\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\tuuls\admin\index.php(109): Kohana_Request->execute()
#10 {main}