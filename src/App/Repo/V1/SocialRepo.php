<?php

namespace Callmeaf\Social\App\Repo\V1;

use Callmeaf\Base\App\Repo\V1\BaseRepo;
use Callmeaf\Social\App\Enums\SocialType;
use Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface;
use Callmeaf\Social\App\Strategy\Contracts\SocialBotConfig;
use Callmeaf\Social\App\Strategy\Contracts\SocialStrategyInterface;
use Callmeaf\Social\App\Strategy\SocialStrategyFactory;
use Illuminate\Http\Client\Response;

class SocialRepo extends BaseRepo implements SocialRepoInterface
{
    public function sendMessage(string $message,SocialType $socialType,SocialBotConfig $socialBotConfig): Response
    {
        $strategy = $this->socialStrategy(socialType: $socialType,socialBotConfig: $socialBotConfig);
        $response = $strategy->sendTextMessage(message: $message);

        if(! $response->ok()) {
            throw new \Exception($response->body());
        }

        return $response;
    }

    private function socialStrategy(SocialType $socialType,SocialBotConfig $socialBotConfig): SocialStrategyInterface
    {
        return SocialStrategyFactory::create(type: $socialType,socialBotConfig: $socialBotConfig);
    }
}
