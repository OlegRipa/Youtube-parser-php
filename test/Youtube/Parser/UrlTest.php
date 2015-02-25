<?php

namespace Test\Youtube\Parser;


use Youtube\Parser\Url;

class UrlTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Url
     */
    private $parser;

    public function setUp(){
        $this->parser = new Url();
    }

    /**
     * @dataProvider getUrls
     */
    public function testParse($url, $result)
    {
        $video = $this->parser->parse($url);
        $this->assertEquals($video->getId(), $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testParseFail(){
        $video = $this->parser->parse('The testing string.');
    }

    public function getUrls(){
        return array(
            array('http://youtu.be/dQw4w9WgXcQ', 'dQw4w9WgXcQ'),
            array('https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'dQw4w9WgXcQ'),
            array('https://www.youtube.com/embed/dQw4w9WgXcQ', 'dQw4w9WgXcQ'),
            array('https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'dQw4w9WgXcQ'),
            array('https://www.youtube.com/v/dQw4w9WgXcQ', 'dQw4w9WgXcQ'),
            array('https://www.youtube.com/e/dQw4w9WgXcQ', 'dQw4w9WgXcQ'),
            array('https://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ', 'dQw4w9WgXcQ'),
        );
    }

} 