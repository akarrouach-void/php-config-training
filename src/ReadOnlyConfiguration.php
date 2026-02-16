<?php

namespace Ansar\Config;

class ReadOnlyConfiguration implements ConfigurationInterface
{
    private ConfigurationInterface $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    public function get(string $key)
    {
        return $this->config->get($key);
    }
    public function exists(string $key): bool
    {
        return $this->config->exists($key);
    }
}
