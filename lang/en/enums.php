<?php

use Callmeaf\Social\App\Enums\SocialStatus;
use Callmeaf\Social\App\Enums\SocialType;

return [
    SocialStatus::class => [
        SocialStatus::ACTIVE->name => 'Active',
        SocialStatus::INACTIVE->name => 'InActive',
        SocialStatus::PENDING->name => 'Pending',
    ],
    SocialType::class => [
        SocialType::TELEGRAM->name => 'Telegram',
        SocialType::INSTAGRAM->name => 'Instagram',
        SocialType::TWITTER->name => 'Twitter',
    ],
];
