<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use PHPUnit\Framework\TestCase;

use const Klitsche\Clang\FFI\CXType_Char_S;
use const Klitsche\Clang\FFI\CXType_Elaborated;
use const Klitsche\Clang\FFI\CXType_Float;
use const Klitsche\Clang\FFI\CXType_FunctionProto;
use const Klitsche\Clang\FFI\CXType_Pointer;
use const Klitsche\Clang\FFI\CXType_Record;
use const Klitsche\Clang\FFI\CXType_UChar;

/**
 * @covers \Klitsche\Clang\CXType
 * @uses \Klitsche\Clang\CXCursor
 * @uses \Klitsche\Clang\CXString
 * @uses \Klitsche\Clang\FFI\Library
 * @uses \Klitsche\Clang\CXIndex
 * @uses \Klitsche\Clang\CXTranslationUnit
 * @uses \Klitsche\Clang\FFI\CXCursorVisitorProxy
 */
class CXTypeTest extends TestCase
{
    use SetupTrait;

    public function testGetKind(): void
    {
        $type = $this->cursors['c:@F@func1']->getType();

        $this->assertSame(CXType_FunctionProto, $type->getKind());
        $this->assertSame('FunctionProto', $type->getKindSpelling());
    }

    public function testGetSpelling(): void
    {
        $type = $this->cursors['c:@F@func2']->getType();

        $this->assertSame('void (void)', $type->getSpelling());
    }

    public function testGetResultType(): void
    {
        $type = $this->cursors['c:@F@func1']->getType();

        $this->assertSame(CXType_Pointer, $type->getResultType()->getKind());
    }

    public function testGetNumArgTypesAndGetArgType(): void
    {
        $type = $this->cursors['c:@F@func1']->getType();

        $this->assertSame(2, $type->getNumArgTypes());
        $this->assertSame('char_t', $type->getArgType(0)->getSpelling());
        $this->assertSame('hairy', $type->getArgType(1)->getSpelling());
    }

    public function testGetPointeeType(): void
    {
        $type = $this->cursors['c:test.h@T@char_t']->getTypedefDeclUnderlyingType();

        $this->assertSame(CXType_Char_S, $type->getPointeeType()->getKind());
    }

    public function testGetCanonicalType(): void
    {
        $type = $this->cursors['c:test.h@T@float_t']->getTypedefDeclUnderlyingType();

        $this->assertSame(CXType_Float, $type->getCanonicalType()->getKind());
    }

    public function testGetNamedType(): void
    {
        $type = $this->cursors['c:@aVar']->getType();

        $this->assertSame(CXType_Elaborated, $type->getKind());
        $this->assertSame(CXType_Record, $type->getNamedType()->getKind());
    }

    public function testGetNumElements(): void
    {
        $type = $this->cursors['c:test.h@T@bar']->getTypedefDeclUnderlyingType();

        $this->assertSame(23, $type->getNumElements());
    }

    public function testGetArrayElementType(): void
    {
        $type = $this->cursors['c:test.h@T@bar']->getTypedefDeclUnderlyingType();

        $this->assertSame(CXType_UChar, $type->getArrayElementType()->getKind());
    }
}
