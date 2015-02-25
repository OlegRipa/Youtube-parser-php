<?php

namespace Youtube\Wrapper;
use Youtube\VideoInterface;

interface WrapperInterface {
    /**
     * @param VideoInterface $video
     * @return mixed
     */
    public function wrap(VideoInterface $video);
} 