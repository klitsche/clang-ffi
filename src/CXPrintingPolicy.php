<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXPrintingPolicy
{
    private CData $cxPrinterPolicy;

    public function __construct(CData $cxPrinterPolicy)
    {
        $this->cxPrinterPolicy = $cxPrinterPolicy;
    }

    public function getCData(): CData
    {
        return $this->cxPrinterPolicy;
    }

    public function __deconstruct(): void
    {
        Library::get()->clang_PrintingPolicy_dispose($this->cxPrinterPolicy);
    }

    public function setProperty(int $property, int $value): void
    {
        Library::get()->clang_PrintingPolicy_setProperty($this->cxPrinterPolicy, $property, $value);
    }

    public function getProperty(int $property): int
    {
        return Library::get()->clang_PrintingPolicy_getProperty($this->cxPrinterPolicy, $property);
    }
}
