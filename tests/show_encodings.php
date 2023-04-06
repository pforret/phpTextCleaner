<?php

include_once '../vendor/autoload.php';
use voku\helper\ASCII;

ini_set('mbstring.substitute_character', '_');

$texts = [
    'Don´t be afraid; I haven´t changed!',
    "\$time = [ '12.3 µsec' && '^A' ];",
    'Intérnàtíòñålîšâtîön',
    'άλφα,βήτα,δέλτα',
    '?key1=value1&key2=value2',
    "<a href='/example'>example</a>",
];

foreach ($texts as $text) {
    $outputs = [
        'ORIGINAL INPUT TEXT' => $text,
        'urlencode()' => urlencode($text),
        'rawurlencode()' => rawurlencode($text),

        'json_encode()' => json_encode($text),
        'json_encode() HEX_AMP' => json_encode($text, JSON_HEX_AMP),
        'json_encode() UNESCAPED_UNICODE/UNESCAPED_SLASHES' => json_encode($text, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),

        'htmlspecialchars()' => htmlspecialchars($text),
        'htmlentities()' => htmlentities($text),
        'htmlentities() ENT_HTML401' => htmlentities($text, ENT_HTML401),
        'mb_convert_encoding(,HTML-ENTITIES,UTF-8)' => mb_convert_encoding($text, 'HTML-ENTITIES', 'UTF-8'),

        'transliterator_transliterate(Any-Latin; Latin-ASCII,)' => transliterator_transliterate('Any-Latin; Latin-ASCII', $text),
        'mb_convert_encoding(,ASCII)' => mb_convert_encoding($text, 'ASCII'),
        'iconv ASCII//TRANSLIT//IGNORE' => iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text),
        'ASCII() voku/portable-ascii' => ASCII::to_transliterate($text),
    ];
    line();
    line("## `$text`");
    line();
//    line("| operation | result |");
//    line("|-----------|--------|");
//    foreach ($outputs as $operation => $output) {
//        line("| $operation | `$output` |");
//    }
    line('```php');
    foreach ($outputs as $operation => $output) {
        line("// $operation");
        line("   $output");
    }
    line('```');
}

function line($text = ''): void
{
    echo "$text\n";
}
