<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Neontsun\Utilities\Arr;

final class ArrTest extends TestCase
{
    /**
     * @return void
     */
    public function testArraySpreadWithoutKeys(): void
    {
        $testArray = [1, 2, 3, 'test', [5, 6, 7, 8, ['9', '10'], 11], '12'];

        $resolvedArray = Arr::spread($testArray);

        $correctArray = [1, 2, 3, 'test', 5, 6, 7, 8, '9', '10', 11, '12'];

        $this->assertSame($correctArray, $resolvedArray);
    }

    /**
     * @return void
     */
    public function testArraySpreadWithKeys(): void
    {
        $testArray = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 'test',
            'e' => [
                'f' => 5,
                'g' => 6,
                'h' => 7,
                'i' => 8,
                'j' => [
                    'k' => '9',
                    'l' => '10',
                ],
                'm' => 11
            ],
            'n' => '12'
        ];

        $resolvedArray = Arr::spread($testArray, true);

        $correctArray = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 'test',
            'f' => 5,
            'g' => 6,
            'h' => 7,
            'i' => 8,
            'k' => '9',
            'l' => '10',
            'm' => 11,
            'n' => '12'
        ];

        $this->assertSame($correctArray, $resolvedArray);
    }
}