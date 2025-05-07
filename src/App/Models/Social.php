<?php

namespace Callmeaf\Social\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Callmeaf\Base\App\Traits\Model\HasDate;
use Callmeaf\Base\App\Traits\Model\HasSearch;
use Callmeaf\Base\App\Traits\Model\HasStatus;
use Callmeaf\Base\App\Traits\Model\HasType;
use Callmeaf\SocialBot\App\Repo\Contracts\SocialBotRepoInterface;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Social extends BaseModel
{
     use SoftDeletes;
    use HasStatus,HasType,HasDate,HasSearch;
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

    public function searchParams(): array
    {
        return [
            [
                'chat_id' => 'chat_id',
            ],
            [
                'created_from' => 'created_at',
                'created_to' => 'created_at',
            ]
        ];
    }
}
