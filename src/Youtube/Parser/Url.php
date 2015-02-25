<?php

namespace Youtube\Parser;

use Youtube\Video;

class Url implements ParserInterface {

    /**
     * Thanks Benjam for this regular expression.
     * stackoverflow: http://stackoverflow.com/questions/2936467/parse-youtube-video-id-using-preg-match
     *
     * @param $value
     * @return Video
     */
    public function parse($value)
    {
        if(!preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $value, $match)){
            throw new \InvalidArgumentException('Invalid url.');
        }

        return new Video($match[1]);
    }
} 