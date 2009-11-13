<?php

namespace SkeletonProject\Tests\SkeletonProject;

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'SkeletonProject_AllTests::main');
}

require_once __DIR__ . '/../TestInit.php';

class AllTests
{
    public static function main()
    {
        \PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new \PHPUnit_Framework_TestSuite('SkeletonProject SkeletonProject Tests');

        $suite->addTestSuite('SkeletonProject\Tests\SkeletonProject\SampleTest');

        return $suite;
    }
}


if (PHPUnit_MAIN_METHOD == 'SkeletonProject_AllTests::main') {
    AllTests::main();
}