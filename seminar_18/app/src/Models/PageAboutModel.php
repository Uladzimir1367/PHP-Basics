<?php

namespace Root\App\Models;

class PageAboutModel extends BaseModel
{
    static protected function getTableName(): string
    {
        return '';
    }

    static protected function getUniqueField(): string
    {
        return '';
    }

    public string $phone = '+375 (29) 122 30-40';
    public string $address = 'г. Мinsk, ул.Сказочная 13';
    public string $timeZone = 'Europe/Moscow';
    public array $workHours = [
        'пн' => '09:00 - 18:00',
        'вт' => '09:00 - 18:00',
        'ср' => '09:00 - 18:00',
        'чт' => '09:00 - 18:00',
        'пт' => '09:00 - 18:00',
        'сб' => 'выходной',
        'вс' => 'выходной',
    ];
}
