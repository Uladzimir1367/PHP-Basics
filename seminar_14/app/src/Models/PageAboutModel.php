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

    public string $phone = '+375 (029) 122-22-00';
    public string $address = 'г. Минск, ул. Бульбяная 1';
    public string $timeZone = 'Europe/Minsk';
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
