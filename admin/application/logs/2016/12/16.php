<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-16 09:39:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Galeria' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
2016-12-16 09:39:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Galeria' not found ~ MODPATH/orm/classes/kohana/orm.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-12-16 09:51:58 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2016-12-16 09:51:58 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('')
#1 /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('')
#2 /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin/application/classes/controller/galeria.php(77): Kohana_Image::factory('')
#3 [internal function]: Controller_Galeria->action_save()
#4 /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Galeria))
#5 /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/zpanel/hostdata/zadmin/public_html/triadecom_com_br/admin/index.php(109): Kohana_Request->execute()
#8 {main}