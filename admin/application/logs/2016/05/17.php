<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-17 17:47:44 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`sistema`.`modulos_permissoes`, CONSTRAINT `fk_modulopermissaoper` FOREIGN KEY (`PER_ID`) REFERENCES `PERMISSOES` (`PER_ID`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT IGNORE INTO `MODULOS_PERMISSOES` (`MOD_ID`, `PER_ID`) VALUES 
                (7, 1) ON DUPLICATE KEY UPDATE MOD_ID = MOD_ID; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-05-17 17:47:44 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`sistema`.`modulos_permissoes`, CONSTRAINT `fk_modulopermissaoper` FOREIGN KEY (`PER_ID`) REFERENCES `PERMISSOES` (`PER_ID`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT IGNORE INTO `MODULOS_PERMISSOES` (`MOD_ID`, `PER_ID`) VALUES 
                (7, 1) ON DUPLICATE KEY UPDATE MOD_ID = MOD_ID; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/XAMPP/xamppfiles/htdocs/sistema/modules/gerador/classes/kohana/gerador.php(2823): Kohana_Database_MySQL->query(2, 'INSERT IGNORE I...')
#1 /Applications/XAMPP/xamppfiles/htdocs/sistema/application/classes/controller/gerador.php(40): Kohana_Gerador->salvar(Array)
#2 [internal function]: Controller_Gerador->action_salvar()
#3 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Gerador))
#4 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/sistema/index.php(109): Kohana_Request->execute()
#7 {main}
2016-05-17 20:10:35 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2016-05-17 20:10:35 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Applications/XAMPP/xamppfiles/htdocs/sistema/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Applications/X...')
#1 /Applications/XAMPP/xamppfiles/htdocs/sistema/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/sistema/application/classes/controller/teste.php(163): Kohana_Image::factory('/Applications/X...')
#3 [internal function]: Controller_Teste->action_save()
#4 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Teste))
#5 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/sistema/index.php(109): Kohana_Request->execute()
#8 {main}
2016-05-17 20:11:21 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2016-05-17 20:11:21 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Applications/XAMPP/xamppfiles/htdocs/sistema/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Applications/X...')
#1 /Applications/XAMPP/xamppfiles/htdocs/sistema/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/sistema/application/classes/controller/teste.php(233): Kohana_Image::factory('/Applications/X...')
#3 [internal function]: Controller_Teste->action_save()
#4 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Teste))
#5 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/sistema/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/sistema/index.php(109): Kohana_Request->execute()
#8 {main}
2016-05-17 20:31:34 --- ERROR: ErrorException [ 1 ]: Call to a member function pk() on null ~ APPPATH/classes/controller/usuarios.php [ 208 ]
2016-05-17 20:31:34 --- STRACE: ErrorException [ 1 ]: Call to a member function pk() on null ~ APPPATH/classes/controller/usuarios.php [ 208 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}