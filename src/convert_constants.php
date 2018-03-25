<?php

namespace Potherca\PlantUmlSkinparamParser;

/**
 * @param array $skinParams
 * @param array $substitutes
 *
 * @return array
 */
function convert_constants(array $skinParams, array $substitutes) {
    array_walk($skinParams, function (&$value, $key) use ($substitutes) {
        if ($value === null) {
            $value = 'null';
        } else if (is_bool($value)) {
            $value = $value?'true':'false';
        } else if (is_string($value) && array_key_exists($value, $substitutes)) {
            $value = $substitutes[$value];
        } else if (preg_match('/^[A-Z]+$/', $value) === 1) {
            $value = strtolower($value);
        }
    });

    return $skinParams;
}

/*EOF*/
