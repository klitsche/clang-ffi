<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use const Klitsche\Clang\FFI\CXError_ASTReadError;
use const Klitsche\Clang\FFI\CXError_Crashed;
use const Klitsche\Clang\FFI\CXError_Failure;
use const Klitsche\Clang\FFI\CXError_InvalidArguments;

class Exception extends \Exception
{
    public static function fromErrorCode(int $errorCode): self
    {
        switch ($errorCode) {
            case CXError_Crashed:
                return new static('libclang crashed', $errorCode);
            case CXError_InvalidArguments:
                return new static('Invalid arguments', $errorCode);
            case CXError_ASTReadError:
                return new static('AST deserialization error', $errorCode);
            default:
            case CXError_Failure:
                return new static('Generic error', $errorCode);
        }
    }
}
