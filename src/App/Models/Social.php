<?php

namespace Callmeaf\Social\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Callmeaf\Base\App\Traits\Model\HasDate;
use Callmeaf\Base\App\Traits\Model\HasStatus;
use Callmeaf\Base\App\Traits\Model\HasType;
use Callmeaf\SocialBot\App\Repo\Contracts\SocialBotRepoInterface;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Social extends BaseModel
{
     use SoftDeletes;
    use HasStatus,HasType,HasDate;
    protected $fillable = [
        'status',
        'type',
        'chat_id'
    ];

    public static function configKey(): string
    {
        return 'callmeaf-social';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }

    public function bots(): HasMany
    {
        /**
         * @var SocialBotRepoInterface $socialBotRepo
         */
        $socialBotRepo = app(SocialBotRepoInterface::class);
        return $this->hasMany($socialBotRepo->getModel()::class);
    }
}
