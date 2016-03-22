<?php
/**
 * PostTest.php
 *
 * PHP Version 5
 *
 * @category blog
 * @package  blog
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */

namespace DavidVerholen\Blog\Test\Integration\Model;

use DavidVerholen\Blog\Model\Post;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Class PostTest
 *
 * @category blog
 * @package  DavidVerholen\Blog\Test\Integration\Model
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */
class PostTest extends \PHPUnit_Framework_TestCase
{
    public function testTheModelIsAnInstanceOfAbstractExtensibleModel()
    {
        $this->assertInstanceOf(
            AbstractExtensibleModel::class,
            $this->getObjectManager()->create(Post::class)
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
