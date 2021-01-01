<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXTranslationUnit
{
    private CData $translationUnit;

    public function __construct(CData $translationUnit)
    {
        $this->translationUnit = $translationUnit;
    }

    public function __deconstruct(): void
    {
        Library::get()->clang_disposeTranslationUnit($this->translationUnit);
    }

    public function getCData(): CData
    {
        return $this->translationUnit;
    }

    public function getCursor(): CXCursor
    {
        $cursor = Library::get()->clang_getTranslationUnitCursor_wrap($this->translationUnit);
        return new CXCursor($cursor);
    }

    /**
     * @param int|null $options See https://clang.llvm.org/doxygen/group__CINDEX__DIAG.html#ga0545c7c3ef36a397c44d142b0385b8d1
     */
    public function getDiagnostics(?int $options = null): array
    {
        $diagnostics = [];
        $num = Library::get()->clang_getNumDiagnostics($this->translationUnit);
        for ($index = 0; $index < $num; $index++) {
            $diagnostic = Library::get()->clang_getDiagnostic($this->translationUnit, $index);
            $cxString = Library::get()->clang_formatDiagnostic_wrap(
                $diagnostic,
                $options
            );
            $diagnostics[] = (string) new CXString($cxString);
            Library::get()->clang_disposeDiagnostic($diagnostic);
        }

        return $diagnostics;
    }
}
