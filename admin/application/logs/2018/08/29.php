<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-08-29 15:33:19 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-29 15:33:19 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
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
2018-08-29 15:34:05 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2018-08-29 15:34:05 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
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