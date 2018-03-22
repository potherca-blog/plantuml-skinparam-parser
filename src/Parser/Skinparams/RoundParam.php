<?php

namespace Potherca\PlantUmlSkinparamParser\Parser\Skinparams;

$skinParams = [];

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'RoundParam',
    '^\s+DEFAULT,([a-zA-Z, ]+);'
);

$matches = array_map('trim', explode(',', trim($matches[0][1])));

array_walk($matches, function ($match) use (&$skinParams) {
    $name = ucfirst($match).'RoundCorner';
    $skinParams[$name] = '0';
});

return $skinParams;

/*EOF*/