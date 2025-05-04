<?php

namespace Callmeaf\Social\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\Social\App\Models\Social;
use Callmeaf\Social\App\Http\Resources\Api\V1\SocialCollection;
use Callmeaf\Social\App\Http\Resources\Api\V1\SocialResource;

/**
 * @extends BaseRepoInterface<Social,SocialResource,SocialCollection>
 */
interface SocialRepoInterface extends BaseRepoInterface
{

}
