<?php

declare(strict_types=1);

namespace Neontsun\Utilities;

final class Arr
{
    /**
     * @param array $matrix
     * @param bool $preserveKeys
     * @return array
     */
    public static function spread(array $matrix, bool $preserveKeys = false): array
    {
        return iterator_to_array(
            new \RecursiveIteratorIterator(
                new \RecursiveArrayIterator($matrix)
            ),
            $preserveKeys
        );
    }
}
