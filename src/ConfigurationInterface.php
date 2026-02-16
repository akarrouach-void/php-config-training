<?php

declare(strict_types=1);

namespace Ansar\Config;

use Ansar\Config\Exception\UnknownOptionException;
use Ansar\Config\Exception\ValidationException;

/**
 * Interface for reading configuration values
 */
interface ConfigurationInterface
{
    /**
     * @param string $key Configuration option path/key
     *
     * @psalm-param non-empty-string $key
     *
     * @return mixed
     *
     * @throws ValidationException if the schema failed to validate the given input
     * @throws UnknownOptionException if the requested key does not exist or is malformed
     */
    public function get(string $key);

    /**
     * @param string $key Configuration option path/key
     *
     * @psalm-param non-empty-string $key
     *
     * @return bool Whether the given option exists
     *
     * @throws ValidationException if the schema failed to validate the given input
     */
    public function exists(string $key): bool;
}
