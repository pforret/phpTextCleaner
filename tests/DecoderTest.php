<?php

namespace Pforret\PhpTextCleaner\Tests;

use Pforret\PhpTextCleaner\Decoder;
use PHPUnit\Framework\TestCase;

class DecoderTest extends TestCase
{
    public function testUrlDecode()
    {
        $this->assertEquals('áû', Decoder::UrlDecode('%E1%FB'));
    }

    public function testUtf8Decode()
    {
        //$this->assertEquals("àñ",Decoder::Utf8Decode("&#224;&#241;"));

    }
}
