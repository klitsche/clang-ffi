<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use const Klitsche\Clang\FFI\CXChildVisit_Recurse;
use const Klitsche\Clang\FFI\CXTranslationUnit_DetailedPreprocessingRecord;
use const Klitsche\Clang\FFI\CXTranslationUnit_KeepGoing;
use const Klitsche\Clang\FFI\CXTranslationUnit_SkipFunctionBodies;

trait SetupTrait
{
    protected CXCursor $root;

    /**
     * @var CXCursor[]
     */
    protected array $cursors;

    protected function setUp(): void
    {
        $index = new CXIndex();

        $this->root = $index->parseTranslationUnit(
            __DIR__ . '/test.h',
            [],
            CXTranslationUnit_DetailedPreprocessingRecord |
            CXTranslationUnit_SkipFunctionBodies |
            CXTranslationUnit_KeepGoing
        )->getCursor();

        $collector = new class() implements CXCursorVisitorInterface {
            /**
             * @var CXCursor[]
             */
            public array $cursors;

            public function __construct()
            {
                $this->cursors = [];
            }

            public function __invoke(CXCursor $cursor, CXCursor $parent, $clientData): int
            {
                $this->cursors[$cursor->getUSR() ?: $cursor->getSpelling() ?: count($this->cursors)] = $cursor;

                return CXChildVisit_Recurse;
            }
        };

        $this->root->visitChildren($collector);

        $this->cursors = $collector->cursors;

//        print_r(array_map(fn (CXCursor $cursor) => $cursor->getKindSpelling(), $this->cursors));
    }
}
