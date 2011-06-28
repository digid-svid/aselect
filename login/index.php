<?php
// Forward to ASelect landing page
header ('HTTP/1.0 307 Temporary Redirect');
header ("Location: {$_COOKIE['aselectreturnpath']}");

// Set cookies for full path, not just /login.
setcookie ('aselectuid', $_COOKIE['aselectuid'], 0, '/', $_SERVER['HTTP_HOST']);
setcookie ('aselectattributes', $_COOKIE['aselectattributes'], 0, '/', $_SERVER['HTTP_HOST']);
setcookie ('aselectorganization', $_COOKIE['aselectorganization'], 0, '/', $_SERVER['HTTP_HOST']);
setcookie ('aselectticket', $_COOKIE['aselectticket'], 0, '/', $_SERVER['HTTP_HOST']);
//header('Content-Type: text/plain');
//print_r($_COOKIE);