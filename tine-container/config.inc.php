<?php
// NOTE: You can either:
//  - copy this file to config.inc.php and add change config values
//  - create an empty config.inc.php, make it writeable to the webserver and edit config via the setup.php interface
//  - make this directory temporary writeable to the webserver and edit config via the setup.php interface

// minimal configuration
return array(
    // set 'count' equal zero to disable captcha, or set to number of invalid logins before request captcha.
    'captcha' => array('count'=>0), 
    'database' => array(
        'host'          => 'db',
        'dbname'        => 'tine20',
        'username'      => 'tine20',
        'password'      => 'dbpass',
        'adapter'       => 'pdo_mysql',
        'tableprefix'   => 'tine20_',
    ),
    'setupuser' => array(
        'username'      => 'tine20setup',
        'password'      => 'tine20pass' 
    ),

    'caching' => array (
        'active' => true,
        'path' => '/var/lib/tine20/cache',
        'lifetime' => 3600,
    ),

    'logger' => array (
        'active' => true,
        'filename' => '/var/log/tine20/tine20.log',
        'priority' => '3',
    ),
    'tmpdir'     => '/var/lib/tine20/tmp',
    'session' => array (
        'backend' => 'File',
        'path'    => '/var/lib/tine20/sessions'
    ),
    'filesdir'   => '/var/lib/tine20/files',
    'confdfolder' => '/etc/tine20/conf.d',
    'mapPanel'   => 1
);

