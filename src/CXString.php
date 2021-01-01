<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXString implements \Stringable
{
    private CData $cxString;

    public function __construct(CData $cxString)
    {
        $this->cxString = $cxString;
    }

    public function __destruct()
    {
        Library::get()->clang_disposeString_wrap($this->cxString);
    }

    public function getCData(): CData
    {
        return $this->cxString;
    }

    public function __toString(): string
    {
        return (string) Library::get()->clang_getCString_wrap($this->cxString);
    }
}
