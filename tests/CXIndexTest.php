<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use PHPUnit\Framework\TestCase;

use const Klitsche\Clang\FFI\CXCursor_TranslationUnit;

/**
 * @covers \Klitsche\Clang\CXIndex
 * @covers \Klitsche\Clang\FFI\Library
 * @covers \Klitsche\Clang\Exception
 * @uses \Klitsche\Clang\CXCursor
 * @uses \Klitsche\Clang\CXString
 * @uses \Klitsche\Clang\CXTranslationUnit
 */
class CXIndexTest extends TestCase
{
    public function testParseTranslationUnitCursor(): void
    {
        $index = new CXIndex();

        $translationUnit = $index->parseTranslationUnit(
            __DIR__ . '/test.h',
            ['-I' . __DIR__]
        );

        $this->assertSame(__DIR__ . '/test.h', $translationUnit->getCursor()->getSpelling());
        $this->assertSame(CXCursor_TranslationUnit, $translationUnit->getCursor()->getKind());
    }

    public function testParseTranslationUnitCursorWithUnknownFileShouldFail(): void
    {
        $index = new CXIndex();

        $this->expectException(Exception::class);
        $this->expectExceptionCode(1);
        $index->parseTranslationUnit(__DIR__ . '/unknown.h');
    }

    public function testParseTranslationUnitCursorWitInvalidArgumentShouldFail(): void
    {
        $index = new CXIndex();

        $this->expectException(Exception::class);
        $this->expectExceptionCode(4);
        $index->parseTranslationUnit(__DIR__ . '/test.h', ['-I']);
    }
}
