# clang-ffi

[![Build](https://github.com/klitsche/clang-ffi/workflows/Build/badge.svg)](https://github.com/klitsche/clang-ffi/actions?query=workflow%3Atest)
[![Build macOS](https://github.com/klitsche/clang-ffi/workflows/Build%20macOS/badge.svg)](https://github.com/klitsche/clang-ffi/actions?query=workflow%3Atest-macos)

[![Test Coverage](https://api.codeclimate.com/v1/badges/439f6cf45adc85c463cc/test_coverage)](https://codeclimate.com/github/klitsche/clang-ffi/test_coverage)
[![Maintainability](https://api.codeclimate.com/v1/badges/439f6cf45adc85c463cc/maintainability)](https://codeclimate.com/github/klitsche/clang-ffi/maintainability)
[![Packagist](https://img.shields.io/packagist/v/klitsche/clang-ffi)](https://packagist.org/packages/klitsche/clang-ffi)

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

Install llvm with clang ...

... on macOS (see https://formulae.brew.sh/formula/llvm)

    brew install llvm@11

... on Debian / Ubuntu (see https://apt.llvm.org/)

    apt-get update; \
    apt-get install wget lsb-release software-properties-common ca-certificates gnupg; \
    wget -q https://apt.llvm.org/llvm.sh; \
    chmod +x llvm.sh; \
    sudo ./llvm.sh 11; \
    apt-get install libclang-11-dev;

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

## Run examples

Checkout & prepare

    git clone https://github.com/klitsche/clang-ffi.git; \
    cd clang-ffi; \
    docker-compose build;

Print parsed file

    docker-compose run --rm php74 php examples/print.php

Collect and dump simplified AST nodes as json

    docker-compose run --rm php74 php examples/json.php

Dump found issues during parsing

    docker-compose run --rm php74 php examples/issues.php

## Todos

* [ ] Add ffigen
* [ ] Add multiversion support for llvm >9 (some const values are different)
* [ ] Add documentation
* [ ] Add support for Windows

## License

See [LICENSE.md](LICENSE.md) for details.

[LICENSE.wrapper.c.md](LICENSE.wrapper.c.md) covers file src/FFI/libclang/wrapper.c.