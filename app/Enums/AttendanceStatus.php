<?php

namespace App\Enums;

enum AttendanceStatus: string
{
    case PENDING = 'Pending';
    case ACCEPTED = 'Accepted';
    case DECLINED = 'Declined';

    public function labels(): string
    {
        return match ($this) {
            self::PENDING => "Pending",
            self::ACCEPTED => "Accepted",
            self::DECLINED => "Declined",
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }

}
