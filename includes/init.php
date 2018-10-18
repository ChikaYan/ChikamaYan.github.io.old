<?php
/**
 * Created by IntelliJ IDEA.
 * User: ChikamaYan
 * Date: 10/17/2018
 * Time: 8:03 AM
 */

define('ADMIN_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(ADMIN_PATH));
define('INCLUDES_PATH', PROJECT_PATH . '/includes');
define('STATIC_PATH', PROJECT_PATH . '/static');

$protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';
define('WEB_ROOT', $protocol . $_SERVER['HTTP_HOST'].'/personal-website');
define('WEB_STATIC', WEB_ROOT . '/static');
define('WEB_CSS', WEB_ROOT . '/static/css');