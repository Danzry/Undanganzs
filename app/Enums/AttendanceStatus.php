<?php

namespace App\Enums;

enum AttendanceStatus: string
{
    case ACCEPTED = 'Accepted';

    case DECLINED = 'Declined';

    case PENDING = 'Pending';

}
