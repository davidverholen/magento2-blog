<?php
/**
 * Post.php
 *
 * PHP Version 5
 *
 * @category blog
 * @package  blog
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */

namespace DavidVerholen\Blog\Model;

use DavidVerholen\Blog\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Class Post
 *
 * @category blog
 * @package  DavidVerholen\Blog\Model
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */
class Post extends AbstractExtensibleModel implements PostInterface
{

    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(static::TITLE);
    }

    /**
     * getStatus
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->getData(static::STATUS);
    }

    /**
     * getVisibility
     *
     * @return integer
     */
    public function getVisibility()
    {
        return $this->getData(static::VISIBILITY);
    }

    /**
     * getCreatedAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(static::CREATED_AT);
    }

    /**
     * getUpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(static::UPDATED_AT);
    }

    /**
     * setTitle
     *
     * @param string $title
     *
     * @return PostInterface
     */
    public function setTitle($title)
    {
        return $this->setData(static::TITLE, $title);
    }

    /**
     * setStatus
     *
     * @param integer $status
     *
     * @return PostInterface
     */
    public function setStatus($status)
    {
        return $this->setData(static::STATUS, $status);
    }

    /**
     * setVisibility
     *
     * @param integer $visibility
     *
     * @return PostInterface
     */
    public function setVisibility($visibility)
    {
        return $this->setData(static::VISIBILITY, $visibility);
    }

    /**
     * setCreatedAt
     *
     * @param string $createdAt
     *
     * @return PostInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(static::CREATED_AT, $createdAt);
    }

    /**
     * setUpdatedAt
     *
     * @param string $updatedAt
     *
     * @return PostInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(static::UPDATED_AT, $updatedAt);
    }
}
