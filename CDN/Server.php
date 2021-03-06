<?php
/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\CDN;

class Server implements CDNInterface
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getPath($relativePath, $isFlushable = false)
    {
        return sprintf('%s/%s', $this->path, $relativePath);
    }

    /**
     * Flush a set of ressource matching the provided string
     *
     * @param string $string
     * @return void
     */
    function flushByString($string)
    {
        // nothing to do
    }

    /**
     * Flush the ressource
     *
     * @param string $media
     * @return void
     */
    function flush($string)
    {
        // nothing to do
    }

    /**
    * Flush a different set of ressource matching the provided string array
    *
    * @param string $string
    * @return void
    */
    function flushPaths(array $paths)
    {
        // nothing to do
    }

}