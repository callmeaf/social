<?php

namespace Callmeaf\Social\App\Strategy;

use Callmeaf\Social\App\Enums\SocialType;
use Callmeaf\Social\App\Strategy\Admin\V1\TelegramStrategy;
use Callmeaf\Social\App\Strategy\Contracts\SocialBotConfig;
use Callmeaf\Social\App\Strategy\Contracts\SocialStrategyInterface;

class SocialStrategyFactory
{
    public static function create(SocialType $type,SocialBotConfig $socialBotConfig): SocialStrategyInterface
    {
        return match($type) {
            SocialType::TELEGRAM => new TelegramStrategy($socialBotConfig),
        };
    }
}
