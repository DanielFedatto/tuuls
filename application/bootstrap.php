<?php

defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------
// Load the core Kohana class
require SYSPATH . 'classes/kohana/core' . EXT;

if (is_file(APPPATH . 'classes/kohana' . EXT)) {
    // Application extends the core
    require APPPATH . 'classes/kohana' . EXT;
}
else {
    // Load empty core extension
    require SYSPATH . 'classes/kohana' . EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('America/Sao_Paulo');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

//magic salt to add cookie
Cookie::$salt = 'tio42adeuseObrigadopelosPeixes2013';
// Set the number of seconds before a cookie expires
Cookie::$expiration = DATE::WEEK; // by default until the browser close

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV'])) {
    //Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
    Kohana::$environment = Kohana::DEVELOPMENT; // DEVELOPMENT PRODUCTION
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
    'base_url' => '/tuuls',
    'index_file' => FALSE,
    'profile' => Kohana::$environment !== Kohana::PRODUCTION,
    'caching' => Kohana::$environment === Kohana::PRODUCTION,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    // 'auth'       => MODPATH.'auth',       // Basic authentication
    // 'cache'      => MODPATH.'cache',      // Caching with multiple backends
    // 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
    'database' => MODPATH . 'database', // Database access
    'pagination' => MODPATH . 'pagination', // PAGINATION
    'orm' => MODPATH . 'orm', // Object Relationship Mapping
    'image'      => MODPATH.'image',      // Image manipulation
    'gerador' => MODPATH.'gerador',      // Gerador
        // 'unittest'   => MODPATH.'unittest',   // Unit testing
        // 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
if (!Route::cache()) {
    Route::set('produtos', '<controller>/<action>/<id>/<titulo>')
	->defaults(array(
		'controller' 	=> 'produtos',
		'action'     	=> 'verProdutos',
		'id'	=> 1,
        'titulo'	=> 2,
	));
    
    Route::set('galeria', '<controller>/<action>/<id>/<modulo>/<item>')
	->defaults(array(
		'controller' 	=> 'galeria',
		'action'     	=> 'excluir',
		'id'	=> 1,
        'modulo'	=> 'noticia',
        'item'	=> 1,
	));
    
    Route::set('default', '(<controller>(/<action>(/<id>)))')
            ->defaults(array(
                'controller' => 'index',
                'action' => 'index',
            ));
    
    
}