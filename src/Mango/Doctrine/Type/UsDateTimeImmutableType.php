<?php

declare(strict_types=1);

namespace Manyou\Mango\Doctrine\Type;

use DateTimeImmutable;

use function date_create_immutable;

class UsDateTimeImmutableType extends AbstractUsDateTimeType
{
    public const NAME = 'us_datetime_immutable';

    protected function getClassName(): string
    {
        return DateTimeImmutable::class;
    }

    protected function createDateFromFormat(string $format, string $datetime): mixed
    {
        return DateTimeImmutable::createFromFormat($format, $datetime);
    }

    protected function createDate(string $datetime): mixed
    {
        return date_create_immutable($datetime);
    }

    public function getName(): string
    {
        return self::NAME;
    }
}
