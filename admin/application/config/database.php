<?php
error_reporting(0);

defined('SYSPATH') OR die('No direct access allowed.');

return array
    (
    'default' => array
        (
        'type' => 'mysql',
        'connection' => array(
            /**
             * The following options are available for MySQL:
             *
             * string   hostname     server hostname, or socket
             * string   database     database name
             * string   username     database username
             * string   password     database password
             * boolean  persistent   use persistent connections?
             * array    variables    system variables as "key => value" pairs
             *
             * Ports and sockets may be appended to the hostname.
             */
            'hostname' => 'localhost',
            'database' => 'tuulscom_tuuls',
            'username' => 'tuulscom_utuuls',
            'password' => 'T9wx9uEZfxvj',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
    )
);
