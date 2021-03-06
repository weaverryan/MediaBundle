<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Entity;

/**
 * Bundle\MediaBundle\Entity\Gallery
 */
abstract class BaseGallery
{

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var boolean $enabled
     */
    protected $enabled;

    /**
     * @var boolean $enabled
     */
    protected $code;

    /**
     * @var datetime $updated_at
     */
    protected $updatedAt;

    /**
     * @var datetime $created_at
     */
    protected $createdAt;

    protected $defaultFormat;

    protected $galleryHasMedias;

    public function __construct()
    {
        $this->galleryHasMedias = new \Doctrine\Common\Collections\ArrayCollection;
    }
    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setDefaultFormat($defaultFormat)
    {
        $this->defaultFormat = $defaultFormat;
    }

    public function getDefaultFormat()
    {
        return $this->defaultFormat;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function prePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }

    public function setGalleryHasMedias($galleryHasMedias)
    {
        $this->galleryHasMedias = $galleryHasMedias;

        foreach ($galleryHasMedias as $galleryHasMedia)
        {
            $galleryHasMedia->setGallery($this);
        }
    }

    public function getGalleryHasMedias()
    {
        return $this->galleryHasMedias;
    }

    public function addGalleryHasMedias(BaseGalleryHasMedia $galleryHasMedia)
    {
        $this->galleryHasMedias[] = $galleryHasMedia;

        $galleryHasMedia->setGallery($this);
    }

    public function __toString()
    {
        return $this->getName() ?: '-';
    }
}