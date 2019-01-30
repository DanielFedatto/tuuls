<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-08-28 10:38:30 --- ERROR: Database_Exception [ 1364 ]: Field 'ACE_ITEM' doesn't have a default value [ INSERT INTO `ACESSOS` (`ACE_IP`, `ACE_DATA`, `ACE_HORA`, `ACE_MODULO`, `ACE_ACAO`, `ACE_POST`, `USU_ID`) VALUES ('177.19.162.126', '2018-08-28', '10:38:30', 'usuarios', 'edit', '', '3') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2018-08-28 10:38:30 --- STRACE: Database_Exception [ 1364 ]: Field 'ACE_ITEM' doesn't have a default value [ INSERT INTO `ACESSOS` (`ACE_IP`, `ACE_DATA`, `ACE_HORA`, `ACE_MODULO`, `ACE_ACAO`, `ACE_POST`, `USU_ID`) VALUES ('177.19.162.126', '2018-08-28', '10:38:30', 'usuarios', 'edit', '', '3') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home2/tuulscom/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `AC...', false, Array)
#1 /home2/tuulscom/public_html/admin/modules/orm/classes/kohana/orm.php(1153): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home2/tuulscom/public_html/admin/modules/orm/classes/kohana/orm.php(1287): Kohana_ORM->create(NULL)
#3 /home2/tuulscom/public_html/admin/application/classes/controller/index.php(85): Kohana_ORM->save()
#4 /home2/tuulscom/public_html/admin/application/classes/controller/usuarios.php(8): Controller_Index->before()
#5 [internal function]: Controller_Usuarios->before()
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(104): ReflectionMethod->invoke(Object(Controller_Usuarios))
#7 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#10 {main}
2018-08-28 10:56:28 --- ERROR: Database_Exception [ 1364 ]: Field 'ACE_ITEM' doesn't have a default value [ INSERT INTO `ACESSOS` (`ACE_IP`, `ACE_DATA`, `ACE_HORA`, `ACE_MODULO`, `ACE_ACAO`, `ACE_POST`, `USU_ID`) VALUES ('177.19.162.126', '2018-08-28', '10:56:28', 'usuarios', 'edit', '', '3') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2018-08-28 10:56:28 --- STRACE: Database_Exception [ 1364 ]: Field 'ACE_ITEM' doesn't have a default value [ INSERT INTO `ACESSOS` (`ACE_IP`, `ACE_DATA`, `ACE_HORA`, `ACE_MODULO`, `ACE_ACAO`, `ACE_POST`, `USU_ID`) VALUES ('177.19.162.126', '2018-08-28', '10:56:28', 'usuarios', 'edit', '', '3') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home2/tuulscom/public_html/admin/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `AC...', false, Array)
#1 /home2/tuulscom/public_html/admin/modules/orm/classes/kohana/orm.php(1153): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home2/tuulscom/public_html/admin/modules/orm/classes/kohana/orm.php(1287): Kohana_ORM->create(NULL)
#3 /home2/tuulscom/public_html/admin/application/classes/controller/index.php(85): Kohana_ORM->save()
#4 /home2/tuulscom/public_html/admin/application/classes/controller/usuarios.php(8): Controller_Index->before()
#5 [internal function]: Controller_Usuarios->before()
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(104): ReflectionMethod->invoke(Object(Controller_Usuarios))
#7 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#10 {main}
2018-08-28 17:44:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-28 17:44:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/home2/tuulscom...')
#1 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/home2/tuulscom...')
#2 /home2/tuulscom/public_html/admin/application/classes/controller/blog.php(169): Kohana_Image::factory('/home2/tuulscom...')
#3 [internal function]: Controller_Blog->action_save()
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#8 {main}
2018-08-28 17:44:33 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-28 17:44:33 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/home2/tuulscom...')
#1 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/home2/tuulscom...')
#2 /home2/tuulscom/public_html/admin/application/classes/controller/blog.php(169): Kohana_Image::factory('/home2/tuulscom...')
#3 [internal function]: Controller_Blog->action_save()
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#8 {main}
2018-08-28 17:45:27 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-28 17:45:27 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/home2/tuulscom...')
#1 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/home2/tuulscom...')
#2 /home2/tuulscom/public_html/admin/application/classes/controller/blog.php(244): Kohana_Image::factory('/home2/tuulscom...')
#3 [internal function]: Controller_Blog->action_save()
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#8 {main}
2018-08-28 17:46:32 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-28 17:46:32 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/home2/tuulscom...')
#1 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/home2/tuulscom...')
#2 /home2/tuulscom/public_html/admin/application/classes/controller/blog.php(244): Kohana_Image::factory('/home2/tuulscom...')
#3 [internal function]: Controller_Blog->action_save()
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#8 {main}
2018-08-28 17:46:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-28 17:46:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/home2/tuulscom...')
#1 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/home2/tuulscom...')
#2 /home2/tuulscom/public_html/admin/application/classes/controller/blog.php(244): Kohana_Image::factory('/home2/tuulscom...')
#3 [internal function]: Controller_Blog->action_save()
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#8 {main}
2018-08-28 17:55:19 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-28 17:55:19 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/home2/tuulscom...')
#1 /home2/tuulscom/public_html/admin/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/home2/tuulscom...')
#2 /home2/tuulscom/public_html/admin/application/classes/controller/blog.php(244): Kohana_Image::factory('/home2/tuulscom...')
#3 [internal function]: Controller_Blog->action_save()
#4 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 /home2/tuulscom/public_html/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home2/tuulscom/public_html/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home2/tuulscom/public_html/admin/index.php(109): Kohana_Request->execute()
#8 {main}