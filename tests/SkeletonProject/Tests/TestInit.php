<?php

namespace SkeletonProject\Tests;

error_reporting(E_ALL | E_STRICT);

require_once 'PHPUnit/Framework/Assert/Functions.php';
require_once 'PHPUnit/TextUI/TestRunner.php';
require_once __DIR__ . '/../../../lib/SkeletonProject/ClassLoader.php';

$classLoader = new \SkeletonProject\ClassLoader('SkeletonProject');
$classLoader->register();

set_include_path(
    __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'lib'
    . PATH_SEPARATOR .
    get_include_path() 
);