<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/src',
    ])
    ->withPreparedSets(deadCode: true, codeQuality: true, codingStyle: true, typeDeclarations: true, privatization: true, instanceOf: true, earlyReturn: true, doctrineCodeQuality: true, symfonyCodeQuality: true, symfonyConfigs: true)
    // uncomment to reach your current PHP version
    // ->withPhpSets()
    ->withImportNames(removeUnusedImports: true)
    ->withComposerBased(twig: true, doctrine: true, phpunit: true, symfony: true)
    ->withPhpVersion(PhpVersion::PHP_83)
    ->withAttributesSets(symfony: true, doctrine: true);
//    ->withTypeCoverageLevel(0)
//    ->withDeadCodeLevel(0)
//    ->withCodeQualityLevel(0);
