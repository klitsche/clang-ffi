<?php

declare(strict_types=1);

namespace Klitsche\Clang;

class FileLocation
{
    private string $file;
    private int $line;
    private int $column;
    private int $offset;

    public function __construct(
        string $file,
        int $line,
        int $column,
        int $offset
    ) {
        $this->file = $file;
        $this->line = $line;
        $this->column = $column;
        $this->offset = $offset;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getLine(): int
    {
        return $this->line;
    }

    public function getColumn(): int
    {
        return $this->column;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
