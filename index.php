<?php
define('ASSETS', 'assets');
$components = [
    'news',
];
require_once 'header.php';
require_once 'functions.php';
foreach ($components as $component){
    if (file_exists('components/' . '/' . $component . '.php')){
        require 'compsadsdonents/' . '/' . $component . '.php';
    }
}
require_once 'footer.php';