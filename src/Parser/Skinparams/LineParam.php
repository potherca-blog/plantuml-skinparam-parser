<?php

namespace Potherca\PlantUmlSkinparamParser\Parser\Skinparams;

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'LineParam',
    '^(?:(?:\t| )+(?P<Property>[a-zA-Z]+)(?:,|;))+'
);

$values = [];

array_walk($matches, function ($match) use (&$values) {
    if (substr_count($match[0], ',') > 1) {
        /* Multiple values on the same line */
        $values = array_merge($values, array_map('trim', explode(',', trim($match[0]))));
    } else {
        $values[] = $match['Property'];
    }
});

$values = array_map(function ($value) {
    return ucfirst($value).'Thickness';
}, $values);

return array_map(function ($param){
    return '1.0';
}, array_flip($values));

/*EOF*/
