<?php

namespace Potherca\PlantUmlSkinparamParser;

/**
 * @param string $name
 * @param string $pattern
 * @param array $replace
 *
 * @return array
 */
function get_matches($name, $pattern, array $replace = [])
{
    global $sourcePath;

    $matches = [];

    $file = $sourcePath.'/src/net/sourceforge/plantuml/'.$name.'.java';

    $content = file_get_contents($file);

    if ($replace !== []) {
        $content = str_replace(array_keys($replace), array_values($replace), $content);
    }

    preg_match_all('/'.$pattern.'/m', $content, $matches, PREG_SET_ORDER);

    return $matches;
}

/*EOF*/
