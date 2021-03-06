<?php
/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Provider;

use Sonata\MediaBundle\Model\MediaInterface;


class ImageProvider extends FileProvider
{

    public function getHelperProperties(MediaInterface $media, $format, $options = array())
    {
        $format_configuration = $this->getFormat($format);

        return array_merge(array(
          'title'    => $media->getName(),
          'src'      => $this->generatePublicUrl($media, $format),
          'width'    => $format_configuration['width'],
        ), $options);
    }

    /**
     * @param \Sonata\MediaBundle\Entity\BaseMedia $media
     * @return string
     */
    public function getReferenceImage(MediaInterface $media)
    {

        return $this->getCdn()->getPath(sprintf('%s/%s',
            $this->generatePath($media),
            $media->getProviderReference()
        ));
    }

    /**
     * @param \Sonata\MediaBundle\Entity\BaseMedia $media
     * @return string
     */
    public function getAbsolutePath(MediaInterface $media)
    {

        return $this->getReferenceImage($media);
    }

    /**
     * @param \Sonata\MediaBundle\Entity\BaseMedia $media
     * @param  $format
     * @return string
     */
    public function generatePublicUrl(MediaInterface $media, $format)
    {
        if ($format == 'reference') {
            return $this->getReferenceImage($media);
        }

        return $this->getCdn()->getPath(sprintf('%s/thumb_%d_%s.jpg',
            $this->generatePath($media),
            $media->getId(),
            $format
        ));
    }

    /**
     * @param \Sonata\MediaBundle\Entity\BaseMedia $media
     * @param  $format
     * @return string
     */
    public function generatePrivateUrl(MediaInterface $media, $format)
    {

        return sprintf('%s/thumb_%d_%s.jpg',
            $this->generatePath($media),
            $media->getId(),
            $format
        );
    }
}