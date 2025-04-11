<?php

namespace DazzaDev\Defontana\Enums;

enum Environment: string
{
    case Production = 'production';
    case Testing = 'testing';

    /**
     * Return the base URL associated with the environment.
     */
    public function baseUrl(): string
    {
        return match ($this) {
            self::Production => 'https://api.defontana.com/api/',
            self::Testing => 'https://replapi.defontana.com/api/',
        };
    }
}
