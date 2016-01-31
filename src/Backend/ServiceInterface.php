<?php

namespace Heise\Shariff\Backend;

/**
 * Interface ServiceInterface.
 */
interface ServiceInterface
{
    /**
     * @param string $url
     *
     * @return \GuzzleHttp\Message\Request
     */
    public function getRequest($url);

    /**
     * @param array $data
     *
     * @return int
     */
    public function extractCount(array $data);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param array $config
     */
    public function setConfig(array $config);
}
