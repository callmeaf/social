<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\Social\App\Models\Social::class,
    'route_key_name' => 'id',
    'repo' => \Callmeaf\Social\App\Repo\V1\SocialRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\Social\App\Http\Resources\Api\V1\SocialResource::class,
            'resource_collection' => \Callmeaf\Social\App\Http\Resources\Api\V1\SocialCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\Social\App\Http\Resources\Web\V1\SocialResource::class,
            'resource_collection' => \Callmeaf\Social\App\Http\Resources\Web\V1\SocialCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\Social\App\Http\Resources\Admin\V1\SocialResource::class,
            'resource_collection' => \Callmeaf\Social\App\Http\Resources\Admin\V1\SocialCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\Social\App\Events\Api\V1\SocialIndexed::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Api\V1\SocialCreated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Api\V1\SocialShowed::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Api\V1\SocialUpdated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Api\V1\SocialDeleted::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Api\V1\SocialStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Api\V1\SocialTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\Social\App\Events\Web\V1\SocialIndexed::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Web\V1\SocialCreated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Web\V1\SocialShowed::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Web\V1\SocialUpdated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Web\V1\SocialDeleted::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Web\V1\SocialStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Web\V1\SocialTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\Social\App\Events\Admin\V1\SocialIndexed::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Admin\V1\SocialCreated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Admin\V1\SocialShowed::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Admin\V1\SocialUpdated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Admin\V1\SocialDeleted::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Admin\V1\SocialStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Social\App\Events\Admin\V1\SocialTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\Social\App\Http\Requests\Api\V1\SocialIndexRequest::class,
            'store' => \Callmeaf\Social\App\Http\Requests\Api\V1\SocialStoreRequest::class,
            'show' => \Callmeaf\Social\App\Http\Requests\Api\V1\SocialShowRequest::class,
            'update' => \Callmeaf\Social\App\Http\Requests\Api\V1\SocialUpdateRequest::class,
            'destroy' => \Callmeaf\Social\App\Http\Requests\Api\V1\SocialDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Social\App\Http\Requests\Api\V1\SocialStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Social\App\Http\Requests\Api\V1\SocialTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialIndexRequest::class,
            'create' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialCreateRequest::class,
            'store' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialStoreRequest::class,
            'show' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialShowRequest::class,
            'edit' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialEditRequest::class,
            'update' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialUpdateRequest::class,
            'destroy' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Social\App\Http\Requests\Web\V1\SocialTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\Social\App\Http\Requests\Admin\V1\SocialIndexRequest::class,
            'store' => \Callmeaf\Social\App\Http\Requests\Admin\V1\SocialStoreRequest::class,
            'show' => \Callmeaf\Social\App\Http\Requests\Admin\V1\SocialShowRequest::class,
            'update' => \Callmeaf\Social\App\Http\Requests\Admin\V1\SocialUpdateRequest::class,
            'destroy' => \Callmeaf\Social\App\Http\Requests\Admin\V1\SocialDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Social\App\Http\Requests\Admin\V1\SocialStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Social\App\Http\Requests\Admin\V1\SocialTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'social' => \Callmeaf\Social\App\Http\Controllers\Api\V1\SocialController::class,
        ],
        RequestType::WEB->value => [
            'social' => \Callmeaf\Social\App\Http\Controllers\Web\V1\SocialController::class,
        ],
        RequestType::ADMIN->value => [
            'social' => \Callmeaf\Social\App\Http\Controllers\Admin\V1\SocialController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'socials',
            'as' => 'socials.',
            'middleware' => [],
        ],
        RequestType::WEB->value => [
            'prefix' => 'socials',
            'as' => 'socials.',
            'middleware' => [],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'socials',
            'as' => 'socials.',
            'middleware' => [
                'auth:sanctum',
                'role:' . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value,
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\Social\App\Enums\SocialStatus::class,
         'type' => \Callmeaf\Social\App\Enums\SocialType::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\Social\App\Exports\Api\V1\SocialsExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\Social\App\Exports\Web\V1\SocialsExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\Social\App\Exports\Admin\V1\SocialsExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\Social\App\Imports\Api\V1\SocialsImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\Social\App\Imports\Web\V1\SocialsImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\Social\App\Imports\Admin\V1\SocialsImport::class,
         ],
     ],
];
