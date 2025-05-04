<?php

namespace Callmeaf\Social\App\Enums;


use Callmeaf\Base\App\Enums\BaseStatus;

enum SocialStatus: string
{
    case ACTIVE = BaseStatus::ACTIVE->value;
    case INACTIVE = BaseStatus::INACTIVE->value;
    case PENDING = BaseStatus::PENDING->value;
}
