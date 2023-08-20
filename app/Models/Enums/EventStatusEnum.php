<?php

namespace App\Models\Enums;

enum EventStatusEnum: string
{
    case PENDING = "PENDING";
    case APPROVED = "APPROVED";
    case REJECTED = "REJECTED";
    case PASSED_DUE = "PASSED_DUE";
}
