<?php

namespace Potherca\PlantUmlSkinparamParser\Parser\Skinparams;

$skinParams = [];

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'AlignParam',
    '^\s+(?P<Property>[A-Z_]+)\(HorizontalAlignment\.(?P<Alignment>[A-Z]+)\)(?:,|;)'
);

array_walk($matches, function ($match) use (&$skinParams) {
    $name = \Potherca\PlantUmlSkinparamParser\upper_snake_to_camel_case($match['Property']);
    $skinParams[$name] = strtolower($match['Alignment']);
});

return $skinParams;

/*EOF*/
