<?php
session_start();

require_once 'classes/Database.php';
require_once 'classes/Config.php';
require_once 'classes/Validate.php';
require_once 'classes/Input.php';
require_once 'classes/Session.php';
require_once 'classes/User.php';



$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'username' => '9085097564',
        'password' => 'printerVova',
        'database' => '9085097564_testsolutions',
    ],

    'session' => [
        'token_name' => 'token',
        'user_session' => 'user',
    ]
 ];

