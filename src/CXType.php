<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXType
{
    private CData $cxType;

    public function __construct(CData $cxType)
    {
        $this->cxType = $cxType;
    }

    public function getCData(): CData
    {
        return $this->cxType;
    }

    public function getKind(): int
    {
        return (int) $this->cxType->kind;
    }

    public function getKindSpelling(): string
    {
        $string = Library::get()->clang_getTypeKindSpelling_wrap($this->cxType->kind);
        return (string) new CXString($string);
    }

    public function getSpelling(): string
    {
        $spelling = Library::get()->clang_getTypeSpelling_wrap($this->cxType);
        return (string) new CXString($spelling);
    }

    public function getResultType(): self
    {
        $type = Library::get()->clang_getResultType_wrap($this->cxType);
        return new static($type);
    }

    public function getPointeeType(): self
    {
        $type = Library::get()->clang_getPointeeType_wrap($this->cxType);
        return new static($type);
    }

    public function getCanonicalType(): self
    {
        $type = Library::get()->clang_getCanonicalType_wrap($this->cxType);
        return new static($type);
    }

    public function getNamedType(): self
    {
        $type = Library::get()->clang_Type_getNamedType_wrap($this->cxType);
        return new static($type);
    }

    public function getTypeDeclaration(): CXCursor
    {
        $cursor = Library::get()->clang_getTypeDeclaration_wrap($this->cxType);
        return new CXCursor($cursor);
    }

    public function getNumArgTypes(): int
    {
        return Library::get()->clang_getNumArgTypes_wrap($this->cxType);
    }

    public function getArgType(int $num): self
    {
        $type = Library::get()->clang_getArgType_wrap($this->cxType, $num);
        return new static($type);
    }

    public function getNumElements(): int
    {
        return Library::get()->clang_getNumElements_wrap($this->cxType);
    }

    public function getArrayElementType(): self
    {
        $type = Library::get()->clang_getArrayElementType_wrap($this->cxType);
        return new static($type);
    }

    public function isVariadic(): bool
    {
        return (bool) Library::get()->clang_isFunctionTypeVariadic_wrap($this->cxType);
    }

    public function isConstQualified(): bool
    {
        return (bool) Library::get()->clang_isConstQualifiedType_wrap($this->cxType);
    }
}
