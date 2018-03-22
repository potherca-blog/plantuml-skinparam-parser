<?php

namespace Potherca\PlantUmlSkinparamParser\Parser\Skinparams;

$skinParams = [];

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'FontParam',
    '^\s+(?<Property>[A-Z_]+)\((?P<FontSize>[0-9]+), Font\.(?P<FontStyle>[A-Z]+)(?:, "?(?P<FontColor>[^",]+)"?, "?(?P<FontName>[^")]+)"?)?',
    [
        'FontParamConstant.FAMILY' => 'SansSerif',
        'FontParamConstant.COLOR' => 'black',
    ]
);

$defaultParams = [
    'FontSize' => '14',     // 10 | 11 | 12 | 13 | 14 | 17 | 18
    'FontStyle' => 'PLAIN', // BOLD | ITALIC | PLAIN
    'FontColor' => 'black',
    'FontName' => 'SansSerif',
];

array_walk($matches, function ($match) use (&$skinParams, $defaultParams) {
    $name = \Potherca\PlantUmlSkinparamParser\upper_snake_to_camel_case($match['Property']);

    /* Set defaults */
    $match = array_merge($defaultParams, $match);

    $skinParams[$name.'FontColor'] = $match['FontColor'];
    $skinParams[$name.'FontName'] = $match['FontName'];
    $skinParams[$name.'FontSize'] = $match['FontSize'];
    $skinParams[$name.'FontStyle'] = $match['FontStyle'];
});

return $skinParams;

/*EOF*/
