<?php

namespace Callmeaf\Social\App\Http\Resources\Web\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @extends ResourceCollection<SocialResource>
 */
class SocialCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, SocialResource>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
