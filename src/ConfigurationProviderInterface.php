<?php

namespace Ansar\Config;

interface ConfigurationProviderInterface
{
    public function getConfiguration(): ConfigurationInterface;
}
