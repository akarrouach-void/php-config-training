<?php

namespace Ansar\Config;

interface ConfigurationAwareInterface
{
    public function setConfiguration(ConfigurationInterface $configuration): void;
}
