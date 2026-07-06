<?php
require_once __DIR__ . '/App/index.php';
($GLOBALS['App_main'] ?? \App\phpurs_eval_thunk('App_main'))();
if (class_exists('\\Revolt\\EventLoop')) { \Revolt\EventLoop::run(); }
