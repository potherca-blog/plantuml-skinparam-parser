<?php

/*
 * @TODO: Validate all values from ${$sourcePath}/src/net/sourceforge/plantuml/ISkinParam.java
 *        are all present in the final list
 * @TODO: Validate all skinparams against "plantumlSkinparamKeyword" in
 *        https://raw.githubusercontent.com/aklt/plantuml-syntax/master/syntax/plantuml.vim
 */

        // @FIXME: Move value => constant convertion to separate script
            // $value = convert_value($value, $key);

// /* Remove values with numeric keys from array */$match = array_diff_key($match, array_flip(array_filter(array_keys($match), 'is_int')));

function convert_values_to_constants($value, $key) {

    switch ($value) {

        case 'center':
        case 'left':
            $value = strtoupper($value);
        break;

        case 'MY_RED':
            $value = 'DEFAULT_BORDER_COLOR';
        break;

        case 'MY_YELLOW':
            $value = 'DEFAULT_BACKGROUND_COLOR';
        break;

        case 'SansSerif':
            $value = 'DEFAULT_FONT_NAME';
        break;

        case 'black':
            // Currently ALL 'black are FontColor
            $value = 'DEFAULT_FONT_COLOR';
        break;

        case 'PLAIN':
            $value = 'DEFAULT_FONT_STYLE';
        break;

        case 'ITALIC':
            $value = 'DEFAULTYLE_EMPHASIS';
        break;

        case 'BOLD':
            $value = 'FONT_STYLE_STRONG';
        break;

        case 14:
            $value = 'DEFAULT_FONT_SIZE';
        break;

        case 'null':
            $value = 'EMPTY_VALUE';
        break;

        case '1.0':
            $value = 'THICKNESS_1';
        break;
    }

    return $value;
}
