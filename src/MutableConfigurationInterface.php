<?php

namespace Ansar\Config;

use Ansar\Config\Exception\UnknownOptionException;

interface MutableConfigurationInterface
{
    /**
     * @param mixed $value
     *
     * @throws UnknownOptionException if $key contains a nested path which doesn't point to an array value
     */
    public function set(string $key, $value): void;

    /**
     * @param array<string, mixed> $config
     */
    public function merge(array $config = []): void;
}
