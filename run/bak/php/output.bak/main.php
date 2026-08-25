<?php
require_once __DIR__ . '/AppX/index.php';
($GLOBALS['AppX_main'] ?? \AppX\phpurs_eval_thunk('AppX_main'))();
if (class_exists('\\Revolt\\EventLoop')) { \Revolt\EventLoop::run(); }
