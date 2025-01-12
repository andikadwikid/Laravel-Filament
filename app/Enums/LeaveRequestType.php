<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum LeaveRequestType: string implements HasLabel
{
    case ANNUAL = 'annual';
    case SICK = 'sick';
    case MATERNITY = 'maternity';
    case PATERNITY = 'paternity';

    public function getLabel(): string|null
    {
        return str($this->value)->title();
    }
}
