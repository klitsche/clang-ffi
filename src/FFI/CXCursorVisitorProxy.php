<?php

declare(strict_types=1);

namespace Klitsche\Clang\FFI;

use FFI\CData;
use Klitsche\Clang\CXCursor;
use Klitsche\Clang\CXCursorVisitorInterface;

class CXCursorVisitorProxy
{
    protected \Closure $callback;

    protected function __construct(CXCursorVisitorInterface $callback)
    {
        if ($callback instanceof \Closure) {
            $this->callback = $callback;
        } else {
            $this->callback = \Closure::fromCallable($callback);
        }
    }

    public function __invoke(CData $cursor, CData $parent, CData $clientData): int
    {
        return ($this->callback)(
            new CXCursor($cursor),
            new CXCursor($parent),
            null
        );
    }

    public static function create(CXCursorVisitorInterface $callback): \Closure
    {
        return \Closure::fromCallable(new static($callback));
    }
}
