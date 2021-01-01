<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXSourceRange
{
    private CData $cxSourceRange;

    public function __construct(CData $cxSourceRange)
    {
        $this->cxSourceRange = $cxSourceRange;
    }

    public function getCData(): CData
    {
        return $this->cxSourceRange;
    }


    public function equal(self $sourceRange): bool
    {
        return (bool) Library::get()->clang_equalRanges_wrap($this->cxSourceRange, $sourceRange->getCData());
    }
}
