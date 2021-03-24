<?php

namespace Vectorwyse\PhpStyles;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder = null, array $rules = []): Config
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    $config = Config::create()
                ->setRiskyAllowed(true)
                ->setRules($rules);
    
    if ($finder) {
        $config = $config->setFinder($finder);
    }

    return $config;
}
