<?php

namespace Leogout\Bundle\SeoBundle\Seo\Stdlib;

/**
 * Interface UrlAwareInterface
 *
 * @author Daan Biesterbos https://www.linkedin.com/in/daanbiesterbos
 */
interface UrlAwareInterface
{
    /**
     * @required
     *
     * @return string|null
     */
    public function getUrl();

    /**
     * @optional
     *
     * @return string|null
     */
    public function getSecureUrl();
}