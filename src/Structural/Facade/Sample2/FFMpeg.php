<?php

namespace Pattern\Structural\Facade\Sample2;

/**
 * EN: The FFmpeg subsystem (a complex video/audio conversion library).
 *
 */
class FFMpeg
{
    public static function create(): FFMpeg
    {
        /* ... */
    }

    public function open(string $video): void
    {
        /* ... */
    }

    // ...more methods and classes... RU: ...дополнительные методы и классы...
}
