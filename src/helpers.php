<?php

namespace Vectorwyse\PhpStyles;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder = null, array $rules = []): Config
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    if ($finder) {
        $config = Config::create()->setFinder($finder);
    } else {
        $config = Config::create();
    }

    return $config->setRiskyAllowed(true)
                    ->setRules($rules);
}
