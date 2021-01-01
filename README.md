# clang-ffi
A library for PHP exposing libclang via FFI.

It allows easy traversing and analyzing of an abstract syntax tree of a c / c++ file.

Unfortunately PHP FFI does not currently support Struct By Value as parameter or return value in
function calls. That is why a c based wrapper is provided for libclang itself, which can then be 
bound via FFI. This wrapper must be compiled before use.

The wrapper is taken from [dart ffigen](https://github.com/dart-lang/ffigen) and has been slightly extended.

Expect breaking changes along all 0.* pre-releases.

## Requirements

* PHP >= 7.4
* FFI extension enabled
* LLVM >= 9 with clang and libclang-dev

## Quick Start

Install latest llvm with clang ...

... on macOS

    brew install llvm

... on Debian / Ubuntu (see https://apt.llvm.org/)

    apt-get update; \
    apt-get install wget lsb-release software-properties-common ca-certificates gnupg; \
    wget -q https://apt.llvm.org/llvm.sh; \
    chmod +x llvm.sh; \
    sudo ./llvm.sh 9; \
    apt-get install libclang-9-dev;

Install in your project

    composer require klitsche/clang-ffi

Add to composer.json (this will trigger compilation of wrapped libclang library)

```json
    "scripts": {
        "post-autoload-dump": "Klitsche\\Clang\\FFI\\libclang\\Compiler::run",
    },
```

Dump autoload to trigger compilation

    composer dump-autoload

## Todos

* [ ] Add github action
* [ ] Add example
* [ ] Add ffigen
* [ ] Add multiversion support for llvm >9 (some const values are different)
* [ ] Add documentation
* [ ] Add support for Windows

## License

See [LICENSE.md](LICENSE.md) for details.

[LICENSE.wrapper.c.md](LICENSE.wrapper.c.md) covers file src/FFI/libclang/wrapper.c.