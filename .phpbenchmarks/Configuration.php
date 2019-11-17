<?php

declare(strict_types=1);

namespace PhpBenchmarks\BenchmarkConfiguration;

class Configuration
{
    public static function getComponentType(): int
    {
        return 2;
    }

    public static function getComponentName(): string
    {
        return 'CakePHP';
    }

    public static function getComponentSlug(): string
    {
        return 'cake-php';
    }

    public static function isPhp56Compatible(): bool
    {
        return true;
    }

    public static function isPhp70Compatible(): bool
    {
        return true;
    }

    public static function isPhp71Compatible(): bool
    {
        return true;
    }

    public static function isPhp72Compatible(): bool
    {
        return true;
    }

    public static function isPhp73Compatible(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return '/benchmark/helloworld';
    }

    public static function getCoreDependencyName(): string
    {
        return 'cakephp/cakephp';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 3;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 7;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 0;
    }

    public static function getBenchmarkType(): int
    {
        return 1;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/cake-php-common/blob/cake-php_3_hello-world/Controller/HelloWorldController.php#L10',
            'controller' => 'https://github.com/phpbenchmarks/cake-php-common/blob/cake-php_3_hello-world/Controller/HelloWorldController.php'
        ];
    }
}
