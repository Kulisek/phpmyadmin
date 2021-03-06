<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * tests for PMA_pow()
 *
 * @package PhpMyAdmin-test
 */

$match = array();
preg_match(
    '@^([0-9]{1,2})(?:.([0-9]{1,2})(?:.([0-9]{1,2}))?)?@',
    phpversion(),
    $match
);
if (isset($match) && ! empty($match[1])) {
    if (! isset($match[2])) {
        $match[2] = 0;
    }
    if (! isset($match[3])) {
        $match[3] = 0;
    }
    /**
     * @ignore
     */
    define(
        'PMA_PHP_INT_VERSION',
        (int)sprintf('%d%02d%02d', $match[1], $match[2], $match[3])
    );
} else {
    /**
     * @ignore
     */
    define('PMA_PHP_INT_VERSION', 0);
}

require_once 'libraries/string.lib.php';

class PMA_STR_sub_test extends PHPUnit_Framework_TestCase
{
    public function testMultiByte()
    {
        $this->assertEquals(
            'čšě',
            PMA_substr('čšěčščěš', 0, 3)
        );
    }
}
?>
