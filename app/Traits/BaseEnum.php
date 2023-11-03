<?php

declare(strict_types=1);

namespace App\Traits;

trait BaseEnum
{
    public static function getOptions(): array
    {
        $options = [];

        foreach (self::cases() as $type) {
            $options[$type->value] = $type->title();
        }

        return $options;
    }

    public static function getRandom(): int|string
    {
        return array_rand(self::getOptions());
    }

    public function equals(self $type): bool
    {
        return $this->value === $type->value;
    }

    public function is(self $type): bool
    {
        return $this->equals($type);
    }
}
