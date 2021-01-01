<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Klitsche\Clang\FileLocation
 */
class FileLocationTest extends TestCase
{
    public function testGetter(): void
    {
        $fileLocation = new FileLocation('file', 1, 2, 3);

        $this->assertSame('file', $fileLocation->getFile());
        $this->assertSame(1, $fileLocation->getLine());
        $this->assertSame(2, $fileLocation->getColumn());
        $this->assertSame(3, $fileLocation->getOffset());
    }
}
