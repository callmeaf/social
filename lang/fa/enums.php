<?php

use Callmeaf\Social\App\Enums\SocialStatus;
use Callmeaf\Social\App\Enums\SocialType;

return [
    SocialStatus::class => [
        SocialStatus::ACTIVE->name => 'فعال',
        SocialStatus::INACTIVE->name => 'غیر فعال',
        SocialStatus::PENDING->name => 'در انتظار',
    ],
    SocialType::class => [
        SocialType::TELEGRAM->name => 'تلگرام',
        SocialType::INSTAGRAM->name => 'ایسنتاگرام',
        SocialType::TWITTER->name => 'توییتر',
    ],
];
