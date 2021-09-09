<?php

declare(strict_types=1);

namespace Klitsche\Clang\FFI\libclang;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Script\Event;
use Symfony\Component\Process\Process;

class Compiler
{
    protected Composer $composer;

    protected IOInterface $io;

    protected array $config = [
        'Linux' => [
            'clangBin' => null,
            'clangArgs' => [
                '-I/usr/lib/llvm-9/include/',
                '-I/usr/lib/llvm-10/include/',
                '-I/usr/lib/llvm-11/include/',
                '-I/usr/lib/llvm-12/include/',
                '-I/usr/lib/llvm-13/include/',
                '-v',
                '-shared',
                '-fPIC',
            ],
            'cfile' => __DIR__ . '/wrapper.c',
            'lib' => __DIR__ . '/libclangwrapper.so',
        ],
        'Darwin' => [
            'clangBin' => null,
            'clangArgs' => [
                '-I/usr/local/opt/llvm@9/include/',
                '-I/usr/local/opt/llvm@10/include/',
                '-I/usr/local/opt/llvm@11/include/',
                '-I/usr/local/opt/llvm@12/include/',
                '-I/usr/local/opt/llvm@13/include/',
                '-I/usr/local/opt/llvm/include/',
                '-I/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX.sdk/usr/include/',
                '-L/usr/local/opt/llvm/lib/',
                '-v',
                '-shared',
                '-fPIC',
            ],
            'cfile' => __DIR__ . '/wrapper.c',
            'lib' => __DIR__ . '/libclangwrapper.dylib',
        ],
        'Windows' => [
            'clangBin' => null,
            'clangArgs' => [
                '-I/usr/local/opt/llvm/include/',
                '-I/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX.sdk/usr/include/',
                '-L/usr/local/opt/llvm/lib/',
                '-v',
                '-shared',
                '-fPIC',
            ],
            'cfile' => __DIR__ . '/wrapper.c',
            'lib' => __DIR__ . '/libclangwrapper.dll',
        ],
    ];

    protected function __construct(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;

        $extras = $this->composer->getConfig()->get('extras');
        $this->config = array_merge($this->config, $extras['clang-ffi'] ?? []);
    }

    public static function run(Event $event): int
    {
        $compiler = new static($event->getComposer(), $event->getIO());
        return $compiler->internalRun();
    }

    protected function internalRun(): int
    {
        $this->config[PHP_OS_FAMILY]['clangBin'] = $this->detectClang();

        if (empty($this->config[PHP_OS_FAMILY]['clangBin'])) {
            $this->io->writeError('<error>Cannot detect clang binary to compile libclangwrapper</error>');
            $this->io->writeError('  clang >= 9 is required');
            $this->io->writeError('  Is llvm with clang installed on your system?');
            $this->io->writeError('  You may configure extras.clang-ffi.{PHP_OS_FAMILY}.clangBin in composer.json');
            return 1;
        }

        if (empty($this->config[PHP_OS_FAMILY]['cfile'])) {
            $this->io->writeError('<error>extras.clang-ffi.{PHP_OS_FAMILY}.cfile not set</error>');
            return 1;
        }

        if (empty($this->config[PHP_OS_FAMILY]['lib'])) {
            $this->io->writeError('<error>extras.clang-ffi.{PHP_OS_FAMILY}.lib not set</error>');
            return 1;
        }

        $process = new Process(
            array_merge(
                [
                    $this->config[PHP_OS_FAMILY]['clangBin'],
                ],
                $this->config[PHP_OS_FAMILY]['clangArgs'] ?? [],
                [
                    $this->config[PHP_OS_FAMILY]['cfile'],
                ],
                [
                    sprintf('-o%s', $this->config[PHP_OS_FAMILY]['lib']),
                ],
            ),
            __DIR__
        );

        $this->io->writeError(sprintf('<info>Compile %s</info>', $this->config[PHP_OS_FAMILY]['lib']));
        $this->io->writeError($process->getCommandLine(), true, IOInterface::VERBOSE);

        $process->run(
            function ($type, $buffer): void {
                if ($type === Process::ERR) {
                    $this->io->writeError(sprintf('%s', $buffer), true, IOInterface::DEBUG);
                } else {
                    $this->io->write(sprintf('%s', $buffer), true, IOInterface::DEBUG);
                }
            }
        );

        if (file_exists($this->config[PHP_OS_FAMILY]['lib'])) {
            $this->io->writeError(sprintf('Successfully compiled %s', $this->config[PHP_OS_FAMILY]['lib']));
            return $process->getExitCode();
        }

        $this->io->writeError(sprintf('<error>Failed to compile %s</error>', $this->config[PHP_OS_FAMILY]['lib']));

        return $process->getExitCode();
    }

    protected function detectClang(): ?string
    {
        $clangBins = [
            'clang-13',
            'clang-12',
            'clang-11',
            'clang-10',
            'clang-9',
            'clang',
        ];
        $clangBinConfig = $this->config[PHP_OS_FAMILY]['clangBin'] ?? null;
        if ($clangBinConfig !== null) {
            $clangBins = array_unshift($clangBins, $clangBinConfig);
        }

        foreach (
            $clangBins as $clangBin
        ) {
            $clangBinFound = $this->findBinary($clangBin);

            if ($clangBinFound === null) {
                continue;
            }

            $this->io->writeError(sprintf('<info>Found clang binary: %s</info>', $clangBinFound), true, IOInterface::VERBOSE);

            $process = new Process([$clangBinFound, '--version']);
            $process->run();

            if ($process->getExitCode() === 0) {
                $this->io->writeError(sprintf('%s', $process->getOutput()), true, IOInterface::VERY_VERBOSE);

                return $clangBinFound;
            }
        }

        return null;
    }

    protected function findBinary(string $name): ?string
    {
        $findBinaryCommands = ['command -v', 'which', 'type -p'];
        foreach ($findBinaryCommands as $findBinaryCommand) {
            $process = new Process(
                [
                    $findBinaryCommand,
                    $name,
                ]
            );
            $process->run();
            if ($process->getExitCode() === 0) {
                break;
            }
        }

        if ($process->getExitCode() !== 0) {
            return null;
        }

        return trim(str_replace($name . ' is', '', $process->getOutput()));
    }
}
