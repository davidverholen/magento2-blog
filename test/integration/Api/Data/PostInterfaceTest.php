<?php
/**
 * PostInterfaceTest.php
 *
 * PHP Version 5
 *
 * @category blog
 * @package  blog
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */

namespace DavidVerholen\Blog\Test\Integration\Api\Data;

use DavidVerholen\Blog\Api\Data\PostInterface;
use Magento\Framework\App\ObjectManager;

/**
 * Class PostInterfaceTest
 *
 * @category blog
 * @package  DavidVerholen\Blog\Test\Integration\Api\Data
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */
class PostInterfaceTest extends \PHPUnit_Framework_TestCase
{
    public function testThePreferenceForPostInterfaceReturnsAnImplementation()
    {
        $this->assertInstanceOf(
            PostInterface::class,
            $this->getObjectManager()->create(PostInterface::class)
        );
    }

    /**
     * getObjectManager
     *
     * @return ObjectManager
     */
    private function getObjectManager()
    {
        return ObjectManager::getInstance();
    }
}
