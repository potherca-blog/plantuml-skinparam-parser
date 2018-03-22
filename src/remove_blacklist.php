<?php

namespace Potherca\PlantUmlSkinparamParser;

/**
 * @param array $skinParams
 * @param array $blacklist
 *
 * @return array
 */
function remove_blacklist(array $skinParams, array $blacklist) {
    $blacklist = array_map('strtolower', $blacklist);

    array_walk($skinParams, function (&$value, $key) use (&$skinParams, $blacklist) {
        if (in_array(strtolower($key), $blacklist) === true) {
            unset($skinParams[$key]);
        }
    });

    $skinParams = array_diff_key($skinParams,array_flip($blacklist));

    return $skinParams;
}

/*EOF*/
