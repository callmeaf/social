<?php

namespace Callmeaf\Social\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\Social\App\Enums\SocialType;
use Callmeaf\Social\App\Models\Social;
use Callmeaf\Social\App\Http\Resources\Api\V1\SocialCollection;
use Callmeaf\Social\App\Http\Resources\Api\V1\SocialResource;
use Callmeaf\Social\App\Strategy\Contracts\SocialBotConfig;
use Illuminate\Http\Client\Response;

/**
 * @extends BaseRepoInterface<Social,SocialResource,SocialCollection>
 */
interface SocialRepoInterface extends BaseRepoInterface
{
    /**
     * @param string $message
     * @param SocialType $socialType
     * @param SocialBotConfig $socialBotConfig
     * @return Response
     */
    public function sendMessage(string $message,SocialType $socialType,SocialBotConfig $socialBotConfig): Response;
}
