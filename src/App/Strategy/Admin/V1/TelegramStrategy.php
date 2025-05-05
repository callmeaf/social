<?php

namespace Callmeaf\Social\App\Strategy\Admin\V1;

use Callmeaf\Social\App\Strategy\Contracts\SocialBotConfig;
use Callmeaf\Social\App\Strategy\Contracts\SocialStrategyInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class TelegramStrategy implements SocialStrategyInterface
{
    public function __construct(protected SocialBotConfig $socialBot)
    {
    }

    public function sendTextMessage(string $message): Response
    {
        $url = $this->socialBot->getApiUrl() . $this->socialBot->getToken() . '/sendMessage';
        return Http::post($url,[
            'chat_id' => $this->socialBot->getChatId(),
            'text' => $message,
            'parse_mode' => 'Markdown'
        ]);
    }
}
