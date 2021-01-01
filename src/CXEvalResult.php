<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXEvalResult
{
    private CData $evalResult;

    public function __construct(CData $evalResult)
    {
        $this->evalResult = $evalResult;
    }

    public function __destruct()
    {
        Library::get()->clang_EvalResult_dispose($this->evalResult);
    }

    public function getKind(): int
    {
        return Library::get()->clang_EvalResult_getKind($this->evalResult);
    }

    public function getAsInt(): int
    {
        return (int) Library::get()->clang_EvalResult_getAsInt($this->evalResult);
    }

    public function getAsLongLong(): int
    {
        return (int) Library::get()->clang_EvalResult_getAsLongLong($this->evalResult);
    }

    public function isUnsignedInt(): bool
    {
        return (bool) Library::get()->clang_EvalResult_isUnsignedInt($this->evalResult);
    }

    public function getAsUnsigned(): int
    {
        return (int) Library::get()->clang_EvalResult_getAsUnsigned($this->evalResult);
    }

    public function getAsDouble(): float
    {
        return (float) Library::get()->clang_EvalResult_getAsDouble($this->evalResult);
    }

    public function getAsStr(): string
    {
        return (string) Library::get()->clang_EvalResult_getAsStr($this->evalResult);
    }
}
