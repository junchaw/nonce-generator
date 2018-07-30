<?php

namespace Tests\Unit;

use Wu\Nonce\Nonce;
use PHPUnit\Framework\TestCase;

class NonceTest extends TestCase
{
    public function testGenerateNonce()
    {
        $len = Nonce::$length;
        $characters = Nonce::$characters;
        $nonce = Nonce::generate();
        $reg = '/^[' . $characters . ']{' . $len . '}$/';

        $this->assertRegExp($reg, $nonce);
    }
}
