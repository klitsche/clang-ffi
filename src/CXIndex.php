<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI;
use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXIndex
{
    private ?CData $index;

    public function __construct()
    {
        $this->index = Library::get()->clang_createIndex(0, 0);
    }

    public function __deconstruct(): void
    {
        Library::get()->clang_disposeIndex($this->index);
    }

    public function getCData(): CData
    {
        return $this->index;
    }

    /**
     * @see https://clang.llvm.org/docs/ClangCommandLineReference.html Available arguments
     * @see https://clang.llvm.org/doxygen/group__CINDEX__TRANSLATION__UNIT.html#gab1e4965c1ebe8e41d71e90203a723fe9 Available options
     */
    public function parseTranslationUnit(string $file, array $arguments = [], ?int $options = null): CXTranslationUnit
    {
        $numArguments = count($arguments);
        $nativeArguments = $numArguments > 0 ? $this->getNativeArguments($arguments) : null;

        $translationUnit = Library::new('void*');
        $errorCode = Library::get()->clang_parseTranslationUnit2(
            $this->index,
            $file,
            $numArguments > 0 ? FFI::cast('char**', $nativeArguments) : null,
            $numArguments > 0 ? $numArguments : null,
            null,
            null,
            $options,
            FFI::addr($translationUnit)
        );

        if ($errorCode !== 0) {
            throw Exception::fromErrorCode($errorCode);
        }

        return new CXTranslationUnit($translationUnit);
    }

    private function getNativeArguments(array $arguments): CData
    {
        $num = count($arguments);

        $nativeArguments = \FFI::new('char*[' . $num . ']');
        foreach (array_values($arguments) as $i => $argument) {
            $nativeArguments[$i] = $this->getCDataFromString($argument);
        }

        return $nativeArguments;
    }

    private function getCDataFromString(string $value): CData
    {
        $value .= "\0";
        $size = strlen($value);
        $cdata = FFI::new('char[' . $size . ']', false, true);
        FFI::memcpy($cdata, $value, $size);
        return FFI::cast('char*', $cdata);
    }
}
