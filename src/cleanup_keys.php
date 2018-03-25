<?php

namespace Potherca\PlantUmlSkinparamParser;

/**
 * @param array
 *
 * @return array
 */
function cleanup_keys($skinParams) {
    $fixedSkinParams = [];

    array_walk($skinParams, function ($value, $key) use (&$fixedSkinParams) {
        $fix = [
            'alignment'     => 'Alignment',
            'arrow'         => 'Arrow',
            'ascii'         => 'Ascii',
            'attribute'     => 'Attribute',
            'below'         => 'Below',
            'border'        => 'Border',
            'character'     => 'Character',
            'class'         => 'Class',
            'color'         => 'Color',
            'roundcorner'   => 'Roundcorner',
            'roundCorner'   => 'Roundcorner',
            'RoundCorner'   => 'Roundcorner',
            'dimension'     => 'Dimension',
            'display'       => 'Display',
            'external'      => 'External',
            'font'          => 'Font',
            'hover'         => 'Hover',
            'icon'          => 'Icon',
            'inheritance'   => 'Inheritance',
            'length'        => 'Length',
            'linktarget'    => 'Linktarget',
            'LifeLine'      => 'Lifeline',
            'margin'        => 'Margin',
            'message'       => 'Message',
            'monospaced'    => 'Monospaced',
            'name'          => 'Name',
            'page'          => 'Page',
            'participant'   => 'Participant',
            'radius'        => 'Radius',
            'shape'         => 'Shape',
            'separation'    => 'Separation',
            'size'          => 'Size',
            'space'         => 'Space',
            'style'         => 'Style',
            'text'          => 'Text',
            'Type'          => 'Type',
            'underline'     => 'Underline',
            'width'         => 'Width',
        ];

        $skinParam = str_replace(array_keys($fix), array_values($fix), $key);

        if ($skinParam === $key) {
            $skinParam = $key;
        }
        $fixedSkinParams[$skinParam] = $value;
    });

    return $fixedSkinParams;
}

/*EOF*/
