<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Model;


interface MediaInterface
{
    const STATUS_OK          = 1;
    const STATUS_SENDING     = 2;
    const STATUS_PENDING     = 3;
    const STATUS_ERROR       = 4;
    const STATUS_ENCODING    = 5;

    function setBinaryContent($binaryContent);

    function getBinaryContent();

    function getMetadataValue($name, $default = null);

    function getId();
    
    /**
     * Set name
     *
     * @param string $name
     */
    function setName($name);

    /**
     * Get name
     *
     * @return string $name
     */
    function getName();

    /**
     * Set description
     *
     * @param text $description
     */
    function setDescription($description);

    /**
     * Get description
     *
     * @return text $description
     */
    function getDescription();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    function getEnabled();

    /**
     * Set provider_name
     *
     * @param string $providerName
     */
    function setProviderName($providerName);

    /**
     * Get provider_name
     *
     * @return string $providerName
     */
    function getProviderName();

    /**
     * Set provider_status
     *
     * @param integer $providerStatus
     */
    function setProviderStatus($providerStatus);

    /**
     * Get provider_status
     *
     * @return integer $providerStatus
     */
    function getProviderStatus();

    /**
     * Set provider_reference
     *
     * @param string $providerReference
     */
    function setProviderReference($providerReference);

    /**
     * Get provider_reference
     *
     * @return string $providerReference
     */
    function getProviderReference();

    /**
     * Set provider_metadata
     *
     * @param array $providerMetadata
     */
    function setProviderMetadata(array $providerMetadata = array());

    /**
     * Get provider_metadata
     *
     * @return array $providerMetadata
     */
    function getProviderMetadata();

    /**
     * Set width
     *
     * @param integer $width
     */
    function setWidth($width);

    /**
     * Get width
     *
     * @return integer $width
     */
    function getWidth();

    /**
     * Set height
     *
     * @param integer $height
     */
    function setHeight($height);

    /**
     * Get height
     *
     * @return integer $height
     */
    function getHeight();

    /**
     * Set length
     *
     * @param decimal $length
     */
    function setLength($length);

    /**
     * Get length
     *
     * @return decimal $length
     */
    function getLength();

    /**
     * Set copyright
     *
     * @param string $copyright
     */
    function setCopyright($copyright);

    /**
     * Get copyright
     *
     * @return string $copyright
     */
    function getCopyright();

    /**
     * Set authorName
     *
     * @param string $authorName
     */
    function setAuthorName($authorName);

    /**
     * Get authorName
     *
     * @return string $authorName
     */
    function getAuthorName();

    /**
     * Set context
     *
     * @param string $context
     */
    function setContext($context);

    /**
     * Get context
     *
     * @return string $context
     */
    function getContext();

    /**
     * Set cdnIsFlushable
     *
     * @param boolean $cdnIsFlushable
     */
    function setCdnIsFlushable($cdnIsFlushable);

    /**
     * Get cdn_is_flushable
     *
     * @return boolean $cdnIsFlushable
     */
    function getCdnIsFlushable();

    /**
     * Set cdn_flush_at
     *
     * @param datetime $cdnFlushAt
     */
    function setCdnFlushAt($cdnFlushAt);

    /**
     * Get cdn_flush_at
     *
     * @return datetime $cdnFlushAt
     */
    function getCdnFlushAt();

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    function setUpdatedAt($updatedAt);

    /**
     * Get updated_at
     *
     * @return datetime $updatedAt
     */
    function getUpdatedAt();

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    function setCreatedAt($createdAt);

    /**
     * Get created_at
     *
     * @return datetime $createdAt
     */
    function getCreatedAt();

    /**
     * Set content_type
     *
     * @param varchar $contentType
     */
    function setContentType($contentType);
    /**
     * Get content_type
     *
     * @return varchar $contentType
     */
    function getContentType();
    /**
     * Set size
     *
     * @param integer $size
     */
    function setSize($size);

    /**
     * Get size
     *
     * @return integer $size
     */
    function getSize();

    function __toString();

    function setGalleryHasMedias($galleryHasMedias);

    function getGalleryHasMedias();
}