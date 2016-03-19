<?php
/**
 * ModuleConfigTest.php
 *
 * PHP Version 5
 *
 * @category blog
 * @package  blog
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */

namespace DavidVerholen\Blog\Test\Integration;

use DavidVerholen\Blog\Module;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Module\ModuleList;

/**
 * Class ModuleConfigTest
 *
 * @category blog
 * @package  DavidVerholen\Blog\Test\Integration
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */
class ModuleConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testTheModuleIsRegistered()
    {
        $registrar = new ComponentRegistrar();
        $this->assertArrayHasKey(Module::NAME, $registrar->getPaths(ComponentRegistrar::MODULE));
    }

    public function testTheModuleIsConfiguredAndEnabled()
    {
        /** @var ModuleList $moduleList */
        $moduleList = $this->getObjectManager()->create(ModuleList::class);
        $this->assertTrue($moduleList->has(Module::NAME), 'The Module is not enabled');
    }

    private function getObjectManager()
    {
        return ObjectManager::getInstance();
    }
}
