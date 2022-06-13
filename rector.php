<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $config): void {
    $config->rule(Rector\Symfony\Rector\MethodCall\FormBuilderSetDataMapperRector::class);
};
