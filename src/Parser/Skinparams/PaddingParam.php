<?php

namespace Potherca\PlantUmlSkinparamParser\Parser\Skinparams;

$skinParams = [];

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'PaddingParam',
    '^\s+([A-Z_]+)(?:, ([A-Z_]+))?;'
);

$matches = $matches[0];

/* Remove full match line */
array_shift($matches);

array_walk($matches, function ($match) use (&$skinParams) {
    $name = \Potherca\PlantUmlSkinparamParser\upper_snake_to_camel_case($match).'Padding';
    $skinParams[$name] = '10';
});

return $skinParams;

/*EOF*/
