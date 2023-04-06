<?php

namespace Pforret\PhpTextCleaner;

class Decoder
{
    public static function UrlDecode(string $input): string
    {
        // https://www.w3schools.com/tags/ref_urlencode.ASP
//        return html_entity_decode(urldecode(preg_replace_callback('/%([0-9a-fA-F]{2})/', function ($matches) {
//            return pack('H*', "c3" . $matches[1]);
//        }, $input)), ENT_QUOTES, 'UTF-8');
        return preg_replace_callback('/%([0-9a-fA-F]{2})/', function ($matches) {
            return pack('H*', 'C3'.$matches[1]);
        }, $input);
    }

    public static function Utf8Decode(string $input): string
    {
        return html_entity_decode(preg_replace_callback('/&#([0-9]+);/', function ($matches) {
            return chr($matches[1]);
        }, $input), ENT_QUOTES, 'UTF-8');
    }
}
