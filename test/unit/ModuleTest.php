<?php
/**
 * ModuleTest.php
 *
 * PHP Version 5
 *
 * @category blog
 * @package  blog
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */

namespace DavidVerholen\Blog\Test\Unit;

use DavidVerholen\Blog\Module;

/**
 * Class ModuleTest
 *
 * @category blog
 * @package  DavidVerholen\Blog\Test\Unit
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */
class ModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testTheModuleNameIsCorrect()
    {
        $this->assertEquals('DavidVerholen_Blog', Module::NAME);
    }
}
