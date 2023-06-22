--TEST--
GH-498: The test methods won't be run if a dataProvider throws Exception and --group is added in command line
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--group';
$_SERVER['argv'][3] = 'trueOnly';
$_SERVER['argv'][4] = __DIR__ . '/498/Issue498Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

E                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 error:

1) Error
The data provider specified for Issue498Test::shouldBeFalse is invalid.
Exception: Can't create the data
%sIssue498Test.php:%d

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
