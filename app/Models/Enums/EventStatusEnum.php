<?php

namespace App\Models\Enums;

enum EventStatusEnum: string
{
    case PENDING = "PENDING";
    case OPEN = "OPEN";
    case FULL = "FULL";
    case REJECTED = "REJECTED";
    case COMPLETED = "COMPLETED";
    case PASSED_DUE = "PASSED_DUE";
}
