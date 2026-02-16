<?php

namespace Ansar\Config\Exception;

use Nette\Schema\ValidationException as NetteException;

class ValidationException extends InvalidConfigurationException
{
    private array $messages;

    public function __construct(NetteException $innerException)
    {
        parent::__construct($innerException->getMessage(), (int) $innerException->getCode(), $innerException);

        $this->messages = $innerException->getMessages();
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}
