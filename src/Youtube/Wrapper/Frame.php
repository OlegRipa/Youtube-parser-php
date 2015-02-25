<?php

namespace Youtube\Wrapper;

use Youtube\VideoInterface;

class Frame implements WrapperInterface {

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $rel;

    /**
     * @param int $width
     * @param int $height
     * @param int $rel
     */
    function __construct($width = 560, $height = 349, $rel = 0)
    {
        $this->width = $width;
        $this->rel = $rel;
        $this->height = $height;
    }

    public function wrap(VideoInterface $video)
    {
        $src = "http://www.youtube.com/embed/{$video->getId()}'?rel={$this->rel}";
        return "<iframe src='{$src}' frameborder='0' width='{$this->width}' height='{$this->height}'></iframe>";
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param int $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
} 