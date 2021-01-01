<?php

declare(strict_types=1);

namespace Klitsche\Clang;

interface CXCursorVisitorInterface
{
    /**
     * @param mixed|null $clientData
     */
    public function __invoke(CXCursor $cursor, CXCursor $parent, $clientData): int;
}
