<?php

namespace PHP-design-patterns\Create\AbstractFactory;

/**
 * Picture类
 */

abstract class Picture implements MediaInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->path = (string) $path;
        $this->name = (string) $name;
    }
}