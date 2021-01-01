<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use PHPUnit\Framework\TestCase;

use const Klitsche\Clang\FFI\CXCursor_TranslationUnit;
use const Klitsche\Clang\FFI\CXDiagnostic_DisplayCategoryName;

/**
 * @covers \Klitsche\Clang\CXTranslationUnit
 * @covers \Klitsche\Clang\FFI\Library
 * @uses \Klitsche\Clang\CXIndex
 * @uses \Klitsche\Clang\CXCursor
 * @uses \Klitsche\Clang\CXString
 */
class CXTranslationUnitTest extends TestCase
{
    protected CXTranslationUnit $translationUnit;

    protected function setUp(): void
    {
        $index = new CXIndex();

        $this->translationUnit = $index->parseTranslationUnit(__DIR__ . '/test.h');
    }

    public function testGetCursor(): void
    {
        $cursor = $this->translationUnit->getCursor();

        $this->assertSame(__DIR__ . '/test.h', $cursor->getSpelling());
        $this->assertSame(CXCursor_TranslationUnit, $cursor->getKind());
    }

    public function testGetDiagnostics(): void
    {
        $diagnostics = $this->translationUnit->getDiagnostics(
            CXDiagnostic_DisplayCategoryName
        );

        $this->assertCount(2, $diagnostics);
        $this->assertStringContainsString('Parse Issue', $diagnostics[0]);
        $this->assertStringContainsString('Semantic Issue', $diagnostics[1]);
    }

    public function getCData(): void
    {
        $nativeTranslationUnit = $this->translationUnit->getCData();

        $translationUnit = new CXTranslationUnit($nativeTranslationUnit);

        $this->assertSame($nativeTranslationUnit, $translationUnit->getCData());
    }
}
