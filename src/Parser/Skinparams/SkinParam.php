<?php

namespace Potherca\PlantUmlSkinparamParser\Parser\Skinparams;

$skinParams = [];

$matches = \Potherca\PlantUmlSkinparamParser\get_matches(
    'SkinParam',
    '(?:^\s+result\.add\("(?P<Property1>[^"]+)"\);|getValue\("(?P<Property2>[^"]+)"\))'
);

array_walk($matches, function ($match) use (&$skinParams) {
    $name = $match['Property1'];
    if ($name === '') {
        $name = $match['Property2'];
    }

    if ($name !== '') {
        $skinParams[strtolower($name)] = ucfirst($name);
    }
});

$defaults = [
    'ActivityShape'             => 'roundBox', // roundBox, octagon
    'CircledCharacterRadius'    => 11,
    'ClassAttributeIconSize'    => 10,
    'ColorArrowSeparationSpace' => 0,
    'ComponentStyle'            => '', // or "UML2"
    'ConditionStyle'            => 'inside', // DIAMOND, INSIDE, FOO1
    'DefaultFontColor'          => 'black',
    'DefaultFontName'           => 'SansSerif',
    'DefaultFontSize'           => '13.5',
    'DefaultFontStyle'          => 'normal', // 'bold', 'italic', 'bold italic'
    'DefaultMonospacedFontName' => 'monospaced',
    'DefaultTextAlignment'      => 'left', // LEFT, CENTER, RIGHT
    'Dpi'                       => '92',
    'GenericDisplay'            => '', // or "old"
    'Groupinheritance'          => 1,
    'Guillemet'                 => true,
    'Handwritten'               => false,
    'HyperlinkUnderline'        => true,
    'Linetype'                  => 'splines',    // POLYLINE, ORTHO, SPLINES
    'MaxAsciiMessageLength'     => 0,
    'MaxMessageSize'            => 0,
    'MinClassWidth'             => 0,
    'Monochrome'                => false,
    'Nodesep'                   => 35,
    'PackageStyle'              => 'folder', // FOLDER, RECTANGLE, NODE, FRAME, CLOUD, DATABASE, AGENT, STORAGE, COMPONENT1, COMPONENT2, ARTIFACT, CARD;
    'Padding'                   => 0,
    'PageBorderColor'           => '', // <color>
    'PageExternalColor'         => '', // <color>
    // 'PageMargin'                => '(?)',
    'PathHovercolor'            => '', // <color>
    'Ranksep'                   => 60,
    'ResponseMessageBelowArrow' => false,
    'RoundCorner'               => 0,
    'SameClassWidth'            => false,
    'SequenceParticipant'       => '', // underline
    'Shadowing'                 => true,
    'Style'                     => '',  // strictuml
    'Svgdimensionstyle'         => true,
    'Svglinktarget'             => '_top',
    'SwimlaneWidth'             => '', // "same" or px
    'Tabsize'                   => 8,
    'TitleBorderRoundCorner'    => 0,
    'Wrapmessagewidth'          => 0,
    'Wrapwidth'                 => 0,
];
$defaults = array_change_key_case($defaults, CASE_LOWER);

array_walk($skinParams, function (&$value, $key) use ($defaults) {
    $key = strtolower($key);
    if (array_key_exists($key, $defaults) === true) {
        $value = $defaults[$key];
    } else {
        $value ='(?)';
    }
});

return $skinParams;

/*EOF*/
