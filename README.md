Youtube-parser-php
==================

Youtube php parser.

```php

require_once 'vendor/autoload.php';

use \Youtube\Wrapper\Frame;
use \Youtube\Wrapper\Image;
use \Youtube\Wrapper\WrapperInterface;

$parser = new \Youtube\Parser\Url();

try {

    $video = $parser->parse('http://youtu.be/BtOzj-8rDwE');

    $wrappers = array(
        new Frame($width = 1024, $height = 640, $rel = 0),
        new Image($hq = TRUE)
    );

    /** @var WrapperInterface $wrapper */
    foreach ($wrappers as $wrapper) {
        echo $wrapper->wrap($video);
    }

} catch(\InvalidArgumentException $e) {
    echo $e->getMessage();
}

```