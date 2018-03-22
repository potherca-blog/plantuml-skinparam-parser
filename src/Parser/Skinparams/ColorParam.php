<?php

namespace Potherca\PlantUmlSkinparamParser\Parser\Skinparams;

$skinParams = [];

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'ColorParam',
    '^\s+(?<Property>[a-zA-Z]+)\((?P<Color>null|HtmlColorUtils\.[A-Z0-9_]+)',
    ['this'=> '']
);

array_walk($matches, function ($match) use (&$skinParams) {
    $name = ucfirst($match['Property']).'Color';
    $skinParams[$name] = str_replace('HtmlColorUtils.', '', $match['Color']);
});

return $skinParams;

/*EOF*/
