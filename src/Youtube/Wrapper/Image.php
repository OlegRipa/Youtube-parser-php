<?php

namespace Youtube\Wrapper;

use Youtube\VideoInterface;

class Image implements WrapperInterface {

    /**
     * @var bool
     */
    private $hq;

    /**
     * @param bool $hq
     */
    function __construct($hq = FALSE)
    {
        $this->hq = $hq;
    }

    public function wrap(VideoInterface $video)
    {
        $name = ($this->hq) ? 'hqdefault.jpg' : 'default.jpg';
        return "<img src='http://i1.ytimg.com/vi/{$video->getId()}/{$name}' />";
    }

    /**
     * @return boolean
     */
    public function isHq()
    {
        return $this->hq;
    }

    /**
     * @param boolean $hq
     */
    public function setHq($hq)
    {
        $this->hq = $hq;
    }
} 