<?php

namespace Ansar\Config\Exception;

class InvalidConfigurationException extends \UnexpectedValueException implements ConfigurationExceptionInterface
{
    /**
     * @param string  $option      Name/path of the option
     * @param mixed   $valueGiven  The invalid option that was provided
     * @param ?string $description Additional text describing the issue (optional)
     */
    public static function forConfigOption(string $option, $valueGiven, ?string $description = null): self
    {
        $message = \sprintf('Invalid config option for "%s": %s', $option, self::getDebugValue($valueGiven));
        if ($description !== null) {
            $message .= \sprintf(' (%s)', $description);
        }

        return new self($message);
    }

    /**
     * @param mixed $value
     *
     * @psalm-pure
     */
    private static function getDebugValue($value): string
    {
        if (\is_object($value)) {
            return \get_class($value);
        }

        return \print_r($value, true);
    }
}
