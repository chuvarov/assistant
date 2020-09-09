<?php

namespace Chuvarov\Helpers\Tests;

use Chuvarov\Helpers\StringHelper;
use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    public function testSortWord(): void
    {
        $stringOne = 'elmno';
        $stringTwo = 'илмно';

        $resultOne = StringHelper::sortWord('lemon');
        $resultTwo = StringHelper::sortWord('лимон');

        $this->assertSame($stringOne, $resultOne);
        $this->assertSame($stringTwo, $resultTwo);
    }

    public function testSortOffer(): void
    {
        $offerOne = 'elmno aegnor aaabnn aelpp';
        $offerTwo = 'илмно аеилнпсь аабнн бклооя';

        $resultOne = StringHelper::sortOffer('lemon orange banana apple');
        $resultTwo = StringHelper::sortOffer('лимон апельсин банан яблоко');

        $this->assertSame($offerOne, $resultOne);
        $this->assertSame($offerTwo, $resultTwo);
    }
}