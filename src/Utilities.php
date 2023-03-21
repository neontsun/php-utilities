<?php

declare(strict_types=1);

namespace Neontsun\Utilities;

final class Utilities
{
    public static function guid(): string
    {
        if (function_exists('com_create_guid') === false) {
            return sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 65535),
                mt_rand(0, 65535),
                mt_rand(0, 65535),
                mt_rand(16384, 20479),
                mt_rand(32768, 49151),
                mt_rand(0, 65535),
                mt_rand(0, 65535),
                mt_rand(0, 65535)
            );
        }

        return trim(com_create_guid(), '{}');
    }


}
