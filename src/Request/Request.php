<?php

/**
 * This file is part of the "-[:NEOXYGEN]->" NeoClient package
 *
 * (c) Neoxygen.io <http://neoxygen.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Neoxygen\NeoClient\Request;

class Request implements RequestInterface
{
    private $method;

    private $url;

    private $body;

    private $headers;

    private $options;

    public function __construct($method = null, $url = null, $body = null, array $headers = array(), array $options = array())
    {
        $this->method = $method;
        $this->url = $url;
        $this->body = $body;
        $this->headers = $headers;
        $this->options = $options;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getOptions()
    {
        return $this->options;
    }
}
