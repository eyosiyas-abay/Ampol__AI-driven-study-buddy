<?php

namespace App\View\Components\Enums;

enum ButtonType: string
{
    case Primary = 'primary';
    case Secondary = 'secondary';
    case Outline = 'outline';
    case Icon = 'icon';
}
