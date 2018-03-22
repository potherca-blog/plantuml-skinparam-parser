<?php

$constants = [];

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'graphic/HtmlColorUtils',
    '^\s+(?P<NAME>.+?)\s?=\s?set.getColorIfValid\("(?P<VALUE>[^"]+)"\)'
);

array_walk($matches, function ($match) use (&$constants) {
    $constants[$match['NAME']] = $match['VALUE'];
});

return $constants;