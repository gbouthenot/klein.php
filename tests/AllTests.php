<?php

require_once dirname(__FILE__) . '/GeturlTest.php';
require_once dirname(__FILE__) . '/HeadersTest.php';
require_once dirname(__FILE__) . '/RoutesTest.php';
require_once dirname(__FILE__) . '/ValidationsTest.php';
require_once dirname(__FILE__) . '/ResponsesTest.php';
require_once dirname(__FILE__) . '/RoutesExtTest.php';

class AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PHPUnit Framework');

        $suite->addTestSuite('GeturlTest');
        $suite->addTestSuite('HeadersTest');
        $suite->addTestSuite('RoutesTest');
        $suite->addTestSuite('ValidationsTest');
        $suite->addTestSuite('ResponsesTest');
        $suite->addTestSuite('RoutesExtTest');

        return $suite;
    }
}