<?php

declare(strict_types=1);

namespace Ansar\Config;

use Ansar\Config\Exception\UnknownOptionException;
use Ansar\Config\Exception\ValidationException;


interface ConfigurationInterface
{

    public function get(string $key);


    public function exists(string $key): bool;
}
