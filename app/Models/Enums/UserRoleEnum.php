<?php

namespace App\Models\Enums;

enum UserRoleEnum: string
{
    case ADMIN = "ADMIN";
    case STAFF = "STAFF";
    case STUDENT = "STUDENT";
}
