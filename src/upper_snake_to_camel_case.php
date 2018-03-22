<?php

namespace Potherca\PlantUmlSkinparamParser;

/**
 * Convert UPPER_SNAKE_CASE to CamelCase
 *
 * @param string $subject
 *
 * @return string
 */
function upper_snake_to_camel_case($subject)
{
    return implode(
        '',
        array_map('ucfirst',
            array_map(
                'strtolower',
                explode('_', $subject)
            )
        )
    );
}

/*EOF*/
