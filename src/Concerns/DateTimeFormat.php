<?php

namespace Chisu\PhpIntegration\Concerns;

use DateTime;
use DateTimeZone;

trait DateTimeFormat
{
    /**
     * @param string $date
     * @return string
     * @throws \Exception
     */
    protected function parseDateTime(string $date): string
    {
        return (new DateTime(
            date('Y-m-d H:i:s',
                strtotime('-4 sec',
                    strtotime($date . ' ' . date('H:i:s'))
                ))
        ))->setTimezone(new DateTimeZone('UTC'))->format('c');
    }
}