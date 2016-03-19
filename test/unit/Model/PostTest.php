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

namespace DavidVerholen\Blog\Test\Unit\Model;

use DavidVerholen\Blog\Model\Post;
use Magento\Framework\Api\AttributeValueFactory;
use Magento\Framework\Api\ExtensionAttributesFactory;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Magento\Tax\Controller\RegistryConstants;

/**
 * Class PostTest
 *
 * @category blog
 * @package  DavidVerholen\Blog\Test\Unit\Model
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */
class PostTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Post
     */
    protected $post;

    protected function setUp()
    {
        parent::setUp();

        /** @var Context|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->getMockBuilder(Context::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var Registry|\PHPUnit_Framework_MockObject_MockObject $registry */
        $registry = $this->getMockBuilder(Registry::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var ExtensionAttributesFactory|\PHPUnit_Framework_MockObject_MockObject $extensionAttributesFactory */
        $extensionAttributesFactory = $this->getMockBuilder(ExtensionAttributesFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var AttributeValueFactory|\PHPUnit_Framework_MockObject_MockObject $attributeValueFactory */
        $attributeValueFactory = $this->getMockBuilder(AttributeValueFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var AbstractResource|\PHPUnit_Framework_MockObject_MockObject $resource */
        $resource = $this->getMockBuilder(AbstractResource ::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var AbstractDb|\PHPUnit_Framework_MockObject_MockObject $collection */
        $collection = $this->getMockBuilder(AbstractDb::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->post = new Post(
            $context,
            $registry,
            $extensionAttributesFactory,
            $attributeValueFactory,
            $resource,
            $collection
        );
    }

    public function testSetAndGetTitle()
    {
        $title = 'test title';
        $this->assertEquals(
            $title,
            $this->post->setTitle($title)->getTitle()
        );
    }

    public function testSetGetStatus()
    {
        $status = 12;
        $this->assertEquals(
            $status,
            $this->post->setStatus($status)->getStatus()
        );
    }

    public function testSetGetVisibility()
    {
        $visibility = 2;
        $this->assertEquals(
            $visibility,
            $this->post->setVisibility($visibility)->getVisibility()
        );
    }

    public function testSetGetCreatedAt()
    {
        $createdAt = '22.04.1985';
        $this->assertEquals(
            $createdAt,
            $this->post->setCreatedAt($createdAt)->getCreatedAt()
        );
    }

    public function testSetGetUpdatedAt()
    {
        $updatedAt = '22.04.1985';
        $this->assertEquals(
            $updatedAt,
            $this->post->setUpdatedAt($updatedAt)->getUpdatedAt()
        );
    }
}
