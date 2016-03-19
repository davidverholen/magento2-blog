<?php
/**
 * PostInterface.php
 *
 * PHP Version 5
 *
 * @category blog
 * @package  blog
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */

namespace DavidVerholen\Blog\Api\Data;

use Magento\Framework\Api\CustomAttributesDataInterface;

/**
 * Class PostInterface
 *
 * @category blog
 * @package  DavidVerholen\Blog\Api\Data
 * @author   David Verholen <david@verholen.com>
 * @license  http://opensource.org/licenses/OSL-3.0 OSL-3.0
 * @link     http://github.com/davidverholen
 */
interface PostInterface extends CustomAttributesDataInterface
{
    const TITLE = 'title';
    const STATUS = 'status';
    const VISIBILITY = 'visibility';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle();

    /**
     * getStatus
     *
     * @return integer
     */
    public function getStatus();

    /**
     * getVisibility
     *
     * @return integer
     */
    public function getVisibility();

    /**
     * getCreatedAt
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * getUpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * setTitle
     *
     * @param string $title
     *
     * @return PostInterface
     */
    public function setTitle($title);

    /**
     * setStatus
     *
     * @param integer $status
     *
     * @return PostInterface
     */
    public function setStatus($status);

    /**
     * setVisibility
     *
     * @param integer $visibility
     *
     * @return PostInterface
     */
    public function setVisibility($visibility);

    /**
     * setCreatedAt
     *
     * @param string $createdAt
     *
     * @return PostInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * setUpdatedAt
     *
     * @param string $updatedAt
     *
     * @return PostInterface
     */
    public function setUpdatedAt($updatedAt);
}
