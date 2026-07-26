<?php

namespace App\Enums;

enum Role: string
{
    case SuperAdmin = 'superadmin';
    case Chairman = 'chairman';
    case Sekbid = 'sekbid';
    case Member = 'member';
}
