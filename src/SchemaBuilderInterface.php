<?php

namespace Ansar\Config;

use Nette\Schema\Schema;

interface SchemaBuilderInterface
{
    public function addSchema(string $key, Schema $schema): void;
}
